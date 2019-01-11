<?php

include ("includes/init.php");

if($Auth->checkLoginStatus() == FALSE){
    $Template->setAlert('Brak dostepu', 'error');
    $Template->redirect('login.php');
}else{
    $Template->load("views/v_users.php");

}
