<? get_header();

if (have_posts()) {
    the_post();
}
$imgBackground = CFS()->get( 'mainImg' );
if (!$imgBackground) {
    $imgBackground = App::$app->getImgNoPhoto();
}
?>

    <div class="head-news" style="background-image: url('<?= $imgBackground?>')">
        <div class="container head-content">
            <? get_template_part('template-parts/top-line');?>
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