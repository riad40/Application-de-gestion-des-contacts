<?php

    include 'db_connection.php';

    class User extends Database {
        private $fname;
        private $email;
        private $password;
        private $passwordRepeat;
        private $registerDate;
        // create user method
        public function createUser($fname, $email, $password, $registerDate,$passwordRepeat) {
            $this->fname = $fname;
            $this->email = $email;
            $this->password = $password;
            $this->registerDate = $registerDate;
            $this->passwordRepeat = $passwordRepeat;
            if(empty($this->fname) || empty($this->email) || empty($this->password) || empty($this->passwordRepeat)) {
                header("location: ../signUp.php?error=emptyInputs");
                exit();
            }
            if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
               header("location: ../signUp.php?error=invalidEmail");
                exit();
            }
            if($this->password !== $this->passwordRepeat) {
                header("location: ../signUp.php?error=passwordsDosentMache");
                exit();
            }
            if($this->checkUser($this->email) == true){
                header("location: ../signUp.php?error=emailAlreadyExist");
                exit();
            }
            // insert user to database
            $sql = "INSERT INTO users VALUES (NULL, ?, ?, ?, ?);";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$fname, $email, $password, $registerDate]);
        }
        private function checkUser($email) {
            $sql = 'SELECT email FROM users WHERE email = ?;';
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$email]);
            if ($stmt->rowCount() > 0){
                $resultCheck = true;
            } else {
                $resultCheck = false;
            }
            return $resultCheck;
        }
        // methods for login in user
        public function loginUser($email, $password) { 
            $this->email = $email;
            $this->password = $password;
            if(!empty($this->email) || !empty($this->password)) {
                // echo 'empty inputs';
                header("location: ../signUp.php?error=emptyInputs");
                exit();
            }
            // log in user 
            $sql = "SELECT * FROM users WHERE email = ? AND password = ?;";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$email, $password]);
            if ($stmt->rowCount() > 0) {
                $user = $stmt -> fetchAll(PDO::FETCH_ASSOC);
                session_start();
                $_SESSION['id'] = $user[0]['userID'];
                $_SESSION['fname'] = $user[0]['full_name'];
                $_SESSION['email'] = $user[0]['email'];
                $_SESSION['signUp_date'] = $user[0]['sign_up'];
                $_SESSION['last_login'] = date('Y-m-d H:i:s');
            } else {
                $stmt = null;
                header("location: ../signIn.php?error=wrongLogin");
                exit();
            }
        }
        // log out
        public function logout() {
            session_start();
            session_destroy();
        }
    }