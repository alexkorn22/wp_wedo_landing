<?php
/*
 * Template name: Блог
 */
get_header();

$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
$args = array(
    'posts_per_page' => get_option('posts_per_page'), // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
    'paged' => $current_page // текущая страница
);
query_posts($args);

$wp_query->is_archive = true;
$wp_query->is_home = false;

?>
    <div class="head-blog">
        <div class="container head-content">
            <div class="row top-line">
                <div class="col-4 col-md-5 col-lg-6">
                    <div class="logo">
                        <a href="/"><img src="<?= App::$app->pathAsset ?>/img/logoWedo.png" alt="WeDo"></a>
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
            <div class="row center-line">
                <div class="col">
                    <h1 class="title-page-marketing">
                        <span class="h1 h1_blog">BLOG</span>
                        <span class="h1_text h1_text_smm">о создании и продвижении сайтов и интернет-магазинов</span>
                    </h1>
                </div>
            </div>
            <div class="row bottom-line"></div>
        </div>
    </div>

    <div class="container">
        <div class="wrap-breadcrumb">
            <div class="row">
                <div class="col">
                    <nav id="breadcrumb" class="breadcrumb">
                        <a href="index.html" class="breadcrumb-link">Главная</a>
                        <a href="blog.html" class="breadcrumb-link breadcrumb-link_active">Блог</a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="content-blog">
            <div class="row">
                <div class="col-lg-7">
                    <div class="preview-news">
                        <div class="row">
                            <?
                            while (have_posts()): the_post();

                                get_template_part('template-parts/preview-record', 'single');
                            endwhile;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?php kama_pagenavi([],$wp_query); ?>
                </div>
            </div>
        </div>

    </div>
<?







get_footer();