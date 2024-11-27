<?php
    if(session_status() !== PHP_SESSION_ACTIVE){
        session_start();
        }
    function IsUserLogged(){
        if(isset($_SESSION['userEmail'])){
            return $user_data = array(
                $_SESSION['userEmail'],
                $_SESSION['userPassword'],
                $_SESSION['userType'],
                'userId' => $_SESSION['userId'],
                'userPassword' => $_SESSION['userPassword'],
                'userType' => $_SESSION['userType'],
                'loggedIn' => $_SESSION['loggedIn'] ?? false
            );
        }
    }
?>