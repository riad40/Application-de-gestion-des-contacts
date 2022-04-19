<?php

    if(isset($_POST['register'])) {

        $name = $_POST['fname'];
        $email = $_POST['email'];
        $password = md5($_POST['pwd']);
        $passwordRepeat = md5($_POST['Rpwd']);
        $registerDate = date('Y-m-d H:i:s');

        include '../classes/user.php';
        
        $user = new User();
        $user -> createUser($name, $email, $password, $registerDate);
        header("location: ../signIn.php?error=none");

    }