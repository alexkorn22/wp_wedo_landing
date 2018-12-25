<div class="col-md-6 col-lg-5">
    <div class="wrap-preview-new">
        <div class="date-new"><? the_time('d.m.Y')?></div>
        <?
            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'medium', false);
            if (isset($thumb_url[0]) && !empty($thumb_url[0])) {
                $img = $thumb_url[0];
            } else {
                $img = App::$app->getImgNoPhoto();
            }
        ?>
        <a href="<? the_permalink()?>" class="link-to-news">
            <div class="img-new" style="background-image: url('<?=$img?>')"></div>
        </a>
        <div class="title-new"><?the_title()?></div>
        <div class="descr-new"><? the_excerpt()?></div>
    </div>
</div>
