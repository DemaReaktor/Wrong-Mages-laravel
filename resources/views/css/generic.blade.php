/* body */
html,
body {
    padding: 0;
    margin: 0;
}

body {
    display: flex;
    flex-direction: column;
    background-image: linear-gradient(rgba( 
    <?php 
    if(isset($_GET['dark'])&&
    strval((float)($_GET['dark'])) == $_GET['dark']
     && floatval($_GET['dark'])<=1 && floatval($_GET['dark'])>=0)
        $c = 1-$_GET['dark'];
    else
        $c = 0.6;

    if($c >=0.5)
        echo '255,255,255,'.($c*1.2-0.6);
    else 
        echo '0,0,0,'.(0.9-$c*1.8);
    ?>
    ) 0 100%), url("{{$git_folder}}/images/fon.png");
    background-size: cover;
    background-attachment: fixed;
    height: 100vh;
}

body * {
    margin-left: 70px;
    margin-right: 70px;
}

body * * {
    margin: 0px;
}

/* font */
@font-face {
    font-family: "Gothic";
    src: url("{{$git_folder}}/font1.ttf") format("opentype"),
        url("{{$git_folder}}/font1.woff") format("woff");
}

/* classes and other general elements*/
a,
a:visited,
a:hover {
    text-decoration: none;
    color: #000;
}

.button {
    background-color: rgba(0, 0, 0, 0.5);
    box-shadow: inset 0px 0px 0px 2px #000;
    border-radius: 20px;
    margin: 10px;
    margin-left: 0px;
    text-align: center;
    vertical-align: middle;
    padding: 20px;
    color: black;
    font-family: "Gothic";
    font-size: 40px;
    font-weight: bold;
}

.comment-left {
    display: flex;
    flex-direction: row;
    justify-content: left;
    width: 800px;
}

.comment-table {
    padding: 8px;
    background-color: rgba(255, 225, 0, 0.55);
    border: 7px solid #000;
    border-radius: 20px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}

.comment-table * {
    font-family: "Gothic";
}

.comments {
    display: flex;
    flex-direction: column;
    justify-content: left;
}

.user-comment-table {
border: 2px solid rgb(50,250,50);
color: rgba(150,150,255,0.5);
margin-right: auto;
}
.user-comment-name {
width: 200px;
color: rgba(255,200,100,1);
}
.user-comment-text {
    width: 700px;
    color: rgba(255,70,255,1);
    font-size: 15px;
}

h1 {
    margin-top: 50px;
    margin-bottom: 15px;
    text-align: center;
    font-family: "Gothic";
    font-size: 50px;
}

h2 {
    margin-top: 25px;
    margin-bottom: 10px;
    font-family: "Gothic";
    font-size: 35px;
}

p {
    margin-top: 0px;
    margin-bottom: 10px;
    font-size: 25px;
    font-family: cursive;
    text-align: start;
}

div p,
div h2 {
    margin: 0px;
}

input[type=text] {
    width: 250px;
}

textarea {
    width: 700px;
}

input[type=text],
textarea {
    background-color: rgba(255, 255, 194, 0.5);
    border: 2px solid rgb(255, 64, 0);
    font-size: 20px;
}

input[type=submit] {
    color: green;
    width: 200px;
    border: 0px;
}

/* ids */
/* menu */
#menu {
    margin: 0px;
    height: 100px;
    width: 100vw;
    background-color: #8793FF;
    opacity: <?php echo 0.25+$c*0.75; ?>;
    border-bottom: dashed #FFE600 3px;
    align-self: center;
    display: flex;
    justify-content: space-between;
}
#menu * {
    opacity: 1;
}
#left-menu-items,
#right-menu-items {
    display: flex;
    align-items: center;
    margin: 20px;
}

#left-menu-items {
    margin-left: 70px;
}

#right-menu-items {
    margin-right: 70px;
    justify-content: right;
}

/* left menu */
#logo,
#telegram,
#instagram,
#twitter {
    margin-right: 20px;
    width: 60px;
    height: 60px;
}

/* right menu */
#language,
#menu-button {
    margin-left: 20px;
    width: 60px;
    height: 60px;
}

#play {
    font-size: 25px;
    background-color: rgba(255, 255, 255, 0.5);
    margin: 0px;
    margin-left: 20px;
    padding: 15px;
    height: 30px;
}

.table {
    display: flex;
    background-color: rgba(255, 255, 255, <?php 
    echo $c*0.5;
    ?>);
    border: black 1px solid;
    border-radius: 50px;
    padding: 15px;
    padding-right: 5px;
    margin-left: auto;
    margin-right: auto;
}

.table * {
    align-self: center;
    text-align: center;
    margin-right: 10px;
}


/*scroll */
::-webkit-scrollbar {
    width: 20px;
}

::-webkit-scrollbar-track {
    border-radius: 10px;
    background-color: black;
}

::-webkit-scrollbar-thumb {
    border-radius: 8px;
    background-color: white;
}

@media (max-width:768px) {
    body {
        background-image: linear-gradient(rgba(255, 255, 255, 0.4) 0 100%), url("../images/kartaGreen.jpg");
        background-size: contain;
        background-repeat: repeat;
    }

    body * {
        margin-left: 15px;
        margin-right: 15px;
    }

    body * * {
        margin: 0px;
    }

    #menu {
        height: 70px;
        width: 100vw;
    }

    #menu * * {
        height: 45px;
        width: 45px;
    }

    #left-menu-items {
        margin-left: 15px;
        margin-right: 0px;
    }

    #right-menu-items {
        margin-right: 15px;
        margin-left: 0px;
    }

    #right-menu-items * {
        margin-left: 10px;
    }

    #logo {
        margin-right: 0px;
    }

    #telegram,
    #instagram,
    #twitter {
        width: 0px;
        margin-right: 0px;
        margin-left: 0PX;
    }

    #play {
        width: auto;
        height: auto;
        padding: 10px;
    }

    h1 {
        font-size: 30px;
        margin-top: 20px;
        margin-bottom: 12px;
    }

    h2 {
        font-size: 21px;
        margin-bottom: 5px;
        margin-top: 12px;
    }

    p {
        font-size: 17px;
        margin-top: 0px;
        margin-bottom: 5px;
    }

    .button {
        font-size: 18px;
        padding: 10px;
    }

    .table {
        padding: 5px;
        padding-right: 0px;
        border-radius: 15px;
    }

    .table * {
        margin: 0px;
        margin-right: 5px;
    }

    ::-webkit-scrollbar {
        width: 15px;
    }

    ::-webkit-scrollbar-track {
        border-radius: 7.5px;
        background-color: black;
    }

    ::-webkit-scrollbar-thumb {
        border-radius: 6px;
        background-color: white;
    }

}

@media (max-width:1200px) and (min-width:768px) {}