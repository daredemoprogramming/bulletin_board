<?php
    session_start();
    if(!empty($_POST['title']) && !empty($_POST['content']) && !empty($_SESSION['name'])){
        require_once("../../Model/Post/postEditDone.php");
    }else{
        header("Location: ../../View/Post/error.php");
    }
?>