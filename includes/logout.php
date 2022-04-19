<?php
    include '../classes/user.php';
    $logout = new User();
    $logout -> logout();
    header("location: ../index.php");
    exit();
