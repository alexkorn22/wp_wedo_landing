<div class="phone">
<? foreach(App::$app->adminParams->getArPhones() as $item):?>
    <a href="tel:<?=$item['phone']?>"><?=$item['phone']?></a>
<?endforeach;?>
</div>
