<?php

include("includes/init.php");


$Auth->logout();
$Template->setAlert("Wylogowałes się", "success");
$Template->redirect('login.php');