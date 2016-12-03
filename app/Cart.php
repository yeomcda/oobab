<?php

namespace App;


use Illuminate\Support\Facades\Session;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id)
    {
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item, 'optionItems' => []];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }

    public function addOptionItem($optionItem, $main_item_id)
    {
        array_push($this->items[$main_item_id]['optionItems'], $optionItem);
        $this->totalPrice += $optionItem->price;
    }

    public function delete($id)
    {
        $minusQty = $this->items[$id]['qty'];
        $minusPrice = $this->items[$id]['price'];
        if( !empty($this->items[$id]['optionItems']) )
        {
            foreach($this->items[$id]['optionItems'] as $optionItem)
            {
                $minusPrice += $optionItem['price'];
            }
        }

        $this->totalQty -= $minusQty;
        $this->totalPrice -= $minusPrice;
        unset($this->items[$id]);

        if($this->totalQty == 0)
            Session::forget('cart');
    }

    public function deleteOptionItem($optionItem, $main_item_id, $option_index)
    {
        $minusPrice = $optionItem->price;
        $this->totalPrice -= $minusPrice;
        unset($this->items[$main_item_id]['optionItems'][$option_index]);
    }
}