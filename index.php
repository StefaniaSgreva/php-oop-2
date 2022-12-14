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
    new Food('https://b2b.puntorigenera.com/82901-thickbox_default/cartuccia-hp-302xl-nera-compatibile-per-hp-3830-3832-4650-1110-2130-3630-4520-f6u68ae-capacita-15ml-480-pagine.jpg', 'Pollo', 'Monge', 28.60, 20, new Category('<i class="fa-solid fa-shield-dog"></i>' . '<span class="categoryNameDog">Cane</span>'), 'adult'),
    new Food('https://www.robinsonpetshop.it/12918-thickbox_default/prolife-sterilised-sensitive-adult-quaglia-e-patate-per-gatti.jpg', 'Quaglia e Patate', 'prolife', 52.30, 10, new Category('<i class="fa-solid fa-shield-cat"></i>' . '<span class="categoryNameCat">Gatto</span>'), 'adult'),
    new Food('https://www.petschoice.it/download/61ce67d_1stchoicecucciolorosa.jpg', 'Agnello, Pesce e Riso', 'Puppy Chiot', 70.20, '', new Category('<i class="fa-solid fa-shield-dog"></i>' . '<span class="categoryNameDog">Cane</span>'), 'puppy'),
    new Food('https://www.croccantinibio.it/wp-content/uploads/2020/03/crocchette-ultima-cane.jpg', 'Bovino e Cereali', 'ultima', 35.80, '25', new Category('<i class="fa-solid fa-shield-dog"></i>' . '<span class="categoryNameDog">Cane</span>'), 'adult'),
];
$games = [
    new Game('https://i5.walmartimages.com/asr/a915e9cc-5517-4e4c-aa7f-6286b0efd5e7_1.d5a864a08084249b9f7a43857cf6527b.jpeg?odnWidth=1000&odnHeight=1000&odnBg=ffffff', 'Palla', 'Felix', 5.50, '', new Category('<i class="fa-solid fa-shield-dog"></i>' . '<span class="categoryNameDog">Cane</span>'), 'blu'),
    new Game('https://www.loradeglianimali.it/35298-thickbox_default/trixie-dog-disc-frisbee-di-plastica-per-cani-da-19-cm.jpg', 'Frisbee', 'Sky-dogs', 10.60, 5, new Category('<i class="fa-solid fa-shield-dog"></i>' . '<span class="categoryNameDog">Cane</span>'), 'blu'),
    new Game('https://shop.risparmiocasa.com/media/catalog/product/cache/627b2652e996e22070c66f898fac62f5/1/3/1386848_1.jpg', 'Punch Ball', 'Petline', 12.30, '', new Category('<i class="fa-solid fa-shield-cat"></i>' . '<span class="categoryNameCat">Gatto</span>'), 'blu'),
    new Game('https://molinopisoni.it/50903-large_default/karlie-gioco-per-gatti-topo-loco.jpg', 'Topolini', 'Karlie', 15.60, '10', new Category('<i class="fa-solid fa-shield-cat"></i>' . '<span class="categoryNameCat">Gatto</span>'), 'colori assortiti'),
];
$kennels = [
    new Kennel('https://www.cucciatiragraffi.it/wp-content/uploads/2020/02/cuccia-gatto-sacco.jpg', 'Cuccia sacco', 'Felix', 25.50, '', new Category('<i class="fa-solid fa-shield-cat"></i>' . '<span class="categoryNameCat">Gatto</span>'), 'Smoll'),
    new Kennel('https://www.cucciapercani.info/wp-content/uploads/2018/08/pets-imperial-sussex-casa-per-cani-di-taglia-media-in-legno-1.jpg', 'Casetta in legno', 'Pets Imperial', 68.90, 10, new Category('<i class="fa-solid fa-shield-dog"></i>' . '<span class="categoryNameDog">Cane</span>'), 'Large'),
    new Kennel('https://www.in-vendita.it/sh-img/habicat-cuccia-occhi-di-gatto-01-600x800_cuccia%2Bgatti.jpg', 'Cuccia in legno', 'Felix', 35.20, '', new Category('<i class="fa-solid fa-shield-cat"></i>' . '<span class="categoryNameCat">Gatto</span>'), 'Medium'),
    new Kennel('https://www.miciogatto.it/new/wp-content/uploads/2017/12/cuccia-per-gatti-leone-686x705.jpg', 'Cuccia Leone', 'Royal Cat', 45.50, '', new Category('<i class="fa-solid fa-shield-cat"></i>' . '<span class="categoryNameCat">Gatto</span>'), 'Smoll'),
];
// var_dump($foods, $games, $kennels);

//--------------------------------------------------------------------------------------------------------------------------------------------
//PROVA PER VERIFICARE CHE IL TRAITS 'Weightable' STIA FUNZIONANDO

//prima categoria appricazione del trait
$foodItem = new Food('https://b2b.puntorigenera.com/82901-thickbox_default/cartuccia-hp-302xl-nera-compatibile-per-hp-3830-3832-4650-1110-2130-3630-4520-f6u68ae-capacita-15ml-480-pagine.jpg', 'Pollo', 'Monge', 28.60, 20, new Category('<i class="fa-solid fa-shield-dog"></i>' . '<span class="categoryNameDog">Cane</span>'), 'adult');
$foodItem->setWeight('8', 'Kg');
// var_dump($foodItem);
// echo $foodItem->getWeight();

//seconda categoria appricazione del trait
$grooming = new Product('https://images-na.ssl-images-amazon.com/images/I/61avlrcKmHL._SL1200_.jpg', 'Spazzola', 'Furminator', 10.50, '', new Category('<i class="fa-solid fa-shield-cat"></i>' . '<span class="categoryNameCat">Gatto</span>'));
$grooming->setWeight('80', 'g');
// var_dump($grooming);
// echo $grooming->getWeight();

//--------------------------------------------------------------------------------------------------------------------------------------------
//ESEMPIO DI EXCEPTION
function multiplication($int)
{
    if (!is_int($int)) {
        throw new Exception('Is not a number');
    }
    return $int * 5;
}

// echo multiplication(2);
// echo multiplication(2.5); fatal error perch?? non ?? un intero


//--------------------------------------------------------------------------------------------------------------------------------------------


//LAYOUT
include __DIR__ . '/partials/header.php';
include __DIR__ . '/partials/main.php';
include __DIR__ . '/partials/footer.php';

?>