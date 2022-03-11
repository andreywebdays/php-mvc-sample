<?php

include 'includes/incAutoLoader.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
</head>
<body>
    <?php
        // testing clsUsersView class
        $user_obj_1 = new clsUsersView();
        $user_obj_1->showUser("Andrey");
        // testing clsUsersController class
        $user_obj_2 = new clsUsersController();
        $user_obj_2->createUser("Jane", "Olsen", "1991-05-10");
    ?>
</body>
</html>