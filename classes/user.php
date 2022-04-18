<?php

    include 'db_connection.php';

    class User extends Database {

        private $fname;
        private $email;
        private $password;
        private $passwordRepeat;
        private $registerDate;

        /* ============================= method for create up user  ============================= */

        // create user method

        public function createUser($fname, $email, $password, $registerDate) {
            
            if($this->emptyInputs()) {
                // echo 'empty inputs';
                header("location: ../signUp.php?error=emptyInputs");
                exit();
            }

            if($this->invalidEmail()) {
                // echo 'invalid email';
                header("location: ../signUp.php?error=invalidEmail");
                exit();
            }

            if($this->passwordMatch() == false) {
                // echo "passwords dosen't match";
                header("location: ../signUp.php?error=passwordsDosentMache");
                exit();
            }

            if($this->emailExist($this->email)) {
                // echo "email is alredy exist";
                header("location: ../signUp.php?error=emailExist");
                exit();
            }

            // insert user to database

            $sql = "INSERT INTO users VALUES (NULL, ?, ?, ?, ?);";
            $stmt = $this->connect()->prepare($sql);
            
            $hashPassword = password_hash($password, PASSWORD_DEFAULT);

            if (!$stmt->execute([$fname, $email, $hashPassword, $registerDate])) {
                $stmt = null;
                header("location: ../signUp.php?error=stmtFailed");
                exit();
            }
        }

        // checks if the user fill all the filds

        private function emptyInputs() { //true if empty else false
            return (!empty($this->fname) || !empty($this->email) || !empty($this->password) || !empty($this->passwordRepeat));
        } 

        // check email format

        private function invalidEmail() {
            return (filter_var($this->email, FILTER_VALIDATE_EMAIL));
        } 

        // check passwords match 

        private function passwordMatch() {
            $result;
            if ($this->password !== $this->passwordRepeat) {
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }

        // check if email is already exist 

        private function emailExist($email) {

            $sql = "SELECT email FROM users WHERE email = ?;";
            $stmt = $this->connect()->prepare($sql);
            if (!$stmt->execute([$email])) {
                $stmt = null;
                header("location: ../signUp.php?error=stmtFailed");
                exit();
            }
            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

        // methods for login in user

        // checks if the user fill all the filds

        public function loginUser($email, $password) {
            
            if($this->emptyLogInInputs()) {
                // echo 'empty inputs';
                header("location: ../signUp.php?error=emptyInputs");
                exit();
            }

            // log in user code
        }

        private function emptyLogInInputs() {//true if empty else false
            return (!empty($this->email) || !empty($this->password));
        } 





 
    }

    