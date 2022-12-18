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
            overflow-x: hidden;
            color: white;
            overflow: hidden;
        }
        h1{
            font-family: 'Zen Dots', cursive;
            color: white;
        }
        .main{
            border: 1px solid black;
            width: 40vw;
            height: 25vw;
            margin: 4vw auto ;
            text-align: center;
            padding: 2vw;
            background-color: #1a1a1a;

        }
        .secondMain{
            border: 1px solid black;
            width: 40vw;
            margin: 5vw auto;
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
        }
        button{
            border: none;
            color: white;
            background-color: black;
            border-radius: 5px;
            margin-bottom: 2vw;
        }
        button:hover{
            background-color: rgba(0,0,0,0.5);
        }
    </style>
</head>
<body>
    <div class="main">
        <h1>SHYMKENT</h1>
        <form>
            <input type="email" name="mail" id="mail" placeholder="Phone number, username, or email" required>
            <br>
            <br>
            <input type="password" name="pass" id="passw" placeholder="Password" required>

        </form>
        <button>Log in</button>
        <hr>
        <button style="margin-top: 2vw">Forgot password?</button>
    </div>
    <div class="secondMain">
        Don't have an accountant? <a style="font-weight: bold; color: #85cdff; text-decoration: none" href="lab72.html">Sign up</a>
    </div>

</body>
</html>
