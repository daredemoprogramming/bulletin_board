<?php
    session_start();
    if(!empty($_GET["urltoken"])){
        $urltoken = $_GET["urltoken"];
		require_once("../../Model/Signup/signupForm.php");
    }else{
        // errorページに遷移させる
        header("Location: ../../View/Signup/error.php");
        exit();
    }
?>