<main>
    <div class="container">
        <div class="row">
            <?php foreach ($foods as $food) { ?>
            <div class="col">
                <div class="card">
                    <div class="poster">
                        <img src="<?php echo $food->photo ?>" alt="<?php echo $food->name ?>">
                    </div>
                    <div class="infos">
                        <h3>
                            <?php echo $food->name ?>
                        </h3>
                        <div>
                            <?php echo $food->brand ?>
                        </div>
                        <div>
                            <?php echo $food->price ?>
                        </div>
                        <div>
                            <?php echo $food->discount ?>
                        </div>
                        <div>
                            <?php echo $food->category->name ?>
                        </div>
                        <div>
                            <?php echo $food->weight ?>
                        </div>
                        <div>
                            <?php echo $food->age ?>
                        </div>

                    </div>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>
</main>