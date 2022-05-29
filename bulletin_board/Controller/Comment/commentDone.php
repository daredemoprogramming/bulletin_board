<?php
    session_start();
    if(!empty($_POST['content']) && !empty($_SESSION['name'])){
        require_once("../../Model/Comment/commentDone.php");
    }else{
        header("Location: ../../View/Comment/error.php");
    }
?>