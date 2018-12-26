<?
$posts = get_posts( array(
    'numberposts' => 5,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'include'     => array(),
    'exclude'     => array(),
    'meta_key'    => 'popular',
    'meta_value'  => true,
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );
?>
<div class="popular-news d-none d-lg-block">
    <div class="title-block">Популярные новости</div>
    <? foreach($posts as $post):?>
        <? setup_postdata($post);?>
        <?
        $thumb_id = get_post_thumbnail_id();
        $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail', false);
        if (isset($thumb_url[0]) && !empty($thumb_url[0])) {
            $img = $thumb_url[0];
        } else {
            $img = App::$app->getImgNoPhoto();
        }
        ?>
        <a href="<? the_permalink()?>" class="link-to-news">
            <div class="wrap-item">
                <div class="item">
                    <div class="img" style="background-image: url('<?=$img?>')"></div>
                    <div class="text">
                        <div class="title"><? the_title()?></div>
                        <div class="descr"><? the_excerpt()?></div>
                    </div>
                </div>
            </div>
        </a>
    <? endforeach;?>
</div>
<?
wp_reset_postdata();
?>