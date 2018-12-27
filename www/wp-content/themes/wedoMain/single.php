<? get_header();

if (have_posts()) {
    the_post();
}
?>

    <div class="head-news" style="background-image: url('<?=App::$app->pathAsset?>/img/blog/cat1-min.png')">
        <div class="container head-content">
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
                            <ul class="main-menu">
                                <li><a href="index.html">Главная</a></li>
                                <li><a href="sozdanie-saitov.html">Создание сайтов</a></li>
                                <li><a href="internet-magaziny.html">Создание интернет-магазинов</a></li>
                                <li><a href="kontekstnaya-reklama.html">Контекстная реклама</a></li>
                                <li><a href="seo.html">SEO-продвижение</a></li>
                                <li><a href="smm.html">SMM</a></li>
                                <li class="current_page"><a href="blog.html">Блог</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row center-line"></div>
            <div class="row bottom-line">
                <div class="date-news"><? the_date()?></div>
                <div class="title-news"><? the_title()?></div>
            </div>
        </div>
    </div>

    <div class="container">
        <?php get_sidebar( 'breadcrumb' ); ?>
        <div class="content-blog">
            <div class="row">
                <div class="col-lg-7">
                    <div class="wrap-content-news">
                        <?
                           the_content();
                        ?>
                    </div>
                </div>
                <div class="col-lg-4 ml-lg-auto">
                    <div class="wrap-sidebar">
                        <div class="sidebar">
                            <?php get_sidebar( 'popular' ); ?>
                            <?php get_sidebar( 'tags' ); ?>
                            <div class="back-to-list">
                                <a href="/blog/" class="back-link">
                                    <img src="<?=App::$app->pathAsset?>/img/icons/right-arrow.png">
                                    К списку новостей
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<? get_footer();?>