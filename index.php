<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>
</head>
<body>

<?php 
require(__DIR__ . '/database.php'); 
?>

<?php foreach($databaseDischi as $disco){; ?>

    <h1><?php echo $disco['title']; ?>
    </h1>

<?php }; ?>


    
</body>
</html>


