<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{$git_folder}}css/guide-dekstop.css">
    <link rel="shortcut icon" href="{{$git_folder}}images/icon.gif" />
    @yield('css')
    <style>
    <?php
        use App\Models\ConfigModel;

        echo view('css/generic',[
        'git_folder' => ConfigModel::git_folder
        ]);
    ?>
    </style>
</head>

<body id="fon">
    <div id="menu">
        <div id="left-menu-items">
            <img id="logo" src="{{$git_folder}}images/icon.gif" alt="icon">
            <img id="telegram" src="{{$git_folder}}images/telegram.png" alt="telegram">
            <img id="instagram" src="{{$git_folder}}images/instagram.png"  alt="instagram">
            <img id="twitter" src="{{$git_folder}}images/twitter.png"  alt="twitter">
        </div>
        <div id="right-menu-items">
                <form method="POST" action="/language">
                    @csrf
                    <input type="image" id="language" name="language" src= "{{$git_folder}}images/ua.png"   alt="language" >
                    {!! $goback !!}
                </form>
            <div class="button" id="play">Грати</div>
            <img id="menu-button" src="{{$git_folder}}images/menu.png"  alt="menu icon">
        </div>
    </div>
    @yield('page')
</body>

</html>