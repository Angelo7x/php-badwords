<?php
    $par1 = 'Sopra la panca la capra campa, sotto la panca la capra crepa';
    $userWord = $_GET["word"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Badwords</title>
</head>
<body>
    <h2><?php echo $par1?></h2>
    <h3>La lunghezza del paragrafo è di <?php echo strlen("$par1")?> caratteri</h3>
    <hr>
    <h2>
        <?php echo str_replace($userWord, '***', $par1); ?>
    </h2>
</body>
</html>