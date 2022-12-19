<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacts</title>
    <link rel="stylesheet" href="contacts.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Zen+Dots&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header">
      <label for="toggle">&#9776</label>
      <input type="checkbox" id="toggle">
      <div class="navbar">
        <div class="logo">SHYMKENT</div>
        <div class="order">
          <div><a href="#it1">ABOUT</a></div>
          <div><a href="#it2">HISTORY</a></div>
          <div><a href="#it3">ENTERTAINMENT</a></div>
          <div><a href="#it4">PEOPLE</a></div>
          <div><a href="#it5">NATURE</a></div>
          <div><a href="#it6">ESSENTIAL</a></div>
        </div>
        <div class="order2">
          <div><a href="#">LOG IN</a></div>
          <div><a href="#">HELP</a></div>
          <div><a href="#">CONTACTS</a></div>
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
            <form action="#">
                <input type="text" name="fname" id="fname" placeholder="FIRST NAME" required>
                <br>
                <input type="text" name="secname" id="secname" placeholder="SECOND NAME" required>
                <br>
                <input type="email" name="email" id="email" placeholder="EMAIL" required>
                <br>
                <textarea name="quest" id="quest" cols="50" rows="5" placeholder="WRITE YOUR QUESTION..."></textarea>
                <br>
                <button ><span class="logo">SUBMIT</span></button>
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
            <div class="logo">SHYMKENT</div>
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
            <a href="#it4">PEOPLE</a>
        </div>
        <div class="footer4">
            <a href="#it5">NATURE</a>
            <br>
            <br>
            <a href="#it6">ESSENTIAL</a>
        </div>
        <div class="footer5">
            <a href="#">HELP</a>
            <br>
            <br>
            <a href="#">CONTACTS</a>
        </div>
    </div>
    <hr style="color: white">
    <div class="final-footer" style="margin-top: 1vw;margin-bottom: 1vw; display: flex; justify-content: space-around">
        <div><small>© SHYMKENT. Все права защищены</small></div>
        <div><small><a href="#">Пользовательское соглашение</a></small></div>
    </div>
</body>
</html>