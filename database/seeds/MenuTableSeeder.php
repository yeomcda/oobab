<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = new \App\Menu([
            'category' => 1,
            'title' => '나시고렝',
            'description' => '나시고렝? 나시는 쌀, 고렝은 볶다를 의미하는 인도네시아 전통 볶음밥 입니다. "나시고렝"은 CNN에서 선정한 세계에서 가장 맛있는 음식 2위에 뽑히기도 한 세계적으로 유명한 음식입니다. 나시고렝 볶음밥, 계란후라이, 청양고추 토핑',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464860482626_iutakety.jpg',
            'price' => 4500
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 1,
            'title' => '데미그라스함박스테이크',
            'description' => '데미그라스 함박스테이크는 국내산 돼지고기와 호주산 소고기를 사용하여 잘게 다진 후 양파와 생빵가루를 배합하여 만들어, 부드러운 식감에 풍부한 육즙을 느낄 수 있습니다. 칼 없이 포크나 젓가락으로도 잘라서 드실 수 있을만큼 부드러워 이가 약한 어린이나 노인분들도 쉽게 드실 수 있습니다. ',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1472625127318_fvedvtbx.jpg',
            'price' => 5800
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 1,
            'title' => '고등어조림도시락',
            'description' => '등푸른 생선의 대표주자 국민생선 고등어! 노르웨이 청정해역에서 자란 신선한 고등어를 뼈와 가시를 발라내어 먹기 좋게 만들었습니다. 한국인 입맛에 맞는 매콤하고 칼칼한 특제 양념소스와 고등어를 홍고추와 통마늘로 함께 조려내어 비린내도 없고 맛도 좋습니다. 따끈한 한솥무세미와 함께 고등어조림을 즐겨 보세요~!',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1469500122062_nmdevtai.jpg',
            'price' => 5800
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 2,
            'title' => '매화도시락',
            'description' => '고등어데리야끼 2개 혹은 연어구이 1개와 치킨 1개 중 선택, 새우후라이 2개, 제육볶음, 소불고기, 샐러드, 멸치볶음, 계절나물 및 밑반찬, 레몬, 김치, 조미김, 타르타르소스 , 미니생수',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464860556138_eokwwlsl.jpg',
            'price' => 10000
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 2,
            'title' => '개나리도시락',
            'description' => '고등어조림 1조각 혹은 고등어데리야끼 2조각 중 선택, 새우후라이 1개, 소불고기, 오징어젓갈, 할라피뇨파스타, 해초무침, 계절나물 및 밑반찬, 레몬, 김치, 조미김, 타르타르소스 , 미니생수',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464860639082_myuxrbjs.jpg',
            'price' => 8000
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 2,
            'title' => '진달래도시락',
            'description' => '떡햄버그, 새우후라이, 치킨, 돈까스, 제육볶음, 샐러드, 오징어젓갈, 계절나물 및 밑반찬, 김치, 레몬, 조미김, 양식소스, 미니생수',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464860655902_dsxvgdpc.jpg',
            'price' => 7000
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 2,
            'title' => '점보새우프리미엄',
            'description' => '기존 새우살 중량보다 4~5배 많고 육질이 탱탱하고 식감이 쫄깃하여 국내 어디에서도 구할 수없는 특제 상품입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464860535425_fsbdpstv.jpg',
            'price' => 12000
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 3,
            'title' => '고기고기도시락',
            'description' => '부드러운 호주산 소목심에 한솥이 개발한 특제 불고기 소스로 버무려 만든 소불고기, 살코기와 지방이 골고루 섞인 목전지를 사용하여 부드러우면서도 씹는 맛이 살아있는 제육볶음을 동시에 드실 수 있습니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464860681109_aixzbklt.jpg',
            'price' => 3600
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 3,
            'title' => '햄치고기고기도시락',
            'description' => '진한 불고기 양념에 재운 부드러운 햄버그에 쫄깃한 국내산 쌀떡이 들어있는 떡햄버그, 부드러운 순닭다리살을 한솥이 개발한 튀김옷으로 바삭하게 튀긴 치킨가라아게, 부드러운 호주산 소목심에 한솥이 개발한 특제 불고기소스로 버무려 만든 소불고기, 살코기와 지방이 골고루 섞인 목전지를 사용하여 부드러우면서도 씹는 맛이 살아있는 제육볶음으로 구성된 푸짐한 도시락 입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1466037966740_jbxpgmdm.jpg',
            'price' => 5000
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 3,
            'title' => '돈치고기고기도시락',
            'description' => '국내산 돼지고기의 등심부분만을 두껍게 썰어 만든 돈까스, 부드러운 순닭다리살을 한솥이 개발한 튀김옷으로 바삭하게 튀긴 치킨가라아게, 부드러운 호주산 소목심에 한솥이 개발한 특제 불고기소스로 버무려 만든 소불고기, 살코기와 지방이 골고루 섞인 목전지를 사용하여 부드러우면서도 씹는 맛이 살아있는 제육볶음으로 구성된 푸짐한 도시락 입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464860730249_kbtymceq.jpg',
            'price' => 5200
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 3,
            'title' => '새치고기고기도시락',
            'description' => '흰다리새우(중하)가 통으로 들어가 통통한 새우후라이, 부드러운 순닭다리살을 한솥이 개발한 튀김옷으로 바삭하게 튀긴 치킨가라아게, 부드러운 호주산 소목심에 한솥이 개발한 특제 불고기소스로 버무려 만든 소불고기, 살코기와 지방이 골고루 섞인 목전지를 사용하여 부드러우면서도 씹는 맛이 살아있는 제육볶음으로 구성된 푸짐한 도시락 입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464860749189_thkzqewn.jpg',
            'price' => 6000
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 4,
            'title' => '칠리포크도시락',
            'description' => '국내산 돼지고기의 등심 부분만을 두껍게 썰어 만든 돈까스, 진한 불고기 양념으로 만든 부드러운 고기산적에 쫄깃한 국내산 쌀떡이 들어있는 떡산적, 국내산 돼지고기로 만든 탕수육을 고급스런 중화풍 칠리소스와 함께 먹는 도시락입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464860778390_lyjlnjsr.jpg',
            'price' => 3600
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 4,
            'title' => '돈까스도련님도시락',
            'description' => '국내산 돼지고기의 등심 부분만을 두껍게 썰어 만든 돈까스, 진한 불고기 양념으로 만든 부드러운 고기산적에 쫄깃한 국내산 쌀떡이 들어있는 떡산적, 부드러운 순닭다리살을 한솥이 개발한 튀김옷으로 바삭하게 튀긴 치킨가라아게로 구성된 베스트셀러 도시락 입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464860801660_auukyfdc.jpg',
            'price' => 3600
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 4,
            'title' => '국화도시락',
            'description' => '국내산 돼지고기의 등심 부분만을 두껍게 썰어 만든 돈까스, 담백한 오징어에 양파와 당근을 갈아 넣어 영양이 좋은 오징어까스, 살코기와 지방이 골고루 섞인 목전지를 사용하여 부드러우면서도 씹는 맛이 살아있는 제육볶음과 계절별 밑반찬까지 다양하게 드실 수 있는 도시락 입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464865153641_kghatava.jpg',
            'price' => 4000
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 4,
            'title' => '치킨제육도시락',
            'description' => '부드러운 순닭다리살을 한솥이 개발한 튀김옷으로 바삭하게 튀긴 치킨가라아게, 살코기와 지방이 골고루 섞인 목전지를 사용하여 부드러우면서도 씹는 맛이 살아있는 제육볶음으로 구성된 도시락입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464860942597_zlgsvzln.jpg',
            'price' => 4300
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 4,
            'title' => '돈치불고기도시락출시일',
            'description' => '국내산 돼지고기의 등심 부분만을 두껍게 썰어 만든 돈까스, 부드러운 순닭다리살을 한솥이 개발한 튀김옷으로 바삭하게 튀긴 치킨가라아게, 부드러운 호주산 소목심에 한솥이 개발한 특제 불고기소스로 버무려 만든 소불고기로 구성된 도시락 입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464860961056_dkxufntn.jpg',
            'price' => 4700
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 4,
            'title' => '동백도시락',
            'description' => '연하고 감칠맛나는 떡햄버그와 바삭한 새우후라이, 호주산 소불고기, 한솥만의 명품 치킨과 함께 계절별 밑반찬 및 나물류, 해물볼어묵, 김치, 김, 타르타르소스가 들어간 도시락입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464860976886_mpnjnjfz.jpg',
            'price' => 5000
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 4,
            'title' => '해피박스',
            'description' => '담백한 돈까스와 바삭한 국내산 돼지고기 탕수육에 누구나 좋아하는 계란후라이까지!! 인기있는 구성이 모두 들어 있어 먹으면 행복해지는 도시락입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464860993413_llnncqyd.jpg',
            'price' => 3000
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 4,
            'title' => '도련님도시락',
            'description' => '담백한 오징어에 양파와 당근을 갈아 넣어 영양이 좋은 오징어까스, 진한 불고기 양념으로 만든 부드러운 고기산적에 쫄깃한 국내산 쌀떡이 들어있는 떡산적, 부드러운 순닭다리살을 한솥이 개발한 튀김옷으로 바삭하게 튀긴 치킨가라아게로 구성된 도시락 입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464861016402_sgwwantr.jpg',
            'price' => 3400
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 4,
            'title' => '디럭스제육볶음도시락',
            'description' => '살코기에 지방에 고루 섞여있어 제육볶음에 가장 적합한 부위인 목전지를 사용하였습니다. 
부드러우면서 씹히는 맛이 살아있는 디럭스제육볶음 도시락입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464861032672_azlrniqq.jpg',
            'price' => 3500
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 5,
            'title' => '카레도시락',
            'description' => '누구도 흉내낼 수 없는 한결같을 맛을 고수해오며 20년 동안 인기를 이어온 오리지널 한솥 카레도시락 입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1465455494541_bboluwpd.jpg',
            'price' => 2700
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 5,
            'title' => '돈까스카레',
            'description' => '누구도 흉내낼 수 없는 한결같을 맛을 고수해오며 20년 동안 인기를 이어온 한솥 카레와 국내산 돼지고기의 등심부분만을 두껍게 썰어 만든 돈까스를 함께 먹는 등심돈까스카레 도시락 입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464861060188_mvpvuwgt.jpg',
            'price' => 3800
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 5,
            'title' => '청양고추카레도시락',
            'description' => '누구도 흉내낼 수 없는 한결같을 맛을 고수해오며 20년 동안 인기를 이어온 오리지널 한솥 카레도시락에 매콤한 고추토핑이 추가되었습니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464861540263_jdlzgcem.jpg',
            'price' => 3000
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 6,
            'title' => '폴리도시락',
            'description' => '폴리스티커를 드려요! 국내산 돼지고기의 등심부분만을 두껍게 썰어 만든 돈까스, 흰다리 새우가 통으로 들어가 통통한 새우후라이, 국내산 닭고기로 만든 새콤달콤한 미트볼에 맛있는 계란 후리가케까지 어린이들이 가장 좋아할 뿐 아니라 안전한 식재료로만 구성되어 있습니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464862203750_fnpsfdwz.jpg',
            'price' => 3800
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 7,
            'title' => '치킨마요',
            'description' => '밥 위에 지단채와 부드러운 닭다리살을 한솥이 개발한 튀김옷으로 바삭하게 튀긴 치킨가라아게를 슬라이스하여 올렸습니다. 그 위에 조미김을 부수어 넣고 마요드레싱과 덮밥소스를 뿌려 조금씩 비벼드세요.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464862305000_loijmuyu.jpg',
            'price' => 2700
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 7,
            'title' => '참치마요',
            'description' => '치킨마요에 치킨 대신 담백한 참치를 올렸습니다. 조미김을 부수어 넣고 마요드레싱과 덮밥소스를 뿌려 조금씩 비벼드세요.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464862338826_setcffuc.jpg',
            'price' => 2700
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 7,
            'title' => '참치샐러드마요',
            'description' => '담백한 참치와 신선한 6가지 채소를 듬뿍 올려 비벼먹는 건강한 샐러드마요 입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464862348892_riyszccp.jpg',
            'price' => 3200
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 7,
            'title' => '닭가슴살샐러드마요',
            'description' => '국내산 생강 소스를 국내산 닭가슴살에 발라 구워 슬라이스한 닭가슴살 생강구이와 신선한 6가지 채소를 듬뿍 올려 비벼먹는 건강한 샐러드마요 입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464862360078_gihzzxvp.jpg',
            'price' => 3500
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 7,
            'title' => '빅치킨마요',
            'description' => '밥 위에 지단채와 부드러운 순닭다리살을 한솥이 개발한 튀김옷으로 바삭하게 튀긴 치킨가라아게를 슬라이스하여 올렸습니다. 그 위에 조미김을 부수어 넣고 마요드레싱과 덮밥소스를 뿌려 조금씩 비벼드세요. 밥(+70g)도 치킨(+15g)도 소스(+10g)도 모두 빅으로 푸짐하게 담았습니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464862371298_ezguaeae.jpg',
            'price' => 3300
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 7,
            'title' => '청양고추치킨마요',
            'description' => '밥 위에 지단채와 부드러운 닭다리살을 한솥이 개발한 튀김옷으로 바삭하게 튀긴 치킨가라아게를 슬라이스에 매콤한 청양고추까지 올렸습니다. 그 위에 조미김을 부수어 넣고 마요드레싱과 덮밥소스를 뿌려 조금씩 비벼드세요.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464865178434_sjpapufo.jpg',
            'price' => 3000
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 7,
            'title' => '치킨샐러드마요',
            'description' => '한솥 대표메뉴 치킨마요에 신선한 6가지 채소를 듬뿍 올려 비벼먹는 건강한 샐러드마요 입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464862559524_ehrgvnjo.jpg',
            'price' => 3200
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 7,
            'title' => '돈치마요',
            'description' => '국내산 돼지고기의 등심부분만을 두껍게 썰어 만든 돈까스와 부드러운 순닭다리살로 만든 치킨가라아게를 한솥만의 빅덮밥소스, 마요소스와 함께 드세요.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464862570755_ctnmkcsr.jpg',
            'price' => 3300
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 8,
            'title' => '돈까스덮밥',
            'description' => '한국에서 제일 맛있는 일식 레스토랑 "미타니야"의 돈부리 소스와 똑같은 맛을 낸 한솥 특제 덮밥소스를 사용했습니다. 국내산 돼지고기의 등심부분만을 두껍게 썰어 만든 돈까스 올린 덮밥 입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464862610483_jtdzavzd.jpg',
            'price' => 3400
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 8,
            'title' => '새우돈까스덮밥',
            'description' => '한국에서 제일 맛있는 일식 레스토랑 "미타니야"의 돈부리 소스와 똑같은 맛을 낸 한솥 특제 덮밥소스를 사용했습니다. 흰다리새우(중하)가 통으로 들어간 새우후라이와 국내산 돼지고기의 등심 부분만을 두껍게 썰어 만든 돈까스를 함께 올려 더욱 고급스러운 덮밥 입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464862622523_myaomwby.jpg',
            'price' => 3600
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 8,
            'title' => '야채가끼아게 덮밥',
            'description' => '육류와 해산물을 사용한 덮밥이 아닌 건강한 야채(당근, 양파, 쑥갓) 덮밥입니다. 특히 수제형 성형방식으로 생산하여 야채 사이 사이에 공기층이 형성되어 더욱 바삭바삭한 식감이 특징으로 기존에 흔히 접할수 있던 야채튀김과 달리 고급스러운 비주얼과 맛을 느끼실수 있습니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1477449410058_dwrfwvpy.jpg',
            'price' => 3400
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 8,
            'title' => '불닭덮밥',
            'description' => '화끈하게 매우면서도 달달하게 양념한 치킨을 지단채를 토핑한 밥 위에 올렸습니다. 맛있게 매운 불닭덮밥 입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464862589561_dyiqpbmb.jpg',
            'price' => 3200
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 9,
            'title' => '김치볶음밥',
            'description' => '맛있게 익은 국내산 김치를 넣고 달달 볶은 김치볶음밥에 계란후라이를 얹어 더욱 든든한 김치볶음밥 입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464862697991_ndlpbvlu.jpg',
            'price' => 2900
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 9,
            'title' => '불고기김치볶음밥',
            'description' => '맛있게 익은 국내산 김치를 넣어 맛있게 볶은 김치볶음밥위에 한솥이 개발한 특제 불고기 소스로 버무려 만든 소불고기를 얹어 한끼 식사로 든든한 불고기김치볶음밥 입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464862715188_qhrhruhm.jpg',
            'price' => 3700
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 10,
            'title' => '불고기비빔밥',
            'description' => '부드러운 호주산 소목심에 한솥이 개발한 특제 불고기소스로 버무려 만든 소불고기와 신선한 야채를 담은 비빔밥 입니다. 비빔밥에 맛있게 개발한 비빔밥용 고추장으로 매콤하게 비벼드세요.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464862756516_itqcrkov.jpg',
            'price' => 4500
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 10,
            'title' => '제육강된장비빔밥',
            'description' => '살코기와 지방이 골고루 섞인 목전지를 사용하여 부드러우면서도 씹는 맛이 살아있는 제육볶음과 신선한 야채를 담은 비빔밥 입니다. 국내에서 제조한 재래식 된장에 냉이, 감자, 당근, 양파, 새우를 넣어 더욱 구수하고 진한 강된장소스로 비벼드세요.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464862787763_ogthljru.jpg',
            'price' => 4500
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 10,
            'title' => '열무강된장',
            'description' => '열무강된장',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464862806197_otxzpoaq.jpg',
            'price' => 3500
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 10,
            'title' => '참치야채고추장',
            'description' => '기름기를 뺀 담백한 참치와와 신선한 야채를 담은 비빔밥 입니다. 비빔밥에 맛있게 개발한 비빔밥용 고추장과 고소한 마요소스를 넣고 부드럽게 비벼드세요.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464862830124_qmyxsequ.jpg',
            'price' => 2800
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 11,
            'title' => '김치찌개 도시락',
            'description' => '잘익은 김치와 두부, 돼지고기를 넣고 푹 끓인 김치찌개 입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464862899471_zumhdjsh.jpg',
            'price' => 3000
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 11,
            'title' => '김치찌개 단품',
            'description' => '잘익은 김치와 두부, 돼지고기를 넣고 푹 끓인 김치찌개 입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464862899471_zumhdjsh.jpg',
            'price' => 2600
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 11,
            'title' => '육개장 도시락',
            'description' => '호주산 소고기와 토란, 숙주, 무, 고사리, 대파를 넣고 얼큰하게 끓인 육개장 입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464862909879_ucdgxrxb.jpg',
            'price' => 3500
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 11,
            'title' => '육개장 단품',
            'description' => '호주산 소고기와 토란, 숙주, 무, 고사리, 대파를 넣고 얼큰하게 끓인 육개장 입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464862909879_ucdgxrxb.jpg',
            'price' => 3100
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 12,
            'title' => '데미함박스테이크 반찬',
            'description' => '데미그라스 함박스테이크는 국내산 돼지고기와 호주산 소고기를 사용하여 잘게 다진 후 양파와 생빵가루를 배합하여 만들어, 부드러운 식감에 풍부한 육즙을 느낄 수 있습니다. 칼 없이 포크나 젓가락으로도 잘라서 드실 수 있을만큼 부드러운 데미그라스 함박스테이크 반찬을 드셔보세요!',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1472625879212_haxkamhw.jpg',
            'price' => 4800
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 12,
            'title' => '고등어조림 반찬',
            'description' => '고등어조림 실속반찬입니다. 노르웨이 청정해역에서 자란 신선한 고등어를 뼈와 가시를 발라내어 먹기 좋게 만들었습니다. 한국인 입맛에 맞는 매콤하고 칼칼한 특제 양념소스와 고등어를 홍고추와 통마늘로 함께 조려내어 비린내가 나지 않습니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1462781606890_ommpzlte.jpg',
            'price' => 4800
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 12,
            'title' => '고등어데리야끼 반찬',
            'description' => 'DHA가 풍부한 고등어에 데리야끼소스를 발라 구운 고등어데리야끼를 간편하게 드실 수 있는 먹음직한 실속반찬입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1430304409314_mbrqzkwt.jpg',
            'price' => 3400
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 12,
            'title' => '불고기 반찬',
            'description' => '한솥이 개발한 특제 불고기소스로 버무려 만든 소불고기를 간편하게 드실 수 있는 먹음직한 실속반찬입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1430304358154_rbfdozhg.jpg',
            'price' => 3900
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 12,
            'title' => '고기고기 반찬',
            'description' => '부드러운 호주산 소목심에 한솥이 개발한 특제 불고기 소스로 버무려 만든 소불고기, 살코기와 지방이 골고루 섞인 목전지를 사용하여 부드러우면서도 씹는 맛이 살아있는 제육볶음을 동시에 간편하게 드실 수 있는 먹음직한 실속반찬입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1430304323138_hondamuf.jpg',
            'price' => 2900
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 12,
            'title' => '제육볶음 반찬',
            'description' => '살코기와 지방이 골고루 섞인 목전지를 사용하여 부드러우면서도 씹는 맛이 살아있는 제육볶음을 간편하게 드실 수 있는 먹음직한 실속반찬입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1430304244835_slwrgtdb.jpg',
            'price' => 2800
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 12,
            'title' => '치킨 반찬',
            'description' => '부드러운 순닭다리살을 한솥이 개발한 튀김옷으로 바삭하게 튀긴 한솥 대표 메뉴 일본식 치킨가라아게를 간편하게 드실 수 있는 먹음직한 실속반찬입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1430304371142_lyzdudqy.jpg',
            'price' => 3200
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 12,
            'title' => '돈까스도련님 반찬',
            'description' => '국내산 돼지고기의 등심 부분만을 두껍게 썰어 만든 돈까스, 진한 불고기 양념으로 만든 부드러운 고기산적에 쫄깃한 국내산 쌀떡이 들어있는 떡산적, 부드러운 닭다리살을 한솥이 개발한 튀김옷으로 바삭하게 튀긴 치킨가라아게로 구성된 베스트셀러 도시락의 반찬만 간편하게 드실 수 있는 먹음직한 실속반찬입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1430304346674_xvkihcle.jpg',
            'price' => 2900
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 12,
            'title' => '칠리탕수육 반찬',
            'description' => '국내산 돼지고기로 만든 탕수육을 고급스런 중화풍 칠리소스를 간편하게 드실 수 있는 먹음직한 실속반찬입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1430304261477_hyojenby.jpg',
            'price' => 2600
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 12,
            'title' => '돈까스 반찬',
            'description' => '등심은 지방이 적고 결이 고와 부드러우면서도 담백하여 돈까스를 만드는데 가장 맛있는 부위입니다. 국내산 돼지고기의 등심 부분만을 두껍게 썰어 바삭하게 튀겨낸 한솥 등심돈까스를 간편하게 드실 수 있는 먹음직한 실속반찬입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1430302440970_txgvnoxr.jpg',
            'price' => 2500
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 13,
            'title' => '한솥밥',
            'description' => '지하 150m 암반수로 씻어낸 무세미로 지었습니다. 밥맛을 떨어뜨리는 불량쌀은 선별하고 고유의 맛층은 남겨 식미가 매우 뛰어납니다. 철저한 품질관리로 수분, 단백질, 아밀로스 함량을 우수한 수준으로 유지하고 있습니다. 한솥은 매 달 온도와 환경을 고려하여 만든 취반 매뉴얼대로 쌀을 불리고 물양을 조절하여 맛있게 지은 따끈한 밥을 제공합니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1435643633312_lzirkpsu.jpg',
            'price' => 900
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 13,
            'title' => '현미밥',
            'description' => '비타민과 식이섬유소가 풍부하여 건강에 좋은 국산 현미밥입니다. 1,000원 추가로 흰밥을 현미밥으로 교체할 수 있습니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1435643659777_eryhrcdj.jpg',
            'price' => 1700
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 13,
            'title' => '영양밥',
            'description' => '찹쌀, 은행, 대추채, 잣, 호박씨, 해바라기씨를 풍성하게 넣은 건강밥으로 불포화지방산, 비타민, 무기질이 다량 함유되어있어 건강을 챙길 수 있습니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1435645365781_vmfaufci.jpg',
            'price' => 2200
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 14,
            'title' => '김치',
            'description' => '100% 국내산 배추, 고춧가루로 만든 김치입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1430300855198_vusptzjb.jpg',
            'price' => 200
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 14,
            'title' => '볶음김치',
            'description' => '100% 국내산 배추, 고춧가루로 만든 김치를 숙성시켜 맛있게 볶아내어 한끼 식사로 간편하게 드실 수 있는 볶음김치입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1430300913112_hvlkqrfw.jpg',
            'price' => 300
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 14,
            'title' => '무말랭이',
            'description' => '무말랭이',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1430300953057_bcrtches.jpg',
            'price' => 200
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 15,
            'title' => '치킨BOXwith반달감자튀김(대)',
            'description' => '순닭다리살에 한솥이 개발한 튀김옷을 입혀 바삭하게 튀긴 일본식 치킨가라아게를 푸짐하게 담았습니다. 반달감자튀김을 함께 드립니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464864587281_ccbwhedr.jpg',
            'price' => 10000
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 15,
            'title' => '치킨BOXwith반달감자튀김(중)',
            'description' => '순닭다리살에 한솥이 개발한 튀김옷을 입혀 바삭하게 튀긴 일본식 치킨가라아게를 푸짐하게 담았습니다. 반달감자튀김을 함께 드립니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464864607855_gyxmzjqp.jpg',
            'price' => 5000
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 15,
            'title' => '치킨&닭강정',
            'description' => '치킨에 매콤달콤한 닭강정을 함께 즐길 수 있는 한솥의 추천간식입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464864749824_aymeupuc.jpg',
            'price' => 11000
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 15,
            'title' => '칠리탕수육BOX(대)',
            'description' => '국내산 돼지고기로 만든 탕수육을 푸짐하게 담았습니다. 고급스런 중화풍 칠리소스에 찍어 드시면 맛이 좋습니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464864840286_zuqalyvk.jpg',
            'price' => 8000
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 15,
            'title' => '칠리탕수육BOX(중)',
            'description' => '국내산 돼지고기로 만든 탕수육을 푸짐하게 담았습니다. 고급스런 중화풍 칠리소스에 찍어 드시면 맛이 좋습니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464864858593_ccsswkxp.jpg',
            'price' => 4000
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 15,
            'title' => '닭강정(중)',
            'description' => '최고의 맛을 위해 1년 넘게 준비한 닭강정 아이들 영양간식, 아빠 술안주, 가족 소풍에 아주 좋습니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464864898998_bhlcjsdb.jpg',
            'price' => 7000
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 15,
            'title' => '닭강정(중)',
            'description' => '최고의 맛을 위해 1년 넘게 준비한 닭강정 아이들 영양간식, 아빠 술안주, 가족 소풍에 아주 좋습니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464864912648_qgwddpvv.jpg',
            'price' => 2500
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 16,
            'title' => '반달감자튀김',
            'description' => '출출할 때 반달감자튀김 한 봉지면 딱! 간식으로도, 안주로도 그만입니다. 따끈따끈하게 튀겨낸 반달감자튀김 신메뉴를 드셔보세요~',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1462781333310_pfpwfhmi.jpg',
            'price' => 1200
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 16,
            'title' => '수제고로케',
            'description' => '국내산 감자·국내산 양파·국내산 돼지고기를 갈아 고로케에 적합한 자가제조 빵가루를 수작업으로 입혀 만들어낸 부드러운 감자고로케 입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1430304490867_tdsdcple.jpg',
            'price' => 1200
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 16,
            'title' => '매콤군만두',
            'description' => '국내산 돼지고기, 두부, 당면, 양배추, 양파, 대파로 만든 만두소에 국내산 청양고추를 넣어 맛있게 매콤한 한솥 군만두입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1431044201192_fhjcegot.jpg',
            'price' => 1300
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 16,
            'title' => '스낵모듬튀김',
            'description' => '치킨가라아게 2개, 군만두 2개, 고로케 2개, 새우후라이 1개가 골고루 들어있어 든든한 모둠간식 입니다.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1430304504675_gjioclar.jpg',
            'price' => 3000
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 17,
            'title' => '닭가슴살샐러드',
            'description' => '양상추, 로메인, 비타민, 적근대, 적채가 담긴 신선한 샐러드에 담백하고 부드러운 닭가슴살로 토핑하였습니다. 오직 한솥에서만 맛볼 수 있는 유자 또는 사과드레싱을 선택하세요.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464865010478_tjvzewkw.jpg',
            'price' => 3900
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 17,
            'title' => '치킨샐러드',
            'description' => '양상추, 로메인, 비타민, 적근대, 적채가 담긴 신선한 샐러드에 부드러운 순닭다리살로 만든 치킨을 슬라이스하여 토핑하였습니다. 오직 한솥에서만 맛볼 수 있는 유자 또는 사과드레싱을 선택하세요.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464865022173_iyvbznqn.jpg',
            'price' => 3600
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 17,
            'title' => '그린샐러드',
            'description' => '양상추, 로메인, 비타민, 적근대, 적채가 담긴 신선한 샐러드 입니다. 오직 한솥에서만 맛볼 수 있는 유자 또는 사과드레싱을 선택하세요.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464865035457_lekuarsg.jpg',
            'price' => 2900
        ]);
        $menu->save();

        $menu = new \App\Menu([
            'category' => 17,
            'title' => '미니샐러드',
            'description' => '양상추, 로메인, 비타민, 적근대, 적채가 담긴 신선한 미니샐러드 입니다. 오직 한솥에서만 맛볼 수 있는 유자 또는 사과드레싱을 선택하세요.',
            'imagePath' => 'http://www.hsd.co.kr/resources/uploads/lunch/1464865045848_iayimhkt.jpg',
            'price' => 1500
        ]);
        $menu->save();
    }
}
