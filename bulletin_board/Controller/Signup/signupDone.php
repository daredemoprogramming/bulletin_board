<?php
    if(!empty($_POST['mail']) && !empty($_POST['password']) && !empty($_POST['name'])){
        require_once("../../Model/Signup/signupDone.php");
    }else{
        header("Location: ../../View/Signup/error.php");
    }
?>