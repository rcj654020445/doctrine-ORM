<?php
require_once "../bootstrap.php";
$product = $entityManager->getRepository('Product')->findOneBy(array('name' =>$argv[1]));


$bugs = $entityManager->getRepository('Bug')->findBy(array('status' => 'CLOSED'));
foreach ($bugs as $bug) {
    // do stuff
}


$productCount = $entityManager->getRepository(Product::class)->findBy(array('name' =>$argv[1]))->count();
echo $productCount;

