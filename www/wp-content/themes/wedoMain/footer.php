<footer>
    <div class="container">
        <div class="row items justify-content-center align-items-center no-gutters">
            <div class="col-12 col-md-4 col-xl-3 item">
                <div class="phone-footer hidden-sm-down">
                    <? foreach(App::$app->adminParams->getArPhones() as $item):?>
                        <p><a href="tel:<?=$item['phone']?>"><?=$item['phone']?></a></p>
                    <?endforeach;?>
                    <p>г.Запорожье</p>
                </div>
            </div>
            <div class="col-12 col-md-4 col-xl-6 item">
                <div class="logo-footer">
                    <a href="<?=home_url()?>"><img src="<?=App::$app->pathAsset?>/img/logoWedo.png" alt="WeDo"></a>
                    <p>© Copyright 2018, Все права защищены</p>
                </div>
            </div>
            <div class="col-12 col-md-4 col-xl-3 item">
                <div class="menu-footer">
                    <ul>
                        <li><a href="/#development">Разработка интернет-магазинов</a></li>
                        <li><a href="/#integration">Интеграция с учётными системами</a></li>
                        <li><a href="/#advancement">Продвижение интернет-магазинов</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
<? wp_footer(); ?>
</html>