


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up Page</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Zen+Dots&display=swap" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&family=Zen+Dots&display=swap');
    body{
      background: linear-gradient(55deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.8) 51%, rgba(0,0,0) 85%);
      margin: 0;
      padding: 0;
      font-family: 'Open Sans', sans-serif;
      color: white;
    }
    h1{
      font-family: 'Zen Dots', cursive;
      color: white;
    }
    h3{
      color: white;
      width: 20vw;
      margin-left: auto;
      margin-right: auto;
    }
    .main{
      border: 1px solid black;
      width: 40vw;
      height: 40vw;
      margin: 4vw auto 1vw auto;
      text-align: center;
      padding: 2vw;
      background-color: #1a1a1a;
      align-content: center;

    }
    .secondMain{
      border: 1px solid black;
      width: 40vw;
      margin:0 auto 5vw;
      padding: 2vw;
      text-align: center;
      background-color: #1a1a1a;
    }
    form{
      margin: 2vw;
    }
    input, button{
      width: 20vw;
      height: 2vw;
      margin-bottom: 0.5vw;
    }
    button{
      border: none;
      color: white;
      background-color: black;
      border-radius: 5px;
      margin-bottom: 2vw;
    }
  </style>
</head>
<body>
<div class="main">
  <h1>SHYMKENT</h1>
  <h3>Sign up to have a great experience and invite your friends.</h3>
  <hr style="width: 25vw">
  <form>
    <input type="text" name="fname" id="fname" placeholder="First Name" required>
    <input type="text" name="fname" id="fname" placeholder="User Name" required>
    <input type="email" name="mail" id="mail" placeholder="Email" required>
    <input type="password" name="pass" id="passw" placeholder="Password" required>
    <input type="password" name="pass" id="conPassw" placeholder="Confirm Password" required>
  </form>
  <div style="width: 20vw; color: white; margin-left: auto; margin-right: auto; font-size: 1vw ">People who use our service may have uploaded your contact information. <span style="font-weight: bold">Learn More</span></div>
  <br>
  <div style="width: 20vw; color: white; margin-left: auto; margin-right: auto; font-size: 1vw ">By signing up, you agree to our <span style="font-weight: bold">Terms. Don't worry we're not deceiving you, Allah see</span></div>
  <br>
  <button>Sign in</button>
</div>
<div class="secondMain">
  Have an account? <a style="font-weight: bold; color: #85cdff; text-decoration: none" href="lab7.php">Log in</a>
</div>

</body>
</html>