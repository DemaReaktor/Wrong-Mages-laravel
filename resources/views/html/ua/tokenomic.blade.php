@extends('layout.main'.$_COOKIE['language']??'ua')

@section('css')
<link rel="stylesheet" type="text/css" href="{{$git_folder}}css/tokenomic.css">
@endsection

@section('page')
    <h1>Токеноміка</h1>
    <p>Гра Недомаги позволяє гравцям заробляти гроші, торгуватись і навіть вести свій бізнес. Для цього в грі вбудована економіка, валютою якої є мана(ME), а товарами э NFT.  Детальніше про все це у цій сторінці.
    </p>
    <h2>Мана</h2>
    <div id="mana-table">
            <p>Як писаМана(ME - Magic Energy)- магічна енергія, яка живить все магічне у цьому метавсесвіті. На відміну від реальності, магічними речами вважаються виключно ті, які працюють на цій речовині. Використовуючи ману, можна робити абсолютно все: міняти світ, бачити минуле, майбутнє, паралельні світи, отримувати абсолютно будь-яку інформацію, головне мати достатньо знань і мати достатньо сили щоб керувати. Важливість мани важко переоцінити, 

                Мана використовується і як єдина валюта. Неможливість підробити її та можливість зберігати, рахувати, транспортувати і використовувати як силу при необхідності, зробило її ідеальною грошовою одиницею. Подякувати за таке можна першим магам, які посвятили своє життя вивченю цього чуда.
                
                Пам’ятайте, за великим карманом стежать багато очей, а за великою силою - Вічні.
                
                На данний момент реальний токен ME ще не створений, уважно слідкуйте за новинами, щоб першими купити її( можливо тоді вона буде найдешевшою).
                </p>
        <div class="table">
            <img id="mana-image" src="{{$git_folder}}images/mana.gif"  alt="mana">
        </div>
    </div>
    <h2>Шляхи використання</h2>
    <p>Мана має кілька призначень як в метавсесвіті, так і в реальному житті.

        В реальності це один із способів допомогти команді. Весь донат в ігрі проходить через ману. Маючи великий попит на токен, ціна зростатиме, що даватиме більше прибутку від цього ж донату. Також токен, що росте, збільшить наплив нових користувачів, що теж позитивно вплине на ігру і команду. Мана є одним і варіантів закинути гроші в цей метавсесвіт і одним із способів їх вивести. 
        
        В самому метавсесвіті мана виступає єдиною грошовою одиницею, енергією для використання магії та споживчим ресурсом для деяких створінь та Вічних. В ігрі ману можна отримати, змагаючись з іншими магами в битвах, подорожуючи в онлайн режимі або збираючи її біля джерел Буття.</p>
        <div class="table" id="ways-use">
            <img src="{{$git_folder}}images/battle.gif" alt="battle">
            <img src="{{$git_folder}}images/manaUp.gif" alt="mana grows">
        </div>
    <h1>Токенообіг</h1>
    <div class="table" id="tokenomic-table">
        <img id="tokenomic-image" src="{{$git_folder}}images/tokenomika.gif"  alt="tokenomic">
    </div>
@endsection