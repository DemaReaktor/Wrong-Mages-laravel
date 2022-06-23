<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Недомаги - зворотній зв'язок</title>
    <link rel="stylesheet" type="text/css" href="{{$git_folder}}css/generic.css">
    <link rel="stylesheet" type="text/css" href="{{$git_folder}}css/feedback.css">
    <link rel="shortcut icon" href="{{$git_folder}}images/icon.gif" />
</head>

<body id="fon">
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
<!-- < ?php 
if(isset($_SESSION['comments-name']))
for($i = 0;$i < count($_SESSION['comments-name'])+1;$i++){
    echo '<div class="user-commnet-table" style="border: 2px solid rgba(50,250,50,0.4); background-color: rgba(100,100,155,0.5); margin-right: auto;">
        <p class="user-commnet-name" style="width: 200px;
        color: rgba(255,200,100,1);">'.$_SESSION['comments-name'][$i].'</p>
        <p class="user-commnet-text" style="width: 700px; color: black; font-size: 15px;">'.$_SESSION['comments-text'][$i].'</p>
        </div>';
}
?> -->
</div>
</body>

</html>