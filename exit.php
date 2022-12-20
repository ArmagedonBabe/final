<?php
setcookie('check', '', time() - 60*60*24*30, '/'); 
setcookie('sess', '', time() - 60*60*24*30, '/');
header('Location: /openserver/phpmyadmin/final/subPages/index.php/loginregister/');
die();
?>