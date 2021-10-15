<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="style.css">
    <title>PHP Dischi</title>
</head>
<body>

<?php 
require(__DIR__ . '/database.php'); 
?>



    <div class="container">
        <div class="row">
            <?php foreach($databaseDischi as $disco){; ?>
                <div class="col-3 disco text-center">
                    <img <?php echo 'src=' . $disco['poster']; ?> alt="immagine">
                    <h4><?php echo $disco['title']; ?></h4>
                    <h6><?php echo $disco['author']; ?></h6>
                    <div>
                        <p><?php echo$disco['genre'] . ' ' . $disco['year']; ?>
                        </p>
                    </div>
                </div>
            <?php }; ?>
        </div>
    </div>

    




    
</body>
</html>


