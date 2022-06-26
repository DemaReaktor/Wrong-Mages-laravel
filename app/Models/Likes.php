<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;

class likes extends Model
{
    use HasFactory;

    protected $table = 'comments-like';

    public static function like($id){
        if(isset($_COOKIE['login']) && Users::isLogin($_COOKIE['login'],$_COOKIE['password']) && !self::isLike($id,$_COOKIE['login']))
            self::insert(['comment-id'=> $id, 'user-id' => Users::getUser($_COOKIE['login'])['id']]);
    }

    public static function isLike($id, $login){
            $likes = self::all();
            foreach($likes as $like)
                if($like['comment-id'] == $id && $like['user-id'] == Users::getUser($login)['id'])
                    return true;
            return false;
    }
}
