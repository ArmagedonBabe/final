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
        .error{
	background-color: #feeaea;
    border: 1px solid #fadadb;
	margin-bottom: 10px;
	border-radius: 3px;
}
.error p{
	padding: 10px 10px 10px 35px;
	margin: 0;
    border-radius: 3px;
	background: url('../') 10px 50% no-repeat;
}
    </style>
</head>
<body>
<?php
require_once('/OSPanel/modules/system/html/openserver/phpmyadmin/final/config.php');
class User{
    function CheckLoginData($email,$pass){
        $db = new Connect;
        $result = 'Submitted!';
        if(isset($email) && isset($pass)){
            $email = stripslashes(htmlspecialchars(md5(trim($email))));
            $pass = stripslashes(htmlspecialchars(md5(trim($pass))));
            if(empty($email) or empty($pass)){
                $result .= "<div class=\"error\"><p><strong>ERROR:</strong> All fields are required!</p></div>";
            }else{
                $user = $db -> prepare("SELECT * FROM users WHERE email = :email AND password = :pass");
                $user->execute(array(
                    'email' => $email,
                    'pass'  => $pass
                ));
                $info = $user -> fetch(PDO::FETCH_ASSOC);
                if($user -> rowCount() == 0){
                    $result .= "<div class=\"error\"><p><strong>ERROR:</strong> Login failed!</p></div>";
                }else{
                    $result .= 'Welcome'
;                }
        }
        }
        return $result;
    }

    function LoginForm(){
        return ' 
        <div class="main">
        <h1 id = "title">SHYMKENT</h1>' .
           ($_POST ? $this -> CheckLoginData($_POST['email'],$_POST['pass']):'')
        . '<form id = "logform" action = "?a=login" method="post">
            <input type="text" name="email" placeholder="Email">
            <br>
            <br>
            <input type="password" name="pass" placeholder="Password">
            <br>
            <br>
            <br>
            <button>Log in</button>
        </form>
        <hr>
        <button style="margin-top: 2vw" onclick = changePage()>You have not account?</button>
    </div>
    
    ';
    }
}
?>
<script> 
function changePage(){ window.location.href = 'lab72.php';}
</script>
</body>
</html>
