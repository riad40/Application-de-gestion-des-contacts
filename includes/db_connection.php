<?php 

    class Database {

        private $host = 'localhost';
        private $user = 'root';
        private $pwd = '';
        private $dbName = 'contact management';

        protected function connect() {

            $dbType = 'mysql:host = ' . $this -> host . ';dbname = ' . $this -> dbName;
            $pdo = new PDO($dbType, $this -> user, $this -> pwd);

            if(!$pdo) {
                echo 'connection failed';
            } 
            else echo 'connected successfully';
        }
    }  