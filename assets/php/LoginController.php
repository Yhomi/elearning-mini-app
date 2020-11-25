<?php
    session_start();
    require_once 'inc/auth.php';

    $auth = new Auth();
    // Login action
    if(isset($_POST['action']) && isset( $_POST['action']) == 'login'){
        $username = $auth->cleanInput($_POST['username']);
        $password = $auth->cleanInput($_POST['lpass']);
        $loggedIn = $auth->login($username);
        if($loggedIn != null){
            if(password_verify($password,$loggedIn['password'])){
                $_SESSION['user'] = $username;
                echo 'login';
            }else{
                echo $auth->displayMessage('warning','Incorrect Password');
            }
        }else{
            echo $auth->displayMessage('danger',"Incorrect Credentials");
        }
    }

?>