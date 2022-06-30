<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConfigModel;

class PageController extends Controller
{
    public function get(string $name){
        if(!isset($_COOKIE['language']))
        {
            setcookie('language','ua');
            $_COOKIE['language'] = 'ua';
        }

        return view('html/'.$_COOKIE['language'].'/'.$name,[
                'git_folder' => ConfigModel::git_folder,
                'path' => ConfigModel::path,
                'goback' => '<input type="hidden" name="goback" value="'.$_SERVER['REQUEST_URI'].'
                ">']);
    }
    public function getNull(){
        return $this->get('index');
    }
}
