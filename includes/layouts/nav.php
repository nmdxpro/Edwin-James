<div class="nav">
    <div class="container">
        <div class="nav__logo">
            <a href="#"><img src="assets/images/header-logo.png" alt=""></a>
        </div>

        <div class="nav__menu">
            <ul class="nav__menu--list">
                <?php
                foreach ($navItems as $item) { ?>
                    <li class="list__item"><a href="<?=$item['link']?>" class="list__item--link link__<?=$item['name']?>" href="#"><?=$item['title']?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>