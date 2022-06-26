@extends('layout.main'.$_COOKIE['language']??'ua')

@section('css')
<link rel="stylesheet" type="text/css" href="{{$git_folder}}css/plans.css">
@endsection

@section('page')
    <h1>Плани</h1>
    <div id="plans">
        <div id="plan-table">
            <div class="item" id="done">
                <h2>Список виконаних справ</h2>
                <img class="deploy" src="{{$git_folder}}images/down.png" alt="deploy">
            </div>
            <div class="item" id="almost-done">
                <h2>Найближчі події</h2>
                <img class="deploy" src="{{$git_folder}}images/down.png" alt="deploy">
            </div>
            <div class="item" id="will-done">
                <h2>Речі, що скоро з'являться</h2>
                <img class="deploy" src="{{$git_folder}}images/down.png" alt="deploy">
            </div>
            <div class="item" id="future">
                <h2>Плани на майбутнє</h2>
                <img class="deploy" src="{{$git_folder}}images/down.png" alt="deploy">
            </div>
        </div>
        <img id="plan-image" src="{{$git_folder}}images/plane.gif" alt="planes">
    </div>
@endsection