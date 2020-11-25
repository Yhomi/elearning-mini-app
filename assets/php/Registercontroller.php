<?php

    session_start();
    require_once 'inc/auth.php';

    $auth = new Auth();

    // register action

    if(isset($_POST['action']) && isset($_POST['action']) == 'register'){
    
       $name = $auth->cleanInput($_POST['name']);
       $email = $auth->cleanInput($_POST['email']);
       $category = $auth->cleanInput($_POST['category']);
       $password = $auth->cleanInput($_POST['password']);

       // hash users password
       $hashPwd = password_hash($password,PASSWORD_DEFAULT);

       // check if user already exist
       if($auth->userExist($email)){
           echo $auth->displayMessage('warning','This email is already registered');
       }else{
           if($auth->register($name,$email,$hashPwd,$category)){
                $_SESSION['user'] = $email;
                echo 'registered';
           }else{
               echo $auth->displayMessage('danger','Server Error, Please try again!');
           }
       }
       
    }



?>