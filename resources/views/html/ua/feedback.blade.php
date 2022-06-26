@extends('layout.main'.$_COOKIE['language']??'ua')

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
.comment-likes {
    width: auto; 
    color: red; 
    font-size: 10px;
    padding-left: 10px;
    display: flex;
}

.comment-likes *{
    width:20px;
    height: 20px;
    font-size: 18px;
}

.count {
    margin-right: 3px;
    width:auto;
}

#like {
    margin-right: 15px; 
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
            <p>Коментар</p>
            <textarea name="comment-text" rows="6" cols="70">...</textarea>
            <input type="submit" value="Відправити коментарій">
            {!! $goback !!}
    </form> 
    </div>
    <div class="comments">
        @php
        use App\Models\Users;
        use App\Models\Comments;
        use App\Models\Likes;
        use App\Models\Dislikes;
        @endphp
@foreach(Comments::all() as $comment)
    <div class="user-commnet-table">
        <p class="user-commnet-name">
            {{$comment->user['login']}}
        </p>
        <p class="user-commnet-text" >
        {{ $comment['text']}}
        </p>
        <div class="comment-likes">
        <p class="count">
        @php
            $count = 0;
        @endphp
        @foreach(Likes::all() as $like)
            @if($like->comment['id'] == $comment['id'])
                @php
                    $count++;
                @endphp
            @endif
        @endforeach
        {{$count}}
        </p>
            <form method="POST" action="/like?id={{$comment['id']}}" id="like">
                @csrf
                <input type="image" name="like" src= "{{$git_folder}}images/like.png"   alt="like" >
                {!! $goback !!}
            </form>
            <p class="count">
            @php
            $count = 0;
        @endphp
        @foreach(Dislikes::all() as $like)
            @if($like->comment['id'] == $comment['id'])
                @php
                    $count++;
                @endphp
            @endif
        @endforeach
        {{$count}}    
            </p>
            <form method="POST" action="/dislike?id={{$comment['id']}}">
                @csrf
                <input type="image" id="dislike" name="dislike" src= "{{$git_folder}}images/dislike.png"   alt="dislike" >
                {!! $goback !!}
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection