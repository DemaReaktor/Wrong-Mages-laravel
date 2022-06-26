<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'user';

    public static function isLogin($login, $password){
        $logins = Users::all();
        foreach($logins as $e)
            if($e['login'] == $login && $e['password'] == $password)
                return true;
        return false;
    }

    public static function getUser($login){
        foreach(self::all() as $user)
            if($user['login'] == $login)
                return $user;
        return null;
    }
}
