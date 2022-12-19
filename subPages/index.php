<?php 
// import user object
 require_once('/OSPanel/modules/system/html/openserver/phpmyadmin/final/subPages/lab7.php');
 $User = new User;

 $a = isset($_GET['a']) ? $_GET['a'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  switch($a){
    case 'login' :{
      echo $User -> LoginForm();
      break; 
    }
    default:{
      echo $User -> LoginForm();
      break;
    }
  }
  ?>
</body>
</html>