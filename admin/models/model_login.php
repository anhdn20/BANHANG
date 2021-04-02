<?php
require_once '../system/model_system.php';
class model_login extends model_system
{
    function checkexistuser($user){
        $sql="select * from users where Username in ('".$user."')";
        $kq = $this->queryOne($sql);
        return $kq;
    }
    function checkpassword($pass){
        $sql="select * from users where pass='".$pass."'";
        $kq = $this->queryOne($sql);
        return $kq;
    }
    function checkuser($user,$pass){
        $sql="select * from users where Username='".$user."' and pass='".$pass."'";
        $kq = $this->queryOne($sql);
        return $kq;
    }
}