<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class content extends Controller
{
    public $values = [];

    public function __construct(){
        $this->set('language', $_GET['language']??'ua');
    }

    public function set($key,$value){
        $this->values[$key] = $value;
    }
    public function content(){
        return view('/'.$this->values['language']??'ua'.'/'.$this->values['page']??'index');
    }
}
