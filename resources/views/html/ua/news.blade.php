@extends('layout.main')

@section('css')
<link rel="stylesheet" type="text/css" href="{{$git_folder}}css/news.css">
@endsection

@section('page')
    <h1>Новини</h1>
    <div id="scroll-table">
        <div class="new">
            <p class="date">12.04.2022</p>
            <p class="text">Зародження проекту. Команда вирішила, у якому напрямку рухатись.</p>
        </div>
        <div class="new">
            <p class="date">14.04.2022</p>
            <p class="text">Поповнення!!! До команди приєднався новий працівник - художник!</p>
        </div>
        <div class="new">
            <p class="date">15.04.2022</p>
            <p class="text">Нарешті у нас з'явився макет сайту!!!</p>
        </div>
        <div class="new">
            <p class="date">15.04.2022</p>
            <p class="text">Нарешті вихідні!!! У цей непростий час дуже важливо іноді відпочивати</p>
        </div>
        <div class="new">
            <p class="date">16.04.2022</p>
            <p class="text">Як ви? Не забувайте кожного дня підтримувати зв'язок з близькими</p>
        </div>
        <div class="new">
            <p class="date">17.04.2022</p>
            <p class="text">Розширення сайту. Тепер можна дізнатись більше про гру</p>
        </div>
        <div class="new">
            <p class="date">30.04.2022</p>
            <p class="text">Готово!!! Нарешті сайт готовий!!!</p>
        </div>
        <div class="new">
            <p class="date">30.04.2022</p>
            <p class="text">Тут може бути ваша реклама. Звертайтесь до <a href="{{$path}}feedback">служби підтримки</a>></p>
        </div>
    </div>
@endsection