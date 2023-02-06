<?php
declare(strict_types=1);
include dirname(__DIR__) . '/vendor/autoload.php';
//$user = \app\User::find(1);
//var_dump($user);
/*$user2 = new \app\User();
$user2->setId(2)->setName('Alex')->setEmail('alex@gmail.com');
var_dump($user2->delete(2));*/

$user = new \app\User();
var_dump($user->save('alex', 'asf'));

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
