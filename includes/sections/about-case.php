<div class="about-case">
    <div class="container">
        <h2 class="title--secondary">Case Studies</h2>
        <div class="about-case__items">
            <div class="about-case__items--item">
                <p class="text--primary">Production Line Installation</p>
                <img src="assets/images/about-case1.png" alt="">
            </div>
            <div class="about-case__items--item">
                <p class="text--primary">High Speed Packing Line Installation</p>
                <img src="assets/images/about-case2.png" alt="">
            </div>
            <div class="about-case__items--item">
                <p class="text--primary">Dawn Homes, Croftfield Park</p>
                <img src="assets/images/about-case3.png" alt="">
            </div>
            <div class="about-case__items--item">
                <p class="text--primary">Dawn Homes, Croftfield Park</p>
                <img src="assets/images/about-case3.png" alt="">
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    $('.about-case__items').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
    });
</script>