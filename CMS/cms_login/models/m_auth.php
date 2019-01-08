<?php


class Auth{

    private $salt = 'eg4WW5ddsU';

    function __construct(){
    }

    function validateLogin($user,$password){

        global $Database;
        if($stmt = $Database->prepare("SELECT*FROM users WHERE username = ? AND password = ?")) {

            $stmt->bind_param("ss", $user, md5($password . $this->salt));
            $stmt->execute();
            $stmt->store_result();


            if($stmt->num_rows>0){
                $stmt->close();
                return TRUE;
            }
            else{
                $stmt->close();
                return FALSE;

            }
        }
        else{
            die();
        }




    }

    function checkLoginStatus(){

    if(isset($_SESSION['loggedin'])){
        return TRUE;
    }
        else{
            return FALSE;
        }

    }

    function logout(){
    session_destroy();
    session_start();

    }

}