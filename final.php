
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Zen+Dots&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Open+Sans&family=Zen+Dots&display=swap');
html{
    scroll-behavior: smooth;
}
body{
    padding: 0;
    margin: 0;
    background: linear-gradient(55deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.8) 51%, rgba(0,0,0) 85%);
    color: #fff;
    font-family: 'Open Sans', sans-serif;
}
.logo{
    font-family: 'Zen Dots', cursive;
    font-size: 20px;
}
.header{
    top: 0;
    position: fixed;
    z-index: 2.1;
}   
.navbar{
    display: flex;
    justify-content: space-around;
    padding: 20px;
    font-size: 15px;
}
label,input{
    position: absolute;
    font-size: 20px;
    top: 18px;
    left: 25px;
    display: none;
}
li{
    display: inline-block;
    margin: 0 20px 0 20px;
}
.order{
    display: flex;
    justify-content: space-between;
    width: 550px;
}
.order2{
    display: flex;
    justify-content: space-between;
    width: 200px;
}
a{
    text-decoration: none;
    color: #fff;
}
a:hover{
    color: rgba(256,256,256,0.7);
}
.mainItems{
    margin: 2vh 2vw 0 2vw;
}
.header{
    z-index: 9999;
    width: 100%;
    background-color: #1a1a1a;
    box-shadow: 0 1px 10px black;
}
.item1:hover{
    background-color: rgb(0, 0, 0);
    opacity: 0.8;
    transition: 0.5s;
    transform: scale(1.01);
}
.item1{
    background-image: url(shymkent-history.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    margin-bottom: 2vw;
    position: relative;
    width: 96vw;
    height: 100vh;
    border: 1px solid rgba(0,0,0,0.3);
    box-shadow: 0 1px 10px rgba(0,0,0,0.4), 1px 0 10px rgba(0,0,0,0.4), 0 -1px 10px rgba(0,0,0,0.4), -1px 0 10px rgba(0,0,0,0.4);
    object-fit: cover;
    transition : .2s linear;
}
.item2:hover{
    background-color: rgb(0, 0, 0);
    opacity: 0.8;
    transition: 0.5s;
    transform: scale(1.01);
}
.item2{
    background-image: url(shymkent-history2.jpeg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    margin-bottom: 2vw;
    position: relative;
    width: 96vw;
    height: 100vh;
    border: 1px solid rgba(0,0,0,0.3);
    box-shadow: 0 1px 10px rgba(0,0,0,0.4), 1px 0 10px rgba(0,0,0,0.4), 0 -1px 10px rgba(0,0,0,0.4), -1px 0 10px rgba(0,0,0,0.4);

}
.item3:hover{
    background-color: rgb(0, 0, 0);
    opacity: 0.8;
    transition: 0.5s;
    transform: scale(1.01);
}
.item3{
    background-image: url(shymkent-entertainment.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    margin-bottom: 2vw;
    position: relative;
    width: 96vw;
    height: 100vh;
    border: 1px solid rgba(0,0,0,0.3);
    box-shadow: 0 1px 10px rgba(0,0,0,0.4), 1px 0 10px rgba(0,0,0,0.4), 0 -1px 10px rgba(0,0,0,0.4), -1px 0 10px rgba(0,0,0,0.4);

}
.item4:hover{
    background-color: rgb(0, 0, 0);
    opacity: 0.8;
    transition: 0.5s;
    transform: scale(1.01);
}
.item4{
    background-image: url(shymkent-people.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    margin-bottom: 2vw;
    position: relative;
    width: 96vw;
    height: 100vh;
    border: 1px solid rgba(0,0,0,0.3);
    box-shadow: 0 1px 10px rgba(0,0,0,0.4), 1px 0 10px rgba(0,0,0,0.4), 0 -1px 10px rgba(0,0,0,0.4), -1px 0 10px rgba(0,0,0,0.4);

}
.item5:hover{
    background-color: rgb(0, 0, 0);
    opacity: 0.8;
    transition: 0.5s;
    transform: scale(1.01);
}
.item5{
    background-image: url(shymkent-nature2.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    margin-bottom: 2vw;
    position: relative;
    width: 96vw;
    height: 100vh;
    border: 1px solid rgba(0,0,0,0.3);
    box-shadow: 0 1px 10px rgba(0,0,0,0.4), 1px 0 10px rgba(0,0,0,0.4), 0 -1px 10px rgba(0,0,0,0.4), -1px 0 10px rgba(0,0,0,0.4);

}
.item6:hover{
    background-color: rgb(0, 0, 0);
    opacity: 0.8;
    transition: 0.5s;
    transform: scale(1.01);
}
.item6{
    background-image: url(shymkent-essential.jpeg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    margin-bottom: 2vw;
    position: relative;
    width: 96vw;
    height: 100vh;
    border: 1px solid rgba(0,0,0,0.3);
    box-shadow: 0 1px 10px rgba(0,0,0,0.4), 1px 0 10px rgba(0,0,0,0.4), 0 -1px 10px rgba(0,0,0,0.4), -1px 0 10px rgba(0,0,0,0.4);

}
.textBox{
    position: absolute;
    top: 20%;
    left: 20%;
    font-size: 5vw;
}
.button{
    position: absolute;
    top: 35%;
    left: 20%;
    font-size: 2vw;
    padding: 1vw;
    background-color: black;
    border: 5px solid rgba(0,0,0,0.5);
    border-radius: 10px;
}
.button:hover{
     background-color: rgba(0,0,0,0.75);
    cursor: pointer;
 }
  .button:active{
    color: #fff;
    border-color: #fff;
  }
  
img{
    width: 10vw;
}
.footer{
    margin: 1vw 4vw 1vw 4vw;
    padding: 1vw;
    display: flex;
    justify-content: space-around;
}
    </style>
</head>
<body>
    <div class="header"id = "navbar">
        <label for="toggle">&#9776</label>
        <input type="checkbox" id="toggle">
        <div class="navbar">
            <a class="logo" href="C:\OSPanel\modules\system\html\openserver\phpmyadmin\final\subPages\final.php">SHYMKENT</a>
            <div class="order">
                <div><a href="#it1">ABOUT</a></div>
                <div><a href="#it2">HISTORY</a></div>
                <div><a href="#it3">ENTERTAINMENT</a></div>
                <div><a href="#it5">NATURE</a></div>
                <div><a href="#it6">ESSENTIAL</a></div>
            </div>
            <div class="order2">
                <div><button onclick= "change7()">Exit</button></div>
                <div><a href="CONTACTS.php">CONTACTS</a></div>
            </div>
        </div>
    </div>
    <div class="mainItems">
        <div class="item1" id="it1">
            <span class="textBox">ABOUT</span>
            <span class="button" onclick = "change1()">ENTER &#8594</span>
        </div>
        <div class="item2" id="it2" >
            <span class="textBox">HISTORY</span>
            <span class="button"  onclick = "change2()">ENTER &#8594</span>
        </div>
        <div class="item3" id="it3">
            <span class="textBox">ENTERTAINMENT</span>
            <span class="button" onclick = "change3()">ENTER &#8594</span>
        </div>
        <div class="item5" id="it5">
            <span class="textBox">NATURE</span>
            <span class="button" onclick = "change5()">ENTER &#8594</span>
        </div>
        <div class="item6" id="it6">
            <span class="textBox">ESSENTIAL</span>
            <span class="button" onclick = "change6()">ENTER &#8594</span>
        </div>
    </div>
    <hr>
    <div class="footer">
        <div class="footer1">
            <img src="shymkent-logo.png" alt="logo">
            <br>
            <a class="logo" href="final.php">SHYMKENT</a>
        </div>
        <div class="footer2">
            <a href="#it1">ABOUT</a>
            <br>
            <br>
            <a href="#it2">HISTORY</a>
        </div>
        <div class="footer4">
            <a href="#it5">NATURE</a>
            <br>
            <br>
            <a href="#it6">ESSENTIAL</a>
        </div>
    </div>
    <hr style="color: white">
    <div class="final-footer" style="margin-top: 1vw;margin-bottom: 1vw; display: flex; justify-content: space-around">
        <div><small>© SHYMKENT. Все права защищены</small></div>
        <div><small><a href="#">Пользовательское соглашение</a></small></div>
    </div>
    <script>
        function change1(){window.location.href = 'about.php';}
function change2(){window.location.href = 'history.php';}
function change3(){window.location.href = 'entertainment.php';}
function change4(){window.location.href = 'people.php';}
function change5(){window.location.href = 'nature.php';}
function change6(){window.location.href = 'essential.php';}
function change7(){window.location.href = '/openserver/phpmyadmin/final123/final/final.html';}


var lastScrollTop = 0;
navbar = document.getElementById("navbar");
window.addEventListener("scroll", function(){
  var scrollTop = window.pageXOffset || document
  .documentElement.scrollTop;
  if(scrollTop > lastScrollTop){
    navbar.style.top = "-80px";
  }else{
    navbar.style.top = "0";
  }
  lastScrollTop = scrollTop;
})
    </script>
</body>
</html>