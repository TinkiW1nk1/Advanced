<?php
include dirname(__DIR__) . '/vendor/autoload.php';
echo "<br>";

echo 'Домашка 3' . "<br>";
$collor = new \app\Collor(10,10,10);
$collor2 = new \app\Collor(20,20,20);
$collor2->mix($collor);
var_dump($collor2->getCollor());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: <?= $collor->getCollor() ?>">

</body>
</html>
