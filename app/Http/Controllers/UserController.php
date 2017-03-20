<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function getSignup() {
        return view('user.signup');
    }

    public function postSignup(Request $request) {
        $this->validate($request, [
           'username' => 'required',
           'email' => 'email|required|unique:users',
           'password' => 'required|min:4',
        ]);
        $user = new User([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();
        $user->roles()->attach(Role::where('name', 'User')->first());
        Auth::login($user);

        if(Session::has('oldUrl'))
        {
            $oldUrl = Session::get('oldUrl');
            Session::forget('oldUrl');
            return redirect()->to($oldUrl);
        }

        return redirect()->route('dashboard.index');
    }

    public function getSignin() {
        return view('user.signin');
    }

    public function postSignin(Request $request){
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:4',
        ]);

        if( Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]) )
        {
            if(Session::has('oldUrl'))
            {
                $oldUrl = Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldUrl);
            }

            return redirect()->route('dashboard.index');
        }

        return redirect()->back();
    }

    public function getLogout() {
        Auth::logout();

        return redirect()->route('user.signin');
    }

    public function getProfile() {
        return view('user.profile');
    }
}
