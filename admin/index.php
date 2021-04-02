<?php
session_start();
require_once("../system/config.php");

$ctrl='home';
if(isset($_GET['ctrl'])==true) $ctrl=$_GET['ctrl'];
if ($ctrl=="home") {
    require_once "controllers/home.php";  $controller = new home;
}
if ($ctrl=="nhasanxuat") {
    require_once "controllers/nhasanxuat.php";  $controller = new nhasanxuat;
}
if ($ctrl=="dienthoai") {
    require_once "controllers/dienthoai.php";  $controller = new dienthoai;
}
if ($ctrl=="thuoctinhdt") {
    require_once "controllers/thuoctinhdt.php";  $controller = new thuoctinhdt;
}
if ($ctrl=="users") {
    require_once "controllers/users.php";  $controller = new users;
}
if ($ctrl=="donhang") {
    require_once "controllers/donhang.php";  $controller = new donhang;
}
if ($ctrl=="donhangchitiet") {
    require_once "controllers/donhangchitiet.php";  $controller = new donhangchitiet;
}
if ($ctrl=="binhluan") {
    require_once "controllers/binhluan.php";  $controller = new binhluan;
}
if ($ctrl=="login") {
    require_once "controllers/login.php";  $controller = new login;
}