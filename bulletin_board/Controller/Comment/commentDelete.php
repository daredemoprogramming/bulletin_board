<?php
    session_start();
    if(!empty($_SESSION['name'])){
        require_once("../../Model/Comment/commentDelete.php");
    }else{
        header("Location: ../../View/Comment/errorDelete.php");
    }
?>