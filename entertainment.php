<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Entertainment</title>
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
    top:0;
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
    width: 93.5vw;
    height: 700px;
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
    width: 93.5vw;
    height: 700px;
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
    width: 93.5vw;
    height: 700px;
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
    width: 46vw;
    height: 350px;
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
    width: 46vw;
    height: 350px;
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
    </div>
    <div class="mainPage">
        <h1 class="logo" style="font-size: 2vw">Entertainments in Shymkent</h1>
        <p>Shymkent has very much sights for tourists and it’s residents. The third largest city of Kazakhstan don’t have to be hide behind of Nur-Sultan and Almaty. Shymkent has it’s own sights tourist’s can visit. And even around Shymkent are also amazing places to see.</p>
        <hr>
        <h2 class="logo">Techo Park "Kiyal Alemi"</h2>
        <p>You need a little bit amusement in the center of Shymkent? Go to the Fantasy World (Kazakh: Kiyal Alemi) or also well known as Techno Park. It offers Ferris Wheel, Roller-coaster, a Upside-Down House, Sleds and other attractions.</p>
        <div class="firstPicture">
            <img src="shymkent-pic-entertainment1.jpeg" alt="">
            <img src="shymkent-pic-entertainment2.jpeg" alt="">
            <br>
            <span>The Theme park in the heart of Shymkent: “Techno Park” or “Kiyal Alemi”</span>
        </div>
        <div class="popup-image">
            <span>&times;</span>
            <img src = "shymkent-pic-entertainment1.jpeg" alt = " ">
        </div> 
        <p>📌 Find this place on Maps: <a href="https://www.google.de/maps/place/42%C2%B019%273.864%22N+69%C2%B035%272.1084%22E/@42.317740,69.583919,19.42z">Google</a> or <a href="https://yandex.com/maps/?l=sat&ll=69.583919,42.317740&mode=poi&poi%5Bpoint%5D=69.583919%2C42.317740&z=19.42z">Yandex</a></p>
        <hr>
        <h2 class="logo">Tulip Fountain</h2>
        <p>The Tulip Fountain is one of most important sights of Shymkent. The red huge tulip with green leaves and blue basin gives also nice fresh air to their visitors during the hot summer days of Shymkent. The Tulip fountains is a reference that the region of Shymkent is the cradle of the Tulip flowers. During spring time thousands of wild tulips popping up out of the ground in the wild meadows, the steppe and mountains around Shymkent. But also the city of Shymkent is doing a great job and you will see tulips in the flowerbeds along the streets and parks.</p>
        <div class="secondPicture">
            <img src="shymkent-pic-entertainment3.jpeg" alt="">
            <span>The Tulip fountain is one of the famous sights of Shymkent. (Image: Info Shymkent)</span>
        </div>
        <p>📌 Find this place on Maps: <a href="https://www.google.de/maps/place/42%C2%B019%2714.31912%22N+69%C2%B035%2717.87964%22E/@42.3206442,69.5882999,20.29z">Google</a> or <a href="https://yandex.com/maps/?l=sat&ll=69.5882999,42.3206442&mode=poi&poi%5Bpoint%5D=69.5882999%2C42.3206442&z=20.29z">Yandex</a></p>
        <hr>
        <h2 class="logo">River Koshkar Ata and Mausoleum</h2>
        <p>You want to cool down during a hot day in Shymkent? You want to go swimming with your kids for free? Then you can walk along Shymkent’s river Koshkar Ata starting at the Central Mosque near Independence Park. You will find nice public bathing places (with cabins to change clothes) along the crystal-clear river – but take care the water is fresh and really cold!</p>
        <div class="thirdPicture">
            <img src="shymkent-pic-entertainment4.jpeg" alt="">
            <span>Take a bath in the crystal-clear river ” Koshkar Ata”. </span>
        </div>
        <p>📌 Find this place on Maps: <a href="https://www.google.de/maps/place/42%C2%B018%2727.09%22N+69%C2%B036%276.1992%22E/@42.307525,69.601722,19.51z">Google</a> or <a href="https://yandex.com/maps/?l=sat&ll=69.601722,42.307525&mode=poi&poi%5Bpoint%5D=69.601722%2C42.307525&z=19.51z">Yandex</a></p>
        <hr>
        <h2 class="logo">Ethno Park “Ken Baba”</h2>
        <p>The Ken Baba is a small cute park in the center of Shymkent with very much attractions for kids and a small pond with a waterfall and four beautiful swans. Some restaurants also give you the opportunity to eat and drink nice Kazakh meals.</p>
        <div class="fourthPicture">
            <img src="shymkent-pic-entertainmen5.jpeg" alt="">
            <span>The swans pond with the waterfall in Ken Baba Park, Shymkent.</span>
        </div>
        <p>📌 Find this place on Maps: <a href="https://www.google.de/maps/place/42%C2%B019%274.062%22N+69%C2%B036%2718.0648%22E/@42.317795,69.605018,19.22z">Google</a> or <a href="https://yandex.com/maps/?l=sat&ll=69.605018,42.317795&mode=poi&poi%5Bpoint%5D=69.605018%2C42.317795&z=19.22z">Yandex</a></p>
        <hr>
        <h2 class="logo">Dendropark</h2>
        <p>The Dendrological park or short Dendropark is a very huge park that gives you the feeling of a real forest in South Kazakhstan. You have to pay a small entry fee before you can enter the park. Along a small river with some boat rental stations for renting small pedal boats you can enjoy the walk and relax after a busy day in Shymkent.</p>
        <div class="fivethPicture">
            <img src="shymkent-pic-entertainment6.jpeg" alt="">
            <img src="shymkent-pic-entertainment7.jpeg" alt="">
            <span>Shymkent’s Dendropark in autumn.</span>
        </div>
        <p>📌 Find this place on Maps: <a href="https://www.google.de/maps/place/42%C2%B022%279.21144%22N+69%C2%B037%2710.61256%22E/@42.3692254,69.6196146,17.76z">Google</a> or <a href="https://yandex.com/maps/?l=sat&ll=69.6196146,42.3692254&mode=poi&poi%5Bpoint%5D=69.6196146%2C42.3692254&z=17.76z">Yandex</a></p>
        <hr>
        <h2 class="logo">Arbat</h2>
        <p>The Arbat is the new heart of Shymkent and located next to Techno Park. It’s a beautiful pedestrian road with nice trees, restaurants and cafe’s. The colorful light installation transforms the Arbat even at night to a special place. You can listen very often to local musicians who showing their skills and performance and playing live music.</p>
        <div class="sixthPicture">
            <img src="shymkent-pic-entertainment8.jpg" alt="">
            <img src="shymkent-pic-entertainment9.jpg" alt="">
            <span>Arbat is the new heart of Shymkent</span>
        </div>
        <p>📌 Find this place on Maps: <a href="https://www.google.de/maps/place/42%C2%B019%272.352%22N+69%C2%B035%277.5588%22E/@42.317320,69.585433,19.22z">Google</a> or <a href="https://yandex.com/maps/?l=sat&ll=69.585433,42.317320&mode=poi&poi%5Bpoint%5D=69.585433%2C42.317320&z=19.22z">Yandex</a></p>
        <hr><h2 class="logo">There is more places to include as Mall centers like Shymkent Plaza, Mega Planet and they will be added soon...</h2>
    </div>
    <hr>
    <div class="footer">
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