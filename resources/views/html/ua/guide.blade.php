@extends('layout.main'.$_COOKIE['language']??'ua')

@section('css')
<link rel="stylesheet" type="text/css" href="{{$git_folder}}css/guide-dekstop.css">
@endsection

@section('page')
    <h1>Гайд по грі Недомаги</h1>
    <div id="table">
        <section>
            <img class="x" src="{{$git_folder}}images/x.png" alt="x">
            <p>Місто</p>
        </section>
        <section>
            <img class="x" src="{{$git_folder}}images/x.png" alt="x">
            <p>Оснащення</p>
        </section>
        <section>
            <img class="x" src="{{$git_folder}}images/mana.gif" alt="x">
            <p>Токеноміка</p>
        </section>
        <section>
            <img class="x" src="{{$git_folder}}images/battle.gif" alt="x">
            <p>Битви</p>
        </section>
        <section>
            <img class="x" src="{{$git_folder}}images/x.png" alt="x">
            <p>Подорожі</p>
        </section>
        <section>
            <img class="x" src="{{$git_folder}}images/x.png" alt="x">
            <p>Події</p>
        </section>
        <section>
            <img class="x" src="{{$git_folder}}images/x.png" alt="x">
            <p>Голосування</p>
        </section>
        <section>
            <img class="x" src="{{$git_folder}}images/x.png" alt="x">
            <p>Вічні</p>
        </section>
        <section>
            <img class="x" src="{{$git_folder}}images/x.png" alt="x">
            <p>Джерела Буття</p>
        </section>
    </div>
@endsection