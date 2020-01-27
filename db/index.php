<?php
    declare(strict_types = 1);
    include 'includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

        /*$users = new UsersView();
        echo $users->showUser("Ivan");*/

        /*$table = new TableView();
        $table->showTables();*/

        $tableView = new TableView();
        var_dump($tableView->showTables());

        $tableContr = new TableContr();
        $tableContr->dropTable("ds");

        /*$usersObj = new UsersContr();
        $usersObj->createUser("Jane", "Doe", "1685-01-11")*/

    ?>
</body>
</html>
