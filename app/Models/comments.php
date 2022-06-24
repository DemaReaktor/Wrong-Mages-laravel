<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public $comments;
    
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
        $this->id = count($_SESSION['comment-id']);
        $_SESSION['comment-name'][$this->name] = $this->name;
        $_SESSION['comment-text'][$this->text] = $this->text;
        $_SESSION['comment-like'][$this->like] = $this->like;
        $_SESSION['comment-dislike'][$this->dislike] = $this->dislike;
    }
    public function like($count=1){
        if(gettype($count)=="integer" && $count>1)
        {
            $this->like += $count;
            $_SESSION['comment-like'][$this->like] = $this->like;
        }
    }
    public function dislike($count=1){
        if(gettype($count)=="integer" && $count>1)
        {
            $this->dislike += $count;
            $_SESSION['comment-dislike'][$this->dislike] = $this->dislike;
        }
    }
}