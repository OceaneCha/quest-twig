<?php 

require __DIR__ . '/../config/twig.php';

$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe', 'xylophone'];

echo $twig->render('products.html.twig', ['products' => $products]);