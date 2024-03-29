<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>History</title>
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
    width: 96vw;
    height: 700px;
}
.secondPicture{
    border: 1px solid black;
    background-color: #1a1a1a;
    box-shadow: 0 1px 10px rgba(0,0,0,0.4), 1px 0 10px rgba(0,0,0,0.4), 0 -1px 10px rgba(0,0,0,0.4), -1px 0 10px rgba(0,0,0,0.4);
}
.secondPicture img{
    width: 96vw;
    height: 700px;
}
.thirdPicture{
    border: 1px solid black;
    background-color: #1a1a1a;
    box-shadow: 0 1px 10px rgba(0,0,0,0.4), 1px 0 10px rgba(0,0,0,0.4), 0 -1px 10px rgba(0,0,0,0.4), -1px 0 10px rgba(0,0,0,0.4);
}
.thirdPicture img{
    width: 96vw;
    height: 700px;
}
.fourthPicture{
    border: 1px solid black;
    background-color: #1a1a1a;
    box-shadow: 0 1px 10px rgba(0,0,0,0.4), 1px 0 10px rgba(0,0,0,0.4), 0 -1px 10px rgba(0,0,0,0.4), -1px 0 10px rgba(0,0,0,0.4);
}
.fourthPicture img{
    width: 96vw;
    height: 700px;
}
.fivethPicture{
    border: 1px solid black;
    background-color: #1a1a1a;
    box-shadow: 0 1px 10px rgba(0,0,0,0.4), 1px 0 10px rgba(0,0,0,0.4), 0 -1px 10px rgba(0,0,0,0.4), -1px 0 10px rgba(0,0,0,0.4);
}
.fivethPicture img{
    width: 96vw;
    height: 700px;
}
.sixthPicture{
    border: 1px solid black;
    background-color: #1a1a1a;
    box-shadow: 0 1px 10px rgba(0,0,0,0.4), 1px 0 10px rgba(0,0,0,0.4), 0 -1px 10px rgba(0,0,0,0.4), -1px 0 10px rgba(0,0,0,0.4);
}
.sixthPicture img{
    width: 96vw;
    height: 700px;
}
.iframebabe{
    border: 1px solid black;
    background-color: #1a1a1a;
    box-shadow: 0 1px 10px rgba(0,0,0,0.4), 1px 0 10px rgba(0,0,0,0.4), 0 -1px 10px rgba(0,0,0,0.4), -1px 0 10px rgba(0,0,0,0.4);
}
.iframebabe iframe{
    width: 96vw;
    height: 700px;
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
                <div><button onclick="change7()">Exit</button></div>
                <div><a href="http://127.0.0.1/openserver/phpmyadmin/final123/subPages/CONTACTS.php">CONTACTS</a></div>
            </div>
        </div>
    </div>
    <div class="mainPage">
        <h1 class="logo" style="font-size: 2vw">History of Shymkent</h1>
        <div class="firstPicture">
            <img src="shymkent-pic-history1.jpg" alt="">
        </div>
        <p><span style="color: white; font-weight: bold">Shymkent</span> has a very long history and the city in South Kazakhstan has seen very much heros rising and falling. Info Shymkent will have a look on Shymkent’s history.</p>
        <hr><p><span style="color: white; font-weight: bold">Bronze Age:</span> Artifacts around the hill of Shymkent’s fortress showing first activities in this region.</p>
        <hr><p><span style="color: white; font-weight: bold">Around 530 BC:</span> The King Cyrus the Great of the Achaemenid Empire crossing the Jaxartes (now Syr-Darja river) to the north to fight against the Queen Tomyris – the Queen of the Massageteans. The troops of the King march three days into the realms of the Massageteans before the battle started. The location of the battle could be in Turkestan region. The Achaemenid Empire lost the battle and King Cyrus the Great was killed and beheaded.</p>
        <div class="secondPicture">
            <img src="shymkent-pic-history2.jpg" alt="gfdgf">
            <br>
            <span>Artist impression of the aftermaths of the Battle between King Cyrus the Great and Queen Tomyris.</span>
        </div>
        <p><span style="color: white; font-weight: bold">3rd-2nd century BC:</span> First permanent settlers arrive at the hill of the old citadel of Shymkent. Archaeologist found pieces of ceramic handcrafts deep in the ground of the fortress.</p>
        <hr><p><span style="color: white; font-weight: bold">329 BC:</span> Alexander the Great is fighting against the Saka during the Battle of Jaxartes and is crossing as a big leader of the Western and Middle East world – after King Cyrus the Great – the Jaxartes to the north again and is trying to catch escaping warriors of the Saka in the steppe. Maybe some Greek warriors passed by nowadays location of Shymkent. But not like King Cyrus the Great, Alexander wins the battle against the Saka.</p>
        <hr><p><span style="color: white; font-weight: bold">766 AD:</span> The Islam came to Sairam and Shymkent. Before was a big community of Nestorian Christians in Sairam. The manuscript Nasabname is telling about a fight between Arab warrior Iskak-bab and Nestorian patriarch of Sairam, Nakhibar. According to this legend the patriarch lost after a three day fight and the region around Shymkent became under Islamic and Arab influence.</p>
        <hr><p><span style="color: white; font-weight: bold">1093 AD:</span> Shymkent is part of the Kara-Khanid Khanate. And the famous Sufi and poet Ahmad Yasawi is born in Sairam – today a part of the city Shymkent.</p>
        <hr><p><span style="color: white; font-weight: bold">1142:</span> Sairam and Shymkent is part of the Chinese Empire of Qara Khitai (or Great Liao)</p>
        <hr><p><span style="color: white; font-weight: bold">11th century:</span> Shymkent is mentioned for the first time in history books as a caravansary at the silk road. The purpose was to protect the city Sairam – a old and important trading place close to Shymkent.</p>
        <div class="thirdPicture">
            <img src="shymkent-pic-history3.jpg" alt="gdfd">
            <br>
            <span>Shymkent on a excerpt of a Map from 1856</span>
        </div>
        <p><span style="color: white; font-weight: bold">1218:</span> The governor of Otrar is killing trading man and ambassadors of Genghis Khan.</p>
        <hr><p><span style="color: white; font-weight: bold">Autumn 1219:</span> Genghis Khan camped in Sairam near Shymkent and awaited the arrival of his sons. The Mongol King started the invasion of Central Asia and destroyed Otrar. Shymkent – before under the influence of the Khwarezmid Empire – becomes now a part of the Mongol Empire.</p>
        <hr><p><span style="color: white; font-weight: bold">1246:</span> The Italian diplomat and Franciscan Giovanni da Pian del Carpine is crossing Otrar and Sayram on his way to a meet the Great Khan of the Mongol Empire. He wrote in his book Ystoria Mongalorum about his trip through Central Asia and the live of the Mongols.</p>
        <hr><p><span style="color: white; font-weight: bold">1279:</span> The Nestorian-Christian Uyghur Rabban Bar Sauma started his pilgrimage from Zhongdu (now Bejing) to Jerusalem in 1278. Around the year 1779 he stopped in Talas (now Taraz) and met King Kaido, a nephew of Kublai Khan. The asked him to get a a written order to pass his country save. On Rabban Bar Sauma’s further way he should also passed through Sairam and Shymkent on its way to ancient Tus (the former capital of Khorasan) in Iran.</p>
        <hr><p><span style="color: white; font-weight: bold">17th February 1405:</span> During a winter campaign against Ming China the famous King Amir Timur died in Otrar, a silkway city close to Shymkent.</p>
        <hr><p><span style="color: white; font-weight: bold">1425:</span> Sharaf ad-din Yazdi is mentioning Shymkent in the book Book of Victories.</p>
        <hr><p><span style="color: white; font-weight: bold">16th century:</span> Shymkent is becoming part of the Kazakh Khanate.</p>
        <hr><p><span style="color: white; font-weight: bold">Early 19th century:</span> Shymkent became part of Kokand’s Khanat. The Khan of Kokand transformed Shymkent to a huge and his most important fortress of his Khanat.</p>
        <div class="fourthPicture">
            <img src="shymkent-pic-history5.jpeg" alt="gdfgfd">
            <br>
            <span>View of Shymkent near Citadel at the End of 19th century.</span>
        </div>
        <p><span style="color: white; font-weight: bold">July 1864:</span> Shymkent and it’s Citadel is conquered and destroyed by the Russians troops under command of Michail Chernyaev. Shymkent became part of the Russian Empire.</p>
        <div class="fivethPicture">
            <img src="shymkent-pic-history6.jpeg" alt="fdgfdg">
            <br>
            <span>Old map showing Shymkent in 1864 during the Siege of the citadel by Russian Troops under command of Chernyaev.</span>
        </div>
        <p><span style="color: white; font-weight: bold">1873:</span> The Secretary of the American legation in St. Petersburg in Russia Eugene Schuyler visited Shymkent in spring 1873. He was one of the first western people who visited Central Asia after the Russian invasion. The diplomat was impressed by “picturesque citadel, which is built on what seems an almost inaccessible height”. Eugen Schulyer published in 1876 his report about his trip through Central Asia in the Book Turkistan.</p>
        <hr><p><span style="color: white; font-weight: bold">1883:</span> Industrialization started in Shymkent with the construction of a pharmaceutical factory for Santonin by Russian entrepreneur Nikolai Ivanov. It was one of the biggest pharmaceutical plants during the USSR. The factory still exists under the Kazakh company JSC ChimPharm.</p>
        <div class="sixthPicture">
            <img src="shymkent-pic-history7.jpeg" alt="">
            <br>
            <span>Old postcard showing the citadel of Shyment with soldiers of the Russian Empire in 1866</span>
        </div>
        <p><span style="color: white; font-weight: bold">1914:</span> Shymkent is renamed to Chernyaev to tell the people who conquered their city.</p>
        <hr><p><span style="color: white; font-weight: bold">1915:</span> Shymkent is connected from Arys by railway to the Trans-Aral Railway between Tashkent and Orenburg.</p>
        <hr><p><span style="color: white; font-weight: bold">1924:</span> Shymkent get its original name back. The city is becoming a important trading point between nomads and townsmen for horse, sheep and cow products for example the famous Kumis.</p>
        <hr><p><span style="color: white; font-weight: bold">1930s:</span> The Soviet industrialization arrives in Shymkent. One of the biggest lead factories, a fat-and-oil plant and other factories starting their production in the biggest city in southern Kazakhstan.</p>
        <hr><p><span style="color: white; font-weight: bold">1932:</span> The opening of a agricultural aviation base at the suburbs of Shymkent was the beginning of the development of today’s International Airport.</p>
        <hr><p><span style="color: white; font-weight: bold">1941-1945:</span> Seventeen plants and factories were relocated from the front line to Shymkent. The city produced very much war equipment for the battles in Europe and East Asia. Two of three bullets shot at the front line to Nazi Germany were produced in Shymkent.</p>
        <hr><p><span style="color: white; font-weight: bold">1950-80ies:</span> Shymkent is becoming more and more a industrial city with a huge textile and petroleum industry.</p>
        <div class="iframebabe">
            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/-WVpQvwCxGw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <p><span style="color: white; font-weight: bold">January 2015:</span> Shymkent sent a request to the UNESCO to be recognized as an old ancient silk way city.</p>
        <hr><p><span style="color: white; font-weight: bold">19th June 2018:</span> Shymkent became the third city with one million residents after Almaty and Nur-Sultan. As a result of it, the city was taken out of South Kazakhstan Region and subordinated directly to the government of Kazakhstan. The new capital of South Kazakhstan became Turkistan and the region was renamed to Turkistan Region.</p>
        <hr><p><span style="color: white; font-weight: bold">2020:</span> Shymkent is the Capital of Culture of the CIS countries for the year 2020. Many events was planned in and around the city but the Covid-19 pandemic stopped many of these projects.</p>
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