<?php
    if(!empty($_POST['mail']) && !empty($_POST['password'])){
        session_start();
        require_once("../../Model/Login/loginDone.php");
    }else{
        header("Location: ../../View/Login/error.php");
    }
?>