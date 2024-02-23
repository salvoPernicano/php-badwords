<?php
$paragrafo = $_GET["pharagraph"];
$censur = $_GET["censor"];
$lunghezza = strlen($paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <p>Cosa hai scritto : <?php echo str_replace($censur , '***', $paragrafo); ?></p>
    <p>lunghezza messaggio : <?php echo $lunghezza ?></p>
</body>
</html>