<!DOCTYPE html>
<html>
<head>

    <title>CMS Login</title>
    <meta charset="UTF-8">
    <!--suppress HtmlUnknownTarget -->
    <link rel="stylesheet" type="text/css" href="views/view_style.css" />

</head>
<body>

<h1>Login</h1>

<form action="" method="post">

    <?php
    $alerts = $this->getAlerts();
    if($alerts != '') {
        echo '<ul class="alerts">' . $alerts . '</ul>';
    }
    ?>

    <p>
        <label for="username">Użytkownik: </label>
        <input type="text"  name = "username" value = "<?php echo $this->getData('input_user'); ?>" >
    </p>
    <p>
        <label for="password">Hasło: </label>
        <input type="password"  name = "password" value = "<?php echo $this->getData('input_pass'); ?>" >
    </p>
    <p>
    <input type="submit" name="submit" class="submit" value="Wyślij">
    </p>



</form>



</body>



</html>