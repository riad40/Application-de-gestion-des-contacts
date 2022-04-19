<?php

    if(isset($_POST['login'])) {

        $email = $_POST['email'];
        $password = md5($_POST['pwd']);

        include '../classes/user.php';
        
        $user = new User();
        $user->loginUser($email, $password);
        header("location: ../profile.php");
    }
