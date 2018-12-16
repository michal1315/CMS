<!DOCTYPE html>
<html>
<head>

    <title>CMS Login</title>
    <meta charset="UTF-8">
    <!--suppress HtmlUnknownTarget -->
    <link rel="stylesheet" type="text/css" href="views/view_style.css" />

</head>
<body>

<h1><?php  echo $this->getData("nazwa");?></h1>

<?php

$alerts = $this->getAlerts();

if($alerts !=''){
    echo '<ul class = "alerts">' . $alerts . '</ul>';
}


?>
<p>Akapit</p>


</body>



</html>