<main>
    <div class="container">
        <!-- FOOD  -->
        <h2>Cibo per cani e gatti <i class="fa-solid fa-paw"></i></h2>

        <div class="row">
            <?php foreach ($foods as $food) { ?>
            <div class="col">
                <div class="card">
                    <div class="category">
                        <?php echo $food->category->name ?>
                    </div>
                    <div class="poster">
                        <img src="<?php echo $food->photo ?>" alt="<?php echo $food->name ?>">
                    </div>
                    <div class="infos">
                        <h3>
                            <?php echo $food->name ?>
                        </h3>
                        <div class="brand">
                            <?php echo $food->brand ?>
                        </div>
                        <div class="price">
                            <div class="euro">
                                €
                                <?php echo $food->price ?>0
                            </div>
                            <div class="discount">
                                <?php echo $food->discount ? $food->discount . '%' : '' ?>
                            </div>
                        </div>
                        <!-- <div class="weight">
                            <?php echo $food->weight ?>
                            <?php echo $food->getWeight() ?>
                        </div> -->
                        <div class="age">
                            <?php echo $food->age ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

        <!-- GAMES  -->
        <h2>Giochi per cani e gatti <i class="fa-solid fa-paw"></i></h2>

        <div class="row">
            <?php foreach ($games as $game) { ?>
            <div class="col">
                <div class="card">
                    <div class="category">
                        <?php echo $game->category->name ?>
                    </div>
                    <div class="poster">
                        <img src="<?php echo $game->photo ?>" alt="<?php echo $game->name ?>">
                    </div>
                    <div class="infos">
                        <h3>
                            <?php echo $game->name ?>
                        </h3>
                        <div class="brand">
                            <?php echo $game->brand ?>
                        </div>
                        <div class="price">
                            <div class="euro">
                                €
                                <?php echo $game->price ?>0
                            </div>
                            <div class="discount">
                                <?php echo $game->discount ? $game->discount . '%' : '' ?>
                            </div>
                        </div>
                        <div class="color">
                            <?php echo $game->color ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

        <!-- KENNELS  -->
        <h2>Cucce per cani e gatti <i class="fa-solid fa-paw"></i></h2>

        <div class="row">
            <?php foreach ($kennels as $kennel) { ?>
            <div class="col">
                <div class="card">
                    <div class="category">
                        <?php echo $kennel->category->name ?>
                    </div>
                    <div class="poster">
                        <img src="<?php echo $kennel->photo ?>" alt="<?php echo $kennel->name ?>">
                    </div>
                    <div class="infos">
                        <h3>
                            <?php echo $kennel->name ?>
                        </h3>
                        <div class="brand">
                            <?php echo $kennel->brand ?>
                        </div>
                        <div class="price">
                            <div class="euro">
                                €
                                <?php echo $kennel->price ?>0
                            </div>
                            <div class="discount">
                                <?php echo $kennel->discount ? $kennel->discount . '%' : '' ?>
                            </div>
                        </div>
                        <div class="size">
                            <?php echo $kennel->size ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</main>