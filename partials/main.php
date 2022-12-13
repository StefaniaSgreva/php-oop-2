<main>
    <div class="container">
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
                        <div class="weight">
                            <?php echo $food->weight ?>
                        </div>
                        <div class="age">
                            <?php echo $food->age ?>
                        </div>

                    </div>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>
</main>