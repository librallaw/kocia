<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    public function showLogin()
    {
        return view ("auth.login");
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => "required",
            'password' => "required",
        ]);

        $user = User::where("email",$request->email)->first();

        if(!empty($user)){

            $password = $user->password;

            if (password_verify($request->password, $password)) {

                Auth::login($user->id);

                return redirect()->intended(route("showAdminDashboard"));
            } else {

                return redirect()->back()->with("message","Invalid credentials")->with("status","danger");
            }

        }else{

            return redirect()->back()->with("message","Invalid credentials")->with("status","danger");
        }

    }
}
