<?php
//CLASS
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';


// $prova = new Product();
// var_dump($prova);

//PRODOTTI

$products = [
    new Food('https://www.argolandia.it/images/pet-010.jpg?osCsid=4ess2tksn2f8491ivfv4jbh484', 'Manzo e Patate', 'prolife', 58.60, 20, new Category("Cane"), '10kg', 'adult'),
];
var_dump($products);

//LAYOUT
// include __DIR__ . '/partials/header.php';
// include __DIR__ . '/partials/main.php';
// include __DIR__ . '/partials/footer.php';

?>