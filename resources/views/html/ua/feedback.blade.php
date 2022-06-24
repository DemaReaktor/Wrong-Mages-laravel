@extends('layout.main')

@section('css')
<link rel="stylesheet" type="text/css" href="{{$git_folder}}css/feedback.css">
<style>
    .user-commnet-table{
    border: 2px solid rgba(50,250,50,0.4); 
    background-color: rgba(100,100,155,0.5); 
    margin-right: auto;
}

.user-commnet-name {
    width: 200px;
    color: rgba(255,200,100,1);
}

.user-commnet-text {
    width: 700px; 
    color: black; 
    font-size: 15px;
}
.comment-likes{
    width: auto; 
    color: red; 
    font-size: 10px;
}
</style>
@endsection

@section('page')
    <h1>Зворотній зв'язок</h1>
    <p>Наша команда заківлена мати зв’язок з нашими магами. Ви можете коментувати наші оновлення, тестувати бета-версії, задавати питання і навіть критикувати нас.</p>
    <h2>Тестування</h2>
    <p>Наша команда заківлена мати зв’язок з нашими магами. Ви можете коментувати наші оновлення, тестувати бета-версії, задавати питання і навіть критикувати нас.</p>
    <h2>FAQ</h2>
    <p>Тут ви можете отримати відповіді на найпоширеніші питання, якщо ваше питання лишилось, можете звернутись до служби пітримки, </p>
    <div id="buttons">
        <div class="button">FAQ</div>
        <div class="button">задати питання</div>
    </div>
    <h2>Коментарі</h2>
    <p>Хочете побажати нам удачі, розкритикувати нас за руки із не того місця, дати рекомендацію чи просто поспілкуватись? Тоді вам сюди.</p>
    <div id="comment-left">
    <form method="POST" class="comment-table" style="width:800px;" action="/comment">
    @csrf
            <p>Ім'я</p><input type="text" id="comment-name" name="comment-name">
            <p>Коментар</p>
            <textarea name="comment-text" rows="6" cols="70">...</textarea>
            <input type="submit" value="Відправити коментарій">
            {!! $goback !!}
    </form> 
    </div>
    <div class="comments">
@isset($_SESSION['comments-name'])
<!-- I could foreach but I should get elements of 2 arrays -->
    @for($i = 0;$i < count($_SESSION['comments-name']);$i++)
    <div class="user-commnet-table">
        <p class="user-commnet-name">
            {{ $_SESSION['comments-name'][$i] }}
        </p>
        <p class="user-commnet-text" >
        {{ $_SESSION['comments-text'][$i] }}
        </p>
        <div class="comment-likes">
            вподобайки:{{$_SESSION['comments-like'][$i]}},лайки:{{$_SESSION['comments-dislike'][$i]}}
        </div>
    </div>
    @endfor
@endisset
</div>
@endsection