<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacts</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Zen+Dots&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    color: rgba(256,256,256,0.7);
    font-family: 'Open Sans', sans-serif;
}
.logo{
    font-family: 'Zen Dots', cursive;
    font-size: 20px;
    color: white;
}
.header{
    position: fixed;
    width: 100%;
    z-index: 10;
}
.navbar{
    display: flex;
    justify-content: space-around;
    padding: 20px;
    font-size: 15px;
}
.header input{
    position: absolute;
    font-size: 20px;
    top: 18px;
    left: 25px;
    display: none;
}
.header label{
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
.header{
    background-color: #1a1a1a;
    box-shadow: 0 1px 10px black;
}
.mainPage{
    margin: 1vw 2vw;
    height: 40vw;
}
.mainBorder{
    border: 1px solid black;
    background-color: #1a1a1a;
    text-align: center;
    padding: 2vw;
    height: 200px;
}
.first{
    float: left;
    width: 45vw;
    height: 35vw;
    border: 1px solid black;
    background-color: #1a1a1a;
    box-shadow: 0 1px 10px rgba(0,0,0,0.4), 1px 0 10px rgba(0,0,0,0.4), 0 -1px 10px rgba(0,0,0,0.4), -1px 0 10px rgba(0,0,0,0.4);
    text-align: center;
    padding-top: 4vw;
}
.first input{
    width: 25vw;
    height: 3vw;
    margin-bottom: 2vw;
}
.first button{
    width: 25.5vw;
    height: 3vw;
    margin-top: 2vw;
    margin-bottom: 2vw;
    background-color: green;
}
.second{
    float: right;
    width: 45vw;
    height: 35vw;
    border: 1px solid black;
    background-color: #1a1a1a;
    box-shadow: 0 1px 10px rgba(0,0,0,0.4), 1px 0 10px rgba(0,0,0,0.4), 0 -1px 10px rgba(0,0,0,0.4), -1px 0 10px rgba(0,0,0,0.4);
    text-align: center;
    padding-top: 4vw;
}
.second a{
    font-size: 1.8vw;
    margin:0 1vw;
}
.footer{
    margin: 1vw 4vw 1vw 4vw;
    padding: 1vw;
    display: flex;
    justify-content: space-around;
}
img{
    width: 10vw;
}


    </style>
</head>
<body>
    <div class="header"id = "navbar">
        <label for="toggle">&#9776</label>
        <input type="checkbox" id="toggle">
        <div class="navbar">
            <a class="logo" href="final.php">SHYMKENT</a>
            <div class="order">
                <div><a href="about.php">ABOUT</a></div>
                <div><a href="HISTORY.php">HISTORY</a></div>
                <div><a href="ENTERTAINMENT.php">ENTERTAINMENT</a></div>
                <div><a href="NATURE.php">NATURE</a></div>
                <div><a href="ESSENTIAL.php">ESSENTIAL</a></div>
            </div>
            <div class="order2">
                <div><a href="http://127.0.0.1/openserver/phpmyadmin/final123/subPages/CONTACTS.php">CONTACTS</a></div>
            </div>
        </div>
    </div>
    <div class="mainBorder">
        <br>
        <div class="logo" style="font-size: 1vw; color: rgba(256,256,256,0.6)">GOT A QUESTION?</div>
        <br>
        <div class="logo" style="font-size: 2vw">CONTACT US</div>
        <br>
        <div class="logo" style="font-size: 1vw; color: rgba(256,256,256,0.6)">We're here to help and answer any question you might have. We look forward to hearing from you.</div>
    </div>
    <div class="mainPage">
        <div class="first">
            <h2 class="logo">FILL OUT THE FORM</h2>
            <form action="send.php" method="post">
                <input type="text" name="subject" id="fname" placeholder="FIRST NAME" required>
                <br>
                <input type="text" name="secname" id="secname" placeholder="LAST NAME" required>
                <br>
                <input style="display: none;" type="email" name="email" id="email" placeholder="EMAIL" value="210103034@stu.sdu.edu.kz" >
                <br>
                <textarea name="message" id="quest" cols="50" rows="5" placeholder="WRITE YOUR QUESTION..."></textarea>
                <br>
                <button type = "submit" name = "send"><span class="logo">SUBMIT</span></button>
            </form>
        </div>
        <div class="second">
            <h2 class="logo" style="font-size: 1.9vw">SOCIAL MEDIAS OF DEVELOPERS</h2>
            <br>
            <h3 class="logo">SABYRZHAN ORYNBASSAR:</h3>
            <a href="sabyrzhanorynbassar@gmail.com" class="fa fa-google"></a><a href="https://www.youtube.com/@sabyrzhanorynbassar" class="fa fa-youtube"></a><a href="https://instagram.com/_sabvrzhan?igshid=YmMyMTA2M2Y=" class="fa fa-instagram"></a><a href="https://pin.it/1br28VE" class="fa fa-pinterest"></a><a href="https://t.me/sabvrzhan" class="fa fa-telegram"></a>
            <br>
            <br>
            <br>
            <br>
            <h3 class="logo">AMYRKHAN MAMYTBEK</h3>
            <a href="#" class="fa fa-google"></a><a href="#" class="fa fa-youtube"></a><a href="#" class="fa fa-instagram"></a><a href="#" class="fa fa-pinterest"></a><a href="#" class="fa fa-telegram"></a>
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
            <a href="about.php">ABOUT</a>
            <br>
            <br>
            <a href="HISTORY.php">HISTORY</a>
        </div>
        <div class="footer3">
            <a href="ENTERTAINMENT.php">ENTERTAINMENT</a>
            <br>
        </div>
        <div class="footer4">
            <a href="NATURE.php">NATURE</a>
            <br>
            <br>
            <a href="ESSENTIAL.php">ESSENTIAL</a>
        </div>
        <div class="footer5">
            <a href="CONTACTS.php">CONTACTS</a>
        </div>
    </div>
    <hr style="color: white">
    <div class="final-footer" style="margin-top: 1vw;margin-bottom: 1vw; display: flex; justify-content: space-around">
        <div><small>© SHYMKENT. Все права защищены</small></div>
        <div><small><a href="#">Пользовательское соглашение</a></small></div>
    </div>
    <script>
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
        function change7(){window.location.href = '/openserver/phpmyadmin/final123/final/final.html';}
        </script>
</body>
</html>