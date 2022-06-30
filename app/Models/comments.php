<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Users;


class Comments extends Model
{
    use HasFactory;

    protected $table = 'comment';
    public $comments;

    public function user(){
        return $this->belongsTo(Users::class,'user-id');
    }

    public static function add_comment($text){
        if(isset($_COOKIE['login']) && Users::isLogin($_COOKIE['login'],$_COOKIE['password']??''))
            self::insert(['id'=> count(self::all())+1, 'user-id' => Users::getUser($_COOKIE['login'])['id'], 'text' => $text]);
    }
}