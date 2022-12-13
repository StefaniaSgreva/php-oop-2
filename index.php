<?php
//CLASS
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Game.php';
require_once __DIR__ . '/Models/Kennel.php';

// $prova = new Product();
// var_dump($prova);

//PRODOTTI

$foods = [
    new Food('https://www.argolandia.it/images/pet-010.jpg?osCsid=4ess2tksn2f8491ivfv4jbh484', 'Manzo e Patate', 'prolife', 58.60, 20, new Category("Cane"), '10kg', 'adult'),
    new Food('https://www.robinsonpetshop.it/12918-thickbox_default/prolife-sterilised-sensitive-adult-quaglia-e-patate-per-gatti.jpg', 'Quaglia e Patate', 'prolife', 52.30, 10, new Category("Gatto"), '8kg', 'adult'),
    new Food('https://www.petschoice.it/download/61ce67d_1stchoicecucciolorosa.jpg', 'Agnello, Pesce e Riso', 'Puppy Chiot', 70.20, '', new Category("Cane"), '15kg', 'adult'),
];
$games = [
    new Game('https://i5.walmartimages.com/asr/a915e9cc-5517-4e4c-aa7f-6286b0efd5e7_1.d5a864a08084249b9f7a43857cf6527b.jpeg?odnWidth=1000&odnHeight=1000&odnBg=ffffff', 'Palla', 'Felix', 5.50, 5, new Category("Cane"), 'blu'),
    new Game('https://uploads.zoobio.de/resize/products/2020_02_18/5e4c114140b0c_1070x800.jpg', 'Frisbee', 'Dog-O', 10.60, 10, new Category("Cane"), 'viola'),
    new Game('https://shop.risparmiocasa.com/media/catalog/product/cache/627b2652e996e22070c66f898fac62f5/1/3/1386848_1.jpg', 'Punch Ball', 'Petline', 12.30, '', new Category("Gatto"), 'blu'),
];
$kennels = [
    new Kennel('https://www.cucciatiragraffi.it/wp-content/uploads/2020/02/cuccia-gatto-sacco.jpg', 'Cuccia sacco', 'Felix', 25.50, 5, new Category("Gatto"), 'Small'),
    new Kennel('https://www.cucciapercani.info/wp-content/uploads/2018/08/pets-imperial-sussex-casa-per-cani-di-taglia-media-in-legno-1.jpg', 'Cuccia in legno da esterno', 'Pets Imperial', 68.90, 10, new Category("Cane"), 'Large'),
    new Kennel('https://www.in-vendita.it/sh-img/habicat-cuccia-occhi-di-gatto-01-600x800_cuccia%2Bgatti.jpg', 'Cuccia in legno', 'Felix', 35.20, '', new Category("Gatto"), 'Medium'),
];
var_dump($foods, $games, $kennels);

//LAYOUT
// include __DIR__ . '/partials/header.php';
// include __DIR__ . '/partials/main.php';
// include __DIR__ . '/partials/footer.php';

?>