<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
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
/*li{
    display: inline-block;
    margin: 0 20px 0 20px;
}*/
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
    z-index: 10;
    width: 100%;
}
.mainPage{
    margin: 1vw 2vw;
}
.imgCollage{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    border: 1px solid black;
    background-color: #1a1a1a;
    box-shadow: 0 1px 10px rgba(0,0,0,0.4), 1px 0 10px rgba(0,0,0,0.4), 0 -1px 10px rgba(0,0,0,0.4), -1px 0 10px rgba(0,0,0,0.4);
}
.iframe{
    border: 1px solid black;
    box-shadow: 0 1px 10px rgba(0,0,0,0.4), 1px 0 10px rgba(0,0,0,0.4), 0 -1px 10px rgba(0,0,0,0.4), -1px 0 10px rgba(0,0,0,0.4);
    background-color: #1a1a1a;
}
.imgCollage img{
    width: 30vw;
    object-fit: cover;
    transition : .2s linear;
}
.imgCollage img:hover{
    transform: scale(1.05);
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
        <h1 class="logo" style="font-size: 2vw">Some data about Shymkent</h1>
        <p>Shymkent is the 3rd largest city in Kazakhstan and the capital of the Golden Steppe. The one million people metropolis is an important transportation hub of the famous old and new Silk Road and connects Asia with Europe.</p>
        <div>The long history of the city brought forth remarkable historical places and landmarks and the beautiful wild landscape of steppe and Western Tien-Shan Mountains offers untouched places to discover. Shymkent is a jewel of south Kazakhstan and a beautiful place to visit in Central Asia.</div>
        <h2 class="logo">Key Facts</h2>
        <ul>
            <li><span style="color: white; font-weight: bold">Founded:</span> 999 BC (included suburb Sayram)</li>
            <li><span style="color: white; font-weight: bold">Population in 2020:</span> 1,042,218 People</li>
            <li><span style="color: white; font-weight: bold">Ethnic Groups in 2012:</span> Kazakh, Russians, Uzbek, Tatars</li>
            <li><span style="color: white; font-weight: bold">Average high in Summer:</span> +32.7°C</li>
            <li><span style="color: white; font-weight: bold">Average low in Winter:</span> -4.8°C</li>
            <li><span style="color: white; font-weight: bold">Annually Rain falls:</span>  600 mm</li>
        </ul>
        <hr>
        <h2 class="logo">
            History
        </h2>
        <p>Shymkent and its fortress was an important city to protect traders on their way on the famous old Silkway. The suburb Sayram is even over 3000 years old and has an exciting history.</p>
        <div><a href="#">Read more about the History</a></div>
        <hr>
        <h2 class="logo">Sightseeing in Shymkent</h2>
        <div class="imgCollage">
            <img class = "imgG"src="shymkent-pic-about1.jpg" alt="fasf">
            <img class = "imgG" src="shymkent-pic-about2.jpg" alt="fdsfsd">
            <img class = "imgG" src="shymkent-pic-about3.jpg" alt="fdsf">
            <span>Shymkent is a good place to enjoy beautiful parks and old mausoleums.</span>
        </div>
        <div class="popup-image">
            <span>&times;</span>
            <img src = "shymkent-pic-about1.jpg" alt = " ">
        </div> 
        <p>The metropolis doesn’t have to be stand behind of Astana and Almaty. The million people city has its own landmarks which tourist’s can visit. And even around the city – many amazing places to explore.</p>
        <div><a href="#">Read more about Shymkent’s Sights and Landmarks</a></div>
        <hr>
        <h2 class="logo">Sightseeing around Shymkent</h2>
        <div class="imgCollage">
            <img src="shymkent-pic-about4.jpg" alt="fasf">
            <img src="shymkent-nature2.jpg" alt="fdsfsd">
            <img src="shymkent-pic-about5.jpg" alt="fdsf">
            <span>The south Kazakhstan region offers unique Nature and beautiful historical places.</span>
        </div>
        <p>You have more time to discover Shymkent and Turkistan region? There are many beautiful historical sites and amazing National Parks close to the city.</p>
        <div><a href="#">Read more about Sights around Shymkent</a></div>
        <hr>
        <h2 class="logo">Get an overview about Shymkent</h2>
        <p>That you get a good overview of Shymkent and the nature around the city we invite you to watch the drone flight over the best places of Shymkent:</p>
        <div class="iframe">
            <iframe width="100%" height="600px" src="https://www.youtube-nocookie.com/embed/BUqLJw2V5wk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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