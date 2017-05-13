<?php
// create_product.php
require_once "bootstrap.php";

$newProductName = $argv[1];

$product = new Product();
$product->setName($newProductName);

$entityManager->persist($product);
$entityManager->getUnitOfWork();
echo $entityManager->getUnitOfWork()->size();
//$entityManager->getEntityState($entity);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";
