<?php
    session_start();
    unset($_SESSION['xyz']);
    session_unset();

    header('location: login.html');

?>