<?php

    class Database{
        // development
        // private $dsn = "mysql:host=localhost;dbname=elearning";
        // private $Dbuser = "root";
        // private $Dbpass ="";
        // public $conn;

         // prodcution
        private $dsn = "mysql:host=us-cdbr-east-02.cleardb.com;dbname=heroku_a09479515d33eae";
        private $Dbuser = "b2395ab23495eb";
        private $Dbpass ="39fddf2d";
         public $conn;
    

        public function __construct(){
            try{
                $this->conn = new PDO($this->dsn,$this->Dbuser,$this->Dbpass);
                // echo "DB connected";
            }catch(PDOExeception $e){
                echo "ERROR: ".$e->getMessage();
            }
            return $this->conn;
        }

        public function cleanInput($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }

        public function displayMessage($type,$msg){
            return '
                <div class="alert alert-'.$type.' alert-dismissible fade show" role="alert">
                <strong>'.$msg.'</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>';
        }
    }

    $obj = new Database();

?>