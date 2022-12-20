<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Essential</title>
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
    width: 30vw;
    height: 550px;
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
        <h1 class="logo" style="font-size: 2vw">Essentials in Shymkent</h1>
        <p>Shymkent has very much sights for tourists and it’s residents. The third largest city of Kazakhstan don’t have to be hide behind of Nur-Sultan and Almaty. Shymkent has it’s own sights tourist’s can visit. And even around Shymkent are also amazing places to see.</p>
        <hr>
        <h2 class="logo">Citadel of Shymkent</h2>
        <p>The old heart of Shymkent is getting alive again. After Shymkent was conquered by the Russian Empire in 1864, the citadel fell apart and slept for 150 years under a earth mound. The ruins of the citadel has been exposed and reconstructed for a few years. The citadel opened to the public in 2021.</p>
        <div class="firstPicture">
            <img src="shymkent-pic-essential.jpg" alt="">
            <img src="shymkent-pic-essential2.jpg" alt="">
            <br>
            <span>Citadel of Shymkent</span>
        </div>
        <div class="popup-image">
            <span>&times;</span>
            <img src = "shymkent-pic-about1.jpg" alt = " ">
        </div> 
        <p>📌 Find this place on Maps: <a href="https://www.google.de/maps/place/42%C2%B018%2722.176%22N+69%C2%B035%2741.2512%22E/@42.306160,69.594792,18.87z">Google</a> or <a href="https://yandex.com/maps/?l=sat&ll=69.594792,42.306160&mode=poi&poi%5Bpoint%5D=69.594792%2C42.306160&z=18.87z">Yandex</a></p>
        <hr>
        <h2 class="logo">Shymkent Zoo</h2>
        <p>The Shymkent Zoo in the north of Shymkent is a nice place for kids. Here you can see regional animals – like the snow leopard – but also species from all over the world. Especially the new Safari Park with Africa’s animals makes the Zoo to one of the best Zoos in Kazakhstan.</p>
        <div class="secondPicture">
            <img src="shymkent-pic-essential3.jpeg" alt="">
            <img src="shymkent-pic-essential4.jpeg" alt="">
            <span>Shymkent Zoo</span>
        </div>
        <p>📌 Find this place on Maps: <a href="https://www.google.de/maps/place/42%C2%B022%2737.1532%22N+69%C2%B037%2741.3076%22E/@42.376987,69.628141,18.75z">Google</a> or <a href="https://yandex.com/maps/?l=sat&ll=69.628141,42.376987&mode=poi&poi%5Bpoint%5D=69.628141%2C42.376987&z=18.75z">Yandex</a></p>
        <hr>
        <h2 class="logo">Independence Park</h2>
        <p>The Independence Park is one of the newest parks of Shymkent and was opened in 2011. The flowers during summer are fabulous and the small pavilions with blue roofs gives you a nice place to rest and protect you from the strong sun. Its also nice to watch the two monuments: The Arch of Independence and the Monument of the Opening of a Yurt.</p>
        <div class="thirdPicture">
            <img src="shymkent-pic-essential5.jpg" alt="">
            <img src="shymkent-pic-essential6.jpg" alt="">
            <span>Independence Park </span>
        </div>
        <p>📌 Find this place on Maps: <a href="https://www.google.de/maps/place/42%C2%B018%2724.228%22N+69%C2%B035%2756.868%22E/@42.306730,69.599130,17.8z">Google</a> or <a href="https://yandex.com/maps/?l=sat&ll=69.599130,42.306730&mode=poi&poi%5Bpoint%5D=69.599130%2C42.306730&z=17.8z">Yandex</a></p>
        <hr>
        <h2 class="logo">Abay Park</h2>
        <p>The Abay Park is located in the hearth of Shymkent. It’s a calm place and offers also interesting places like the Museum of Modern Arts, the Khakim Abay Museum and huge World War 2, Soviet-Afghan War and Firefighter monuments.</p>
        <div class="fourthPicture">
            <img src="shymkent-pic-essential7.jpeg" alt="">
            <img src="shymkent-pic-essential8.jpeg" alt="">
            <img src="shymkent-pic-essential9.jpeg" alt="">
            <span>The South Entrance of Abay Park in Shymkent.</span>
        </div>
        <p>📌 Find this place on Maps: <a href="https://www.google.de/maps/place/42%C2%B019%2746.8552%22N+69%C2%B035%2723.3484%22E/@42.329682,69.589819,16.67z">Google</a> or <a href="https://yandex.com/maps/?l=sat&ll=69.589819,42.329682&mode=poi&poi%5Bpoint%5D=69.589819%2C42.329682&z=16.67z">Yandex</a></p>
        <hr>
        <h2 class="logo">Shamshi’s World</h2>
        <p>The Park Shamshi’s World (Russian: Мир Шамши) is a wonderful place for the music lovers. The park is dedicated to the Kazakh composer Shamshi Kaldayakov. His called the Father of the Kazakh waltz and Kazakh Pop. He is also the composer of My Kazakhstan: The National anthem of the Republic of Kazakhstan. The centerpiece is a golden statue of the composer and next to it starts a Walk of Fame of popular Kazakh Musicians who went into the footsteps of Shamshi Kaldayakov. The park offers also a nice water fountain and some trees to protect the visitors from the strong Kazakh sun.</p>
        <div class="fivethPicture">
            <img src="shymkent-pic-essential10.jpg" alt="">
            <img src="shymkent-pic-essential11.jpg" alt="">
            <span>Shamshi’s World with a Walk of Fame of Kazakh Musician is dedicated to Kazakh composer Shamshi Kaldayakov.</span>
        </div>
        <p>📌 Find this place on Maps: <a href="https://www.google.de/maps/place/42%C2%B018%2746.4292%22N+69%C2%B036%2714.7996%22E/@42.312897,69.604111,19.22z">Google</a> or <a href="https://yandex.com/maps/?l=sat&ll=69.604111,42.312897&mode=poi&poi%5Bpoint%5D=69.604111%2C42.312897&z=19.22z">Yandex</a></p>
        <hr>
        <h2 class="logo">White Mosque</h2>
        <p>The Shaikh Khalifa Bin Zayed Al Nahyan Mosque – but well known as White Mosque (Kazakh: “Ak Mechit”), which can accommodate 6,000 worshipers, is the largest mosque in Shymkent. The mosque was opened in 2013 and is a gift of the President of the United Arab Emirates. It is located in the west of Shymkent between city center and International Airport. The modern architecture in and outside is worth for a visit. Have a look on it!</p>
        <div class="sixthPicture">
            <img src="shymkent-pic-essential20.jpeg" alt="">
            <span>Shymkent’s largest Mosque: “Ak Meshit” </span>
        </div>
        <p>📌 Find this place on Maps: <a href="https://www.google.de/maps/place/42%C2%B021%275.58%22N+69%C2%B031%2746.0848%22E/@42.351550,69.529468,19.22z">Google</a> or <a href="https://yandex.com/maps/?l=sat&ll=69.529468,42.351550&mode=poi&poi%5Bpoint%5D=69.529468%2C42.351550&z=19.22z">Yandex</a></p>
    </div>
    <hr>
    <div class="footer">
        <div class="footer1">
            <img src="shymkent-logo.png" alt="logo">
            <br>
            <a class="logo" href="final.php ">SHYMKENT</a>
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