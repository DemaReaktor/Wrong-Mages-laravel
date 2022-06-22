<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Недомаги - плани</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{$git_folder}}css/plans.css">
    <link rel="stylesheet" type="text/css" href="{{$git_folder}}css/generic.css">
    <link rel="shortcut icon" href="{{$git_folder}}images/icon.gif" />
</head>

<body id="fon">
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
</body>

</html>