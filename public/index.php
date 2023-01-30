<?php
include dirname(__DIR__) . '/vendor/autoload.php';
echo "<br>";

echo 'Домашка 3' . "<br>";
$collor1 = new \app\Collor(255,255,255);
$collor2 = new \app\Collor(25, 255, 255);
$collor2->mix($collor1->getRed(),$collor1->getGreen(), $collor1->getBlue());
var_dump($collor2->getCollor());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: <?= $collor2->getCollor(); ?>">

</body>
</html>
