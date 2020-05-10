<?php

require __DIR__ . '/../../vendor/autoload.php';

use TDW\DemoDoctrine\Utility\Utils;
use TDW\DemoDoctrine\Entity\Producto;

Utils::loadEnv(__DIR__ . '/../..');
$entityManager = Utils::getEntityManager();

try {
    $num = random_int(0, 1000000);
    $product = new Producto($num, random_int(1, 10), 'prueba'. $num);
} catch (Exception $e) {
    echo(STDERR . $e);
}

$entityManager->persist($product);
$entityManager->flush();

echo 'Insertado producto con id=' . $product->getId() . PHP_EOL;
