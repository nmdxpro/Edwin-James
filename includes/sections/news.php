<div class="news">
    <div class="container">
        <h2 class="news__title title--secondary">
            Latest News
        </h2>
        <div class="news__content">
            <?php
            foreach ($newsItems as $item) { ?>
                <div class="news__content--item">
                    <a class="item__link text--secondary" href="#"><?=$item['date']?></a>
                    <p class="item__text text--primary"><?=$item['summary']?></p>
                    <img src="<?=$item['link']?>" alt="">
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    $('.news__content').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
    });
</script>