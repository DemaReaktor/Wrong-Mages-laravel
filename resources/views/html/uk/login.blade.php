@extends('layout.main'.$_COOKIE['language']??'ua')

@section('css')
<link rel="stylesheet" type="text/css" href="{{$git_folder}}css/feedback.css">
@endsection

@section('page')
<h1 style="text-align:left;">Увійти</h1>
<form method="POST" class="comment-table" style="width:800px;" action="/login">
    @csrf
            <p>Логін</p><input type="text" id="comment-name" name="login">
            <p>Пароль</p><input type="text" id="comment-name" name="password">
            <input type="submit" value="Увійти">
    </form> 
    <div class="button" style="margin-left: 0px;">
        <a href="{{$path}}auth">Ще не маєте аакаунт? зареєструйтесь</a> 
    </div>
    <form method="POST" class="button" style="margin-left: 0px;" action="/exit">
    @csrf
            <input type="submit" id="submit-button" value="Вийти з аккаунта" style="margin-left: 0px; ">
    </form> 
@endsection