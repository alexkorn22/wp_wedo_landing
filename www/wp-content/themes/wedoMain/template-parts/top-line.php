<div class="row top-line">
    <div class="col-4 col-md-5 col-lg-6">
        <div class="logo">
            <a href="<?=home_url()?>"><img src="<?=App::$app->pathAsset?>/img/logoWedo.png" alt="WeDo"></a>
        </div>
    </div>
    <div class="col-6 col-md-6 col-lg-5">
        <div class="phone">
            <a href="tel:+38(098)150-83-95">+38(098)150-83-95</a>

        </div>
    </div>
    <div class="col-2 col-md-1 col-lg-1">
        <div class="hamburger-menu">
            <div class="responsive-nav">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="nav-menu">
                <div class="responsive-nav">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <?
                wp_nav_menu([
                    'theme_location'  => 'header_menu',
                    'container'       => false,
                    'menu_class'      => 'main-menu',
                ]);
                ?>
            </nav>
        </div>
    </div>
</div>