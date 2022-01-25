<div class="about-stats">
    <div class="container">
        <?php
        foreach ($aboutStatsItems as $item) { ?>
            <div class="about-stats__item">
                <span class="title--primary"><?=$item['number']?></span>
                <hr>
                <p class="about-stats__item--text text--primary"><?=$item['title']?></p>
            </div>
        <?php } ?>
    </div>
</div>