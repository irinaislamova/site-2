<?php

header("Content-Type: text/html; charset=utf-8");
//<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

if($_POST["name"] = ""){
    echo 'Введите ваше имя';
}
if($_POST["mail"] = ""||!preg_match("/@/", $_POST["mail"])){
    echo 'Введите корректный e-mail';
}
if($_POST["message"] = ""){
    echo 'Оставьте ваше сообщение';
}
if (isset($_POST["name"]) && isset($_POST["mail"]) && isset($_POST["message"])) {
    echo 'Cпасибо за сообщение!';
    header("Location: index.html");    
}


