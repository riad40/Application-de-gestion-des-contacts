<?php 

    class Database {

        protected function connect() {
            $host = 'localhost';
            $user = 'root';
            $pwd = '';
            $dbName = 'contact_management';
            try {
                $dbType = 'mysql:host='.$host.';dbname='.$dbName;
                $pdo = new PDO($dbType, $user, $pwd);  
                return $pdo;
            } catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }   