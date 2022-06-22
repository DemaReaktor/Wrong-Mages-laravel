<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://demareaktor.github.io/Wrong-Mages-site/css/generic.css">
    <link rel="stylesheet" type="text/css" href="https://demareaktor.github.io/Wrong-Mages-site/css/guide-dekstop.css">
    <link rel="shortcut icon" href="https://demareaktor.github.io/Wrong-Mages-site/images/icon.gif" />
</head>

<body id="fon">
    <div id="menu">
        <div id="left-menu-items">
            <img id="logo" src="https://demareaktor.github.io/Wrong-Mages-site/images/icon.gif" alt="icon">
            <img id="telegram" src="https://demareaktor.github.io/Wrong-Mages-site/images/telegram.png" alt="telegram">
            <img id="instagram" src="https://demareaktor.github.io/Wrong-Mages-site/images/instagram.png"  alt="instagram">
            <img id="twitter" src="https://demareaktor.github.io/Wrong-Mages-site/images/twitter.png"  alt="twitter">
        </div>
        <div id="right-menu-items">
                <form method="POST" action="/language">
                    @csrf
                    <input type="image" id="language" name="language" src= "https://demareaktor.github.io/Wrong-Mages-site/images/uk.png"   alt="language" >
                    <input type="hidden" name="goback" value="<?php echo $_SERVER['REQUEST_URI']; ?>">
                </form>
            <div class="button" id="play">Play</div>
            <img id="menu-button" src="https://demareaktor.github.io/Wrong-Mages-site/images/menu.png"  alt="menu icon">
        </div>
    </div>
</body>

</html>