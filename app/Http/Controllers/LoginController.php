<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PageController;
use App\Models\Users;
use App\Models\ConfigModel;

class LoginController extends Controller
{
    public function login(Request $request){

        if(Users::isLogin($request->input('login'),$request->input('password')))
        {
            setcookie('login',$request->input('login'));
            setcookie('password',$request->input('password'));
        }
        header('Location:index');
        exit();
    }

    public function auth(Request $request){
        $logins = Users::all();

        foreach($logins as $login)
            if($login['login'] == $request->input('login'))
                {
                    header('Location:login');
                    exit(); 
                }
        Users::insert(['id'=> count(Users::all()), 'login' => $request->input('login'), 'password' => $request->input('password')??'']);
        $this->login($request);
    }

    public function exit(Request $request){
        setcookie('login',null);
        unset($_COOKIE['password']);

        header('Location:'.ConfigModel::path);
        exit();  
    }
}
