<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\Likes;
use App\Models\Dislikes;

class CommentController extends Controller
{
    public function post(Request $request){
        Comments::add_comment($request->input('comment-text'));
        header('Location:'.$_POST['goback']);
        exit();
    }

    public function like(Request $request){
        Likes::like($_GET['id']);
        header('Location:'.$_POST['goback']);
        exit();
    }

    public function dislike(Request $request){
        Dislikes::dislike($_GET['id']);
        header('Location:'.$_POST['goback']);
        exit();
    }
}
