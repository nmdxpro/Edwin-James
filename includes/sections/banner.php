<div class="banner">
    <div class="container">
        <h2 class="banner__title title--primary">
            Engineering
        </h2>

        <p class="banner__text text--primary">
            Edwin James Group is a market-leading facilities engineering business, delivering excellence in technical and process services.
        </p>

        <div class="banner__detail">
            <?php
            foreach ($detailItems as $item) { ?>
                <div class="banner__detail--item banner__detail--<?=$item['name']?>">
                    <img class="item__img <?=$item['name']?>__img" src="<?=$item['link']?>" alt="">
                    <button class="btn btn--primary"></button>
                </div>
            <?php } ?>
        </div>
    </div>
</div>