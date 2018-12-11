<?php

include("models/m_template.php");



$Template = new Template();

$Template->setData("nazwa","wartość12");

$Template->load("views/v_login.php");
