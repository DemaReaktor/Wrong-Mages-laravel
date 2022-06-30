<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function post(Request $request){
        if(isset($_COOKIE['language'])&&$_COOKIE['language']=='ua')
            setcookie('language','uk');
        else 
            setcookie('language','ua');
        header('Location:'.$_POST['goback']);
        exit();
    }
}
