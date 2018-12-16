<?php

include("models/m_template.php");



$Template = new Template();
$Template->setAlertTypes(array('success', 'warning', 'error'));
$Template->setAlert("Powodzenie",'success');
$Template->setAlert("Uwaga",'warning');
$Template->setAlert("Błąd",'error');

$Template->setData("nazwa","wartość12");
$Template->load("views/v_login.php");

