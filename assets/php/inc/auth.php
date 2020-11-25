<?php
    require_once 'db.php';

    class Auth extends Database{
        // register new user
        public function register($name,$email,$password,$category)
        {
            $sql = "INSERT INTO users(name,email,password,category) VALUES(:name,:email,:password,:category)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['name'=>$name,'email'=>$email,'password'=>$password,'category'=>$category]);
            return true;
        }

        // check if email is already registered
        public function userExist($email)
        {
            $sql = "SELECT email From users WHERE email =:email";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['email'=>$email]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }

        //login users
        public function login($email)
        {
            $sql = "SELECT email,password FROM users WHERE email =:email";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['email'=>$email]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        }

        // current user
        public function user($email)
        {
            $sql = "SELECT * FROM users WHERE email =:email";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['email'=>$email]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        }

        // get all mentor
        public function getMentor(){
            $sql = "SELECT * FROM users WHERE category = 'mentor'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetchall(PDO::FETCH_ASSOC);
            return $row;
        }
        // get all mentee
        public function getMentee(){
            $sql = "SELECT * FROM users WHERE category = 'mentee'";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $row = $stmt->fetchall(PDO::FETCH_ASSOC);
            return $row;
        }
    }
?>