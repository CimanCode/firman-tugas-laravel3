<?php

namespace App\Http\Controllers;

use App\Models\AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class usercontrolle extends Controller
{
    public function login(Request $rq){
        if($rq->method() == "GET") {
            return view('login');
        }

        $usernmae = $rq->input('username');
        $email = $rq->input('email');
        $password = $rq->input('password');

        $user = AuthUser::query()->where('username', $usernmae)->first();
            if($user == null)
                return redirect()
                       ->back()
                       ->withErrors([
                        "msg" => "Username Failed"
                       ]);

        $user = AuthUser::query()->where('email', $email)->first();
            if($user == null){
                return redirect()
                    ->back()
                     ->withErrors([
                        "msg" => "Email Not Found"
                     ]);
            }

            if(!Hash::check($password, $user->password)){
                return redirect()
                    ->back()
                    ->withErrors([
                        "msg" => "Password Failed!!!!"
                    ]);
            }


            if(!session()->isStarted()) session()->start();
            session()->put("logged", true);
            session()->put("idUser", $user->id);
            return redirect(route('post.blog'));
    }

    public function logout(){
        session()->flush();
        return redirect(route('login'));
    }
}
