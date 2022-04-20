<?php

    // echo 'Hi';
    include '../classes/contact.php';

    $id = $_GET['id'];
    $contact = new Contact();
    $contact -> deleteContact($id);
    header("location: ../display.php");
