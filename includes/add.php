<?php

    if(isset($_POST['add'])) {
        $name = $_POST['fname'];  
        $email = $_POST['email'];  
        $phone = $_POST['phone'];  
        $city = $_POST['city'];  
        $userID = $_POST['id'];

        include '../classes/contact.php';

        $add = new Contact();
        $add -> addContact($name, $email, $phone, $city, $userID);
        header("location: ../display.php");
    }