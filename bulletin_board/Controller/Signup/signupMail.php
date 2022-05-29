<?php
    session_start();
    $_SESSION['urltoken'] = base64_encode(openssl_random_pseudo_bytes(32));
    $urltoken = $_SESSION['urltoken'];
?>