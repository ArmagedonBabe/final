<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nature</title>
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
    color: rgba(256,256,256,0.7);
    font-family: 'Open Sans', sans-serif;
}
.logo{
    font-family: 'Zen Dots', cursive;
    font-size: 20px;
    color: white;
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
.header{
    top: 0;
    background-color: #1a1a1a;
    box-shadow: 0 1px 10px black;
    position: fixed;
    width: 100%;
    z-index: 10;
}
.mainPage{
    margin: 1vw 2vw;
}
.firstPicture{
    border: 1px solid black;
    background-color: #1a1a1a;
    box-shadow: 0 1px 10px rgba(0,0,0,0.4), 1px 0 10px rgba(0,0,0,0.4), 0 -1px 10px rgba(0,0,0,0.4), -1px 0 10px rgba(0,0,0,0.4);
}
.firstPicture img{
    width: 46vw;
    height: 350px;
    margin: 0.5vw;
    object-fit: cover;
    transition : .2s linear;
}
.firstPicture img:hover{
    transform: scale(1.03);
}
.secondPicture{
    border: 1px solid black;
    background-color: #1a1a1a;
    box-shadow: 0 1px 10px rgba(0,0,0,0.4), 1px 0 10px rgba(0,0,0,0.4), 0 -1px 10px rgba(0,0,0,0.4), -1px 0 10px rgba(0,0,0,0.4);
}
.secondPicture img{
    width: 46vw;
    height: 350px;
    margin: 0.5vw;
    margin: 0.5vw;
    object-fit: cover;
    transition : .2s linear;
}
.secondPicture img:hover{
    transform: scale(1.03);
}
.thirdPicture{
    border: 1px solid black;
    background-color: #1a1a1a;
    box-shadow: 0 1px 10px rgba(0,0,0,0.4), 1px 0 10px rgba(0,0,0,0.4), 0 -1px 10px rgba(0,0,0,0.4), -1px 0 10px rgba(0,0,0,0.4);
}
.thirdPicture img{
    width: 46vw;
    height: 350px;
    margin: 0.5vw;
    object-fit: cover;
    transition : .2s linear;
}
.thirdPicture img:hover{
    transform: scale(1.03);
}
.fourthPicture{
    border: 1px solid black;
    background-color: #1a1a1a;
    box-shadow: 0 1px 10px rgba(0,0,0,0.4), 1px 0 10px rgba(0,0,0,0.4), 0 -1px 10px rgba(0,0,0,0.4), -1px 0 10px rgba(0,0,0,0.4);
}
.fourthPicture img{
    width: 46vw;
    height: 350px;
    margin: 0.5vw;
    object-fit: cover;
    transition : .2s linear;
}
.fourthPicture img:hover{
    transform: scale(1.03);
}
.fivethPicture{
    border: 1px solid black;
    background-color: #1a1a1a;
    box-shadow: 0 1px 10px rgba(0,0,0,0.4), 1px 0 10px rgba(0,0,0,0.4), 0 -1px 10px rgba(0,0,0,0.4), -1px 0 10px rgba(0,0,0,0.4);
}
.fivethPicture img{
    width: 93.5vw;
    height: 700px;
    margin: 0.5vw;
    margin: 0.5vw;
    object-fit: cover;
    transition : .2s linear;
}
.fivethPicture img:hover{
    transform: scale(1.03);
}
.sixthPicture{
    border: 1px solid black;
    background-color: #1a1a1a;
    box-shadow: 0 1px 10px rgba(0,0,0,0.4), 1px 0 10px rgba(0,0,0,0.4), 0 -1px 10px rgba(0,0,0,0.4), -1px 0 10px rgba(0,0,0,0.4);
}
.sixthPicture img{
    width: 93.5vw;
    height: 700px;
    margin: 0.5vw;
    margin: 0.5vw;
    object-fit: cover;
    transition : .2s linear;
}
.sixthPicture img:hover{
    transform: scale(1.03);
}
.footer{
    margin: 1vw 4vw 1vw 4vw;
    padding: 1vw;
    display: flex;
    justify-content: space-around;
}
img{
    width: 10vw;
    object-fit: cover;
    transition : .2s linear;
}
.mainPage .popup-image{
    position: fixed;
    top : 0; left :0;
    background: rgba(0,0,0,.9);
    height: 100%;
    width: 100%;
    z-index: 200;
    display: none;
}
.mainPage .popup-image span{
    position: absolute;
    top : 0; right:10px;
    font-size: 60px;
    font-weight: bolder;
    color:#fff;
    cursor: pointer;
    z-index: 200;
}
.mainPage .popup-image img{
    position: absolute;
    top: 50%;left:50%;
    transform: translate(-50%,-50%);
    border-radius: 5px;
    width:750px;
    object-fit: cover;

}
a{
    text-decoration: none;
    color: white;
}
@media(max-width: 768px){
    .mainPage .popup-image img{
        width: 95%;
    }
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
                <div><button onclick="change7()">Exit</button></div>
                <div><a href="CONTACTS.php">CONTACTS</a></div>
            </div>
        </div>
    </div>iv>
    </div>
    <div class="mainPage">
        <h1 class="logo" style="font-size: 2vw">Nature around Shymkent</h1>
        <p>There are many Sights around Shymkent for tourists who love history, nature, pilgrimage or adventures. Everyone will find something exciting.</p>
        <hr>
        <h2 class="logo">Akmechet Cave</h2>
        <p>The largest cave of Central Asia is one hour away from Shymkent. Info Shymkent had a look inside of the cave Akmechet.</p>
        <p>Info Shymkent went by car from Shymkent to Akmechet. The cave is located in the Turkestan Region in the Baidibek district and around 80 kilometers away from Shymkent. After one hour and 30 minutes we arrived at the huge cave.</p>
        <p>The cave is embedded in a rough limestone landscape. We can see the huge entrance of the cave from the parking place already.</p>
        <div class="firstPicture">
            <img src="shymkent-pic-nature.jpg" alt="">
            <img src="shymkent-pic-nature2.jpg" alt="">
            <br>
            <span>The cave is so big that even a small forest is growing inside.</span>
        </div>
        <div class="popup-image">
            <span>&times;</span>
            <img src = "shymkent-pic-about1.jpg" alt = " ">
        </div> 
        <p>📌 Find this place on Maps: <a href="https://www.google.de/maps/place/43%C2%B00%2722.464%22N+69%C2%B042%2715.0444%22E/@43.006240,69.704179,17.00z">Google</a> or <a href="https://yandex.com/maps/?l=sat&ll=69.704179,43.006240&mode=poi&poi%5Bpoint%5D=69.704179%2C43.006240&z=17.00z">Yandex</a></p>
        <hr>
        <h2 class="logo">Aksu-Zhabagly National Reserve</h2>
        <p>The National Reserve of Kazakhstan is located just an hour away from Shymkent. We went to Aksu-Zhabagly by mini bus on the motor way to Taraz.</p>
        <div class="secondPicture">
            <img src="shymkent-pic-nature3.jpg" alt="">
            <img src="shymkent-pic-nature4.jpg" alt="">
            <span>View of the Uiken Valley looking up to the Aksuat mountain (4029m) in Aksu-Zhabagly.</span>
        </div>
        <p>📌 Find this place on Maps: <a href="https://www.google.de/maps/place/42%C2%B019%2719.4178%22N+70%C2%B034%2740.69236%22E/@42.3220605,70.5779701,11.00z">Google</a> or <a href="https://yandex.com/maps/?l=sat&ll=70.5779701,42.3220605&mode=poi&poi%5Bpoint%5D=70.5779701%2C42.3220605&z=11.00z">Yandex</a></p>
        <hr>
        <h2 class="logo">Aksu Canyon</h2>
        <p>Just in front of the doors of city Shymkent is one of the biggest and deepest canyon in Eurasia: The crystal blue water Aksu river and the soft stone of the Tian Shan Mountains created this 500 meters deep Aksu Canyon.</p>
        <div class="thirdPicture">
            <img src="shymkent-pic-nature6.jpg" alt="">
            <img src="shymkent-pic-nature67jpg.jpg" alt="">
            <span>The deep and huge Aksu Canyon with its crystal blue water</span>
        </div>
        <p>📌 Find this place on Maps: <a href="https://www.google.de/maps/place/42%C2%B018%278.99388%22N+70%C2%B018%2728.65996%22E/@42.3024983,70.3079611,12.00z">Google</a> or <a href="https://yandex.com/maps/?l=sat&ll=70.3079611,42.3024983&mode=poi&poi%5Bpoint%5D=70.3079611%2C42.3024983&z=12.00z">Yandex</a></p>
        <hr>
        <h2 class="logo">Kaindy Waterfall</h2>
        <p>One of the most beautiful waterfalls in South-Kazakhstan is the Kaindy Waterfall in the Sairam-Ugam Nationalpark.</p>
        <div class="fourthPicture">
            <img src="shymkent-pic-nature7.jpg" alt="">
            <img src="shymkent-pic-nature78jpg.jpg" alt="">
            <span>The Kaindy Waterfall in the Sairam-Ugam National Park.</span>
        </div>
        <p>📌 Find this place on Maps: <a href="https://www.google.de/maps/place/42%C2%B011%276.2196%22N+70%C2%B025%2741.9808%22E/@42.185061,70.428328,13.00z">Google</a> or <a href="https://yandex.com/maps/?l=sat&ll=70.428328,42.185061&mode=poi&poi%5Bpoint%5D=70.428328%2C42.185061&z=13.00z">Yandex</a></p>
        <hr>
        <h2 class="logo">Lower and Upper Lake of Sayram Su</h2>
        <p>The two beautiful cold lakes of Sayram Su are located in the Sairam-Ugam National park. The upper lake has a wonderful cyan blue color.</p>
        <div class="fivethPicture">
            <img src="shymkent-pic-nature8.jpg" alt="">
            <span>Upper Lake of Sayram Su.</span>
        </div>
        <p>📌 Find this place on Maps: <a href="https://www.google.de/maps/place/42%C2%B06%271.44576%22N+70%C2%B023%2731.46928%22E/@42.1004016,70.3920748,15.00z">Google</a> or <a href="https://yandex.com/maps/?l=sat&ll=70.3920748,42.1004016&mode=poi&poi%5Bpoint%5D=70.3920748%2C42.1004016&z=15.00z">Yandex</a></p>
        <hr>
        <h2 class="logo">Mashat Canyon</h2>
        <p>Mashat Canyon is another beautiful valley near Shymkent. The steep, rugged and rocky walls of the gorge are impressive and eagles often circle in the sky. In spring, flower lovers can enjoy an impressive spectacle in the Mashat Canyon when the wild tulips are in full bloom.</p>
        <div class="sixthPicture">
            <img src="shymkent-pic-nature10.jpg" alt="">
            <span>The Mashat Canyon is a pretty green line between it’s steep steep and rocky slopes. </span>
        </div>
        <p>📌 Find this place on Maps: <a href="https://www.google.de/maps/place/42%C2%B026%2712.9588%22N+70%C2%B00%2721.0924%22E/@42.436933,70.005859,16.00z">Google</a> or <a href="https://yandex.com/maps/?l=sat&ll=70.005859,42.436933&mode=poi&poi%5Bpoint%5D=70.005859%2C42.436933&z=16.00z">Yandex</a></p>
    </div>
    <hr>
    <div class="footer">
        <div class="footer1">
            <img src="shymkent-logo.png" alt="logo">
            <br>
            <div class="logo"><a href="final.php">SHYMKENT</a></div>
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

document.querySelectorAll('.mainPage img').forEach(image =>{
image.onclick = () =>{
  document.querySelector('.popup-image').style.display = 'block';
  document.querySelector('.popup-image img').src = image.getAttribute('src');
}

});
document.querySelector('.popup-image span').onclick = () =>{
  document.querySelector('.popup-image').style.display = 'none';
}
function change7(){window.location.href = '/openserver/phpmyadmin/final123/final/final.html';}
    </script>
</body>
</html>