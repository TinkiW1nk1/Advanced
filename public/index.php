<?php
declare(strict_types=1);
include dirname(__DIR__) . '/src/autoloader.php';
$loader = new \Example\Psr4AutoloaderClass();
$loader->register();
$loader->addNamespace('App\\', dirname(__DIR__) . '/src');
$USD = new \App\Currency('USD');
$EUR = new \App\Currency('EUR');
$money = new \App\Money($USD, 10);
$money1 = new \App\Money($USD, 20);
var_dump($money1->getAmount());
$money1->add($money);
var_dump($money1->getAmount());
var_dump($money1->equals($money));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Домашка 4 Currency</title>
</head>
<body>
</body>
</html>
