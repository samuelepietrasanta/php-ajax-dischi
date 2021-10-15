<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"> 
    <title>PHP Dischi</title>
</head>
<body>

<?php 
require(__DIR__ . '/database.php'); 
?>



    <div class="container">
        <div class="row">
            <?php foreach($databaseDischi as $disco){; ?>
                <div class="col-4">
                    <h2 class="text-danger"><?php echo $disco['title']; ?></h2>
                    <h4><?php echo $disco['author']; ?></h4>
                </div>
            <?php }; ?>
        </div>
    </div>

    




    
</body>
</html>


