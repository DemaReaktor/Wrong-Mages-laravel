@extends('layout.main'.$_COOKIE['language']??'ua')

@section('css')
<link rel="stylesheet" type="text/css" href="{{$git_folder}}css/feedback.css">
@endsection

@section('page')
<h1 style="text-align:left;">Авторизуватись</h1>
    <form method="POST" class="comment-table" style="width:800px;" action="/auth">
    @csrf
            <p>Логін</p><input type="text" id="comment-name" name="login">
            <p>Пароль</p><input type="text" id="comment-name" name="password">
            <input type="submit" value="Авторизуватись">
    </form> 
    <div class="button" style="margin-left: 0px;">
    <a href="{{$path}}login">Вже маєте аккаунт? зайдіть</a> 
</div>
@endsection