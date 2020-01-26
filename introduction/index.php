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
        
        $person1 = new Person\Person();
    
        try {
            $person1->setName(2);
            echo $person1->getName();
        } catch (TypeError $e) {
            echo "Error!:" . $e->getMessage();
        }

        
        
    ?>
</body>
</html>
