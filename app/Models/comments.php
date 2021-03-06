<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public $comments;

    public static function add_comment($name,$text){
        new Comment($name,$text);
    }
    public static function like($id){
        $_SESSION['comments-like'][$id]++;
    }
    public static function dislike($id){
        $_SESSION['comments-dislike'][$id]++;
    }
}

class Comment{
    public $id;
    public $name;
    public $text;
    public $like;
    public $dislike;

    public function __construct(string $name, string $text){
        $this->name = $name;
        $this->text = $text;
        $this->like = 0;
        $this->dislike = 0;
        if(isset($_SESSION['comments-name']))
            $this->id = count($_SESSION['comments-name'])+1;
        else{
            $this->id = 0;
            $_SESSION['comments-name'] = [];
            $_SESSION['comments-text'] = [];
            $_SESSION['comments-like'] = [];
            $_SESSION['comments-dislike'] = [];
        } 

        $_SESSION['comments-name'][$this->id] = $this->name;
        $_SESSION['comments-text'][$this->id] = $this->text;
        $_SESSION['comments-like'][$this->id] = $this->like;
        $_SESSION['comments-dislike'][$this->id] = $this->dislike;
    }
    public function like($count=1){
        if(gettype($count)=="integer" && $count>1)
        {
            $this->like += $count;
            $_SESSION['comments-like'][$this->like] = $this->like;
        }
    }
    public function dislike($count=1){
        if(gettype($count)=="integer" && $count>1)
        {
            $this->dislike += $count;
            $_SESSION['comments-dislike'][$this->dislike] = $this->dislike;
        }
    }
}