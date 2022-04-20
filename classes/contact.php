<?php

    include 'db_connection.php';

    class Contact extends Database {

        // read methods
        public function showContacts($userID){
            $sql = "SELECT * FROM contacts WHERE userID = '$userID';";
            $stmt = $this->connect()->query($sql);
            if (!$stmt) {
                echo 'query failed';
                exit();
            }
            return $stmt -> fetchAll();
        }
        // show one contact
        public function findContact($contactID){
            $sql = "SELECT * FROM contacts WHERE contactID = '$contactID';";
            $stmt = $this->connect()->query($sql);
            if (!$stmt) {
                echo 'query failed';
                exit();
            }
            return $stmt -> fetchAll();
        }
        // insert method
        public function addContact($fname, $email, $phone, $city, $userID){
            $sql = 'INSERT INTO contacts(contact_name, contact_email, contact_phone, contact_city, userID) VALUES (?, ?, ?, ?, ?);';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$fname, $email, $phone, $city, $userID]);
            if (!$stmt) {
                echo 'query failed';
                exit();
            }
        }
        // update method
        public function updateContact($fname, $email, $phone, $city, $contactID){
            $sql = "UPDATE contacts SET contact_name = ?, contact_email = ?, contact_phone = ?, contact_city = ? WHERE contactID = '$contactID';";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$fname, $email, $phone, $city]);
            if (!$stmt) {
                echo 'query failed';
                exit();
            }
        }
        // delete method
        public function deleteContact($contactID){
            $sql = "DELETE FROM contacts WHERE contactID = '$contactID';";
            $stmt = $this->connect()->query($sql);
            if (!$stmt) {
                echo 'query failed';
                exit();
            }
        }   
    }