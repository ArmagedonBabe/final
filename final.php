<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main Page</title>
    <link rel="stylesheet" href="/openserver/phpmyadmin/final/final.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Zen+Dots&display=swap" rel="stylesheet">
</head>
<body>
<div class="header" id = "navbar">
        <label for="toggle">&#9776</label>
        <input type="checkbox" id="toggle">
        <div class="navbar">
            <a class="logo" href="/openserver/phpmyadmin/final/final.php">SHYMKENT</a>
            <div class="order">
            <div><a href="#it1">ABOUT</a></div>
                <div><a href="#it2">HISTORY</a></div>
                <div><a href="#it3">ENTERTAINMENT</a></div>
                <div><a href="#it5">NATURE</a></div>
                <div><a href="#it6">ESSENTIAL</a></div>
            </div>
            <div class="order2">
                <div><a href="subPages/index.php">LOG IN</a></div>
                <div><a href="subPages/lab72.html">CONTACTS</a></div>
                <div><button onclick="mode()">mode</button></div>
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
            <a href="#it1"><img src="img\shymkent-logo.png" alt="logo"></a>
            <br>
            <a href="#it2"><div class="logo">SHYMKENT</div></a>
        </div>
        <div class="footer2">
            <a href="#it1">ABOUT</a>
            <br>
            <br>
            <a href="#it2">HISTORY</a>
        </div>
        <div class="footer3">
            <a href="#it3">ENTERTAINMENT</a>
            <br>
            <br>
            <a href="subPages/lab72.php">CONTACTS<</a>
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
    <script src = "final.js"></script>
</body>
</html>