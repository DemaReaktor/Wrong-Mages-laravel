@extends('layout.main'.$_COOKIE['language']??'ua')

@section('css')
<link rel="stylesheet" type="text/css" href="{{$git_folder}}css/index-dekstop.css">
@endsection

@section('page')
    <div class="table" id="Wrong-mages-table">
        <img id="Wrong-mages-image" src="{{$git_folder}}images/Недомаги.gif"
            alt="Wrong Mages">
        <div id="game">Онлайн гра з <br>мультивсесвітом<br> і токеномікою</div>
    </div>
    <h1>Будь сильнішим!</h1>
    <p>Бийся з іншими магами і покажи, на що ти здатен! Забирай у слабших ману, відавай її сильнішим, збирай біля себе
        сильних і йди на джерела Буття. Та не забувай, що не тільки ти хочеш отримати халяву, остерігайся вічних.</p>
    <h1>Основи гри</h1>
    <div id="colums">
        <div class="colum-item" id="ci1">
            <div class="colum-number">1</div>
            <p>Wrong mages - це метасесвіт, пронизаний магією та магами, в якій ви зможете воювати, розважатись,
                комунікувати і навіть заробляти ману і отримувати NFT.</p>
        </div>
        <div class="colum-item" id="ci2">
            <div class="colum-number">2</div>
            <p>Wrong mages - це метасесвіт, пронизаний магією та магами, в якій ви зможете воювати, розважатись,
                комунікувати і навіть заробляти ману і отримувати NFT.</p>
        </div>
        <div class="colum-item" id="ci3">
            <div class="colum-number">3</div>
            <p>Wrong mages - це метасесвіт, пронизаний магією та магами, в якій ви зможете воювати, розважатись,
                комунікувати і навіть заробляти ману і отримувати NFT.</p>
        </div>
        <div class="colum-item" id="ci4">
            <div class="colum-number">4</div>
            <p>Wrong mages - це метасесвіт, пронизаний магією та магами, в якій ви зможете воювати, розважатись,
                комунікувати і навіть заробляти ману і отримувати NFT.</p>
        </div>
        <div class="colum-item" id="ci5">
            <div class="colum-number">5</div>
            <p>Wrong mages - це метасесвіт, пронизаний магією та магами, в якій ви зможете воювати, розважатись,
                комунікувати і навіть заробляти ману і отримувати NFT.</p>
        </div>
    </div>
    <h1>Мана</h1>
    <div id="mana-table">
        <div id="mana-text">
            <p>мана(ME) - магічна енергія, що витікає з джерел Буття. Вона дозволяє магам використовувати магію,. Це
                позволило їй бути основною валютою метавсесвіту. Заробити її можна перемогою у битві, збиранням у
                витоків або в пригодах. Будьте обережні, це велика сила, а з силою приходить і відповідальність.</p>
            <div class="button">Купити</div>
        </div>
        <div class="table">
            <img id="mana-image" src="{{$git_folder}}images/mana.gif" alt="mana">
        </div>
    </div>
    <h1>Токеноміка</h1>
    <div class="table" id="tokenomic-table">
        <img id="tokenomic-image" src="{{$git_folder}}images/tokenomika.gif"
            alt="tokenomic">
    </div>
    <h1>Битви</h1>
    <p>Тебе хтось образив? Хтось засумнівався у твоїй силі? Просто вмаж йому! Але не де-не-де, а саме на арені. Покажи
        всім, що з якого тіста ти. Заодно поповниш ману, головне самому не стати боксерською грушею.</p>
    <div class="table" id="battle-table">
        <img src="{{$git_folder}}images/battle.gif" alt="battle">
        <img src="{{$git_folder}}images/manaUp.gif" alt="mana grow">
    </div>
    <div class="button" id="battle-description">Детальніше</div>
    <h1>Плани</h1>
    <div id="plan-table">
        <div id="plan-text">
            <p>Слідкуйте за подальшими оновленнями, вам в цьому допоможе планова карта. Команда не сидить на місці,
                потійно щось придумує, редагує, видаляє. Детальніше за посиланням.</p>
            <div class="button"><a href="{{$git_folder}}html/plans.html">Детальніше</a>
            </div>
        </div>
        <div class="table">
            <img id="plan-image" src="{{$git_folder}}images/plane.gif" alt="plans">
        </div>
    </div>
    <h1>Зворотній зв'язок</h1>
    <p>Для нас важливо почути вашу думку про цей проект. Ви можете задати нам питання або подивитися на відповіді до
        найпоширеніших питань. Також ви можете зв’язатися з нами в телеграмі, інстаграмі або твітері.</p>
    <div id="two-buttons">
        <div class="button">FAQ</div>
        <a href="{{$git_folder}}html/feedback.html">
            <div class="button">зворотній зв'язок</div>
        </a>
    </div>
    <h1>Посилання на інші сторінки</h1>
    <div class="button">
        <a href="{{$path}}guide">гайд по грі</a>
    </div>
    <div class="button">
        <a href="{{$path}}news">новини</a>
    </div>
    <div class="button">
        <a href="{{$path}}tokenomic">токеноміка</a>
    </div>
    <div class="button">
        <a href="{{$path}}plans">
            плани</a>
    </div>
    <div class="button">
        <a href="{{$path}}feedback">зворотній зв'язок
        </a>
    </div>
@endsection