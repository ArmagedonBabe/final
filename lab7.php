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
        a{
            text-decoration: none;
            color: white;
        }
        .main{
            border: 1px solid black;
            width: 40vw;
            height: 35vw;
            margin: 4vw auto ;
            text-align: center;
            padding: 2vw;
            background-color: #1a1a1a;

        }
        .main1{
      border: 1px solid black;
      width: 40vw;
      height: 45vw;
      margin: 4vw auto 1vw auto;
      text-align: center;
      padding: 2vw;
      background-color: #1a1a1a;
      align-content: center;
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
            width: 10vw;
            height: 2.5vw;
            margin: 0 auto;
            width: 50%;
	        background-color: white;
            border: 1px solid #fadadb;
	        margin-bottom: 10px;
	        border-radius: 3px;
            }
.error p{
	padding: 10px 10px 10px 35px;
	margin: 0;
    color: #1a1a1a;
    border-radius: 3px;
    font-size: 12px;
	background: url(error.png) 30px 50% no-repeat;
}
    </style>
</head>
<?php
require_once('/OSPanel/modules/system/html/openserver/phpmyadmin/final123/subPages/config.php');
class User{
    function Dashboard(){
        
         echo '<a href = "/openserver/phpmyadmin/final123/subPages/index.php">Exit!</a>';
        
    }
    function generateCode($length=6){
        $chars = "abcd123456789";
        $code = "";
        $clean = strlen($chars) - 1;
        while (strlen($code) < $length){
            $code .= $chars[mt_rand(0, $clean)];
        }
        return $code;
    }

    // login validation
    function CheckLoginData($email, $pass){
        $db = new Connect;
        $result = '';
        if(isset($email) && isset($pass)){
            $email = stripslashes(htmlspecialchars($email));
            $pass = stripslashes(htmlspecialchars(md5(md5(trim($pass)))));
        
            if(empty($email) or empty($pass)){
                $result .= "<div class=\"error\"><p><strong>ERROR:</strong> All fields are required!</p></div>";
            }else{
                $user = $db -> prepare("SELECT * FROM users WHERE email = :email AND password = :pass");
                $user->execute(array(
                    'email' => $email,
                    'pass'  => $pass
                ));
                $info = $user->fetch(PDO::FETCH_ASSOC);
                if ($user->rowCount() == 0){
                    $result .= "<div class=\"error\"><p><strong>ERROR:</strong> Login failed!</p></div>";
                }else{
                    $hash = $this->generateCode(10);
                    $upd = $db->prepare("UPDATE users SET session=:hash WHERE id=:ex_user");
                    $upd -> execute(array(
                        'hash' => $hash,
                        'ex_user' => $info['id']
                    ));
                    setcookie("id", $info['id'], time()+60*60*24*30, "/", NULL);
                    setcookie("sess", $hash, time()+60*60*24*30, "/", NULL);
                    echo ("<script>location.href = '/openserver/phpmyadmin/final123/subPages/final.php';</script>");
                }
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
        <a href="?a=register"><button style="margin-top: 2vw">You have not account?</button></a>
    </div>
    
    ';
    }
    function CheckRegisterData(
        $f_name,
        $U_name,
        $email,
        $pass1,
        $pass2
    ){
        $db = new Connect;
        $result = '';
        if(isset($f_name) && isset($U_name) && isset($email) && isset($pass1) && isset($pass2)){
            $f_name = stripslashes(htmlspecialchars($f_name));
            $l_name = stripslashes(htmlspecialchars($U_name));
            $email = stripslashes(htmlspecialchars($email));
            $pass1 = stripslashes(htmlspecialchars(md5(md5(trim($pass1)))));
            $pass2 = stripslashes(htmlspecialchars(md5(md5(trim($pass2)))));
            if(empty($f_name) or empty($l_name) or empty($email) or empty($pass1) or empty($pass2)){
                $result .= "<div class=\"error\"><p><strong>ERROR:</strong> All fields are required!</p></div>";
            }else if($pass1 != $pass2){
                $result .= "<div class=\"error\"><p><strong>ERROR:</strong> Your passwords do not match!</p></div>";
            }else{

                $user = $db -> prepare("SELECT * FROM users WHERE email = :email");
                $user->execute(array(
                    'email' => $email,
                ));
                $info = $user->fetch(PDO::FETCH_ASSOC);
                if($user->rowCount() == 0){
                    $user = $db->prepare("INSERT INTO users (first_name, user_name, email, password) VALUES (:first_name, :user_name, :email, :password)");
                    $user -> execute(array(
                        'first_name' => $f_name,
                        'user_name' => $U_name,
                        'email' => $email,
                        'password' => $pass1
                    ));
                    if(!$user){
                        $result .= "<div class=\"error\"><p><strong>ERROR:</strong> All fields are required!</p></div>";
                    }else{
                        echo ("<script>location.href = '/openserver/phpmyadmin/final123/subPages/index.php/?a=login';</script>"); 
                    }
                }else{
                    $result .= "<div class=\"error\"><p><strong>ERROR:</strong> There is a user with this email already!</p></div>";
                }
            }
        }
        return $result;
    }
    function RegisterForm(){
      return '
      <div class="main1">
    <h1 id = "title">SHYMKENT</h1>' .
      ($_POST ? $this -> CheckRegisterData($_POST['f_name'],
        $_POST['U_name'],
        $_POST['email'],
        $_POST['pass1'],
        $_POST['pass2']
      ):'')
    . '<h3>Sign up to have a great experience and invite your friends.</h3>
    <hr style="width: 25vw">
    <form id="logform" action = "?a=register" method="POST">
      <input type="text" name="f_name"  placeholder="First name" required  >
      <input type="text" name="U_name"  placeholder="Username" required>
      <input type="email" name="email"  placeholder="Email" required>
      <input type="password" name="pass1"  placeholder="Password" required>
      <input type="password" name="pass2"  placeholder="Reapeat Password" required>
      <br>
      <br>
      <input type="submit" value="Register">
    </form>
    <div style="width: 20vw; color: white; margin-left: auto; margin-right: auto; font-size: 1vw ">People who use our service may have uploaded your contact information. <span style="font-weight: bold">Learn More</span></div>
    <br>
    <div style="width: 20vw; color: white; margin-left: auto; margin-right: auto; font-size: 1vw ">By signing up, you agree to our <span style="font-weight: bold">Terms. Dont worry were not deceiving you, Allah see</span></div>
  </div>
  <div class="secondMain">
    Have an account? <a style="font-weight: bold; color: #85cdff; text-decoration: none"  href = "?a=login">Log in</a>
  </div>
      ';
    }
}
?>
<script> 
//function changePage(){ window.location.href = 'lab72.php';}
</script>
</html>
