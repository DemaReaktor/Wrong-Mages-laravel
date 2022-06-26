@extends('layout.main'.$_COOKIE['language']??'ua')

@section('css')
<link rel="stylesheet" type="text/css" href="{{$git_folder}}css/feedback.css">
@endsection

@section('page')
<form method="POST" class="comment-table" style="width:800px;" action="/login">
    @csrf
            <p>увійти - логін</p><input type="text" id="comment-name" name="login">
            <p>Пароль</p><input type="text" id="comment-name" name="password">
            <input type="submit" value="Відправити коментарій">
    </form> 
    <form method="POST" class="comment-table" style="width:800px;" action="/auth">
    @csrf
            <p>Авторизуватись - логін</p><input type="text" id="comment-name" name="login">
            <p>Пароль</p><input type="text" id="comment-name" name="password">
            <input type="submit" value="Відправити коментарій">
    </form> 
    </form> 
@endsection