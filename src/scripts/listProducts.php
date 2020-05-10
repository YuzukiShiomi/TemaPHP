<?php

require __DIR__ . '/../../vendor/autoload.php';

use TDW\DemoDoctrine\Utility\Utils;
use TDW\DemoDoctrine\Entity\Producto;

Utils::loadEnv(__DIR__ . '/../..');
$entityManager = Utils::getEntityManager();

$productos = $entityManager->getRepository(Producto::class)->findAll();

echo json_encode(['productos' => $productos], JSON_PRETTY_PRINT);