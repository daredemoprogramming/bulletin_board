<?php
    session_start();
    if(!empty($_SESSION['name'])){
        require_once("../../Model/Post/postDelete.php");
    }else{
        header("Location: ../../View/Post/errorDelete.php");
    }
?>