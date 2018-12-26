<?
$posttags = get_tags();
$curTagSlug = '';
if (isset($_GET['tag'])) {
    $curTagSlug = $_GET['tag'];
}
?>
<div class="block-tags d-none d-lg-block">
    <div class="title-block">Теги</div>
    <? foreach ($posttags as $tag):?>
        <?
        $href = add_query_arg( 'tag', $tag->slug, '/blog/' );
        if ($curTagSlug == $tag->slug) {
            $href = '/blog/';
        }
        ?>
        <a href="<?= $href?>" class="tag <? if ($curTagSlug == $tag->slug):?>tag_active<?endif;?>">
            <?=$tag->name?>
        </a>
    <? endforeach;?>
</div>

