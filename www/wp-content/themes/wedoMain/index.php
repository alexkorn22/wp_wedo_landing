<?php get_header(); ?>

<header>
    <div class="container b-head-height">
        <div class="parallax">
            <div class="image-parallax man"></div>
        </div>
        <div class="row top-line align-items-center">
            <div class="col-4 col-md-5 col-lg-6 item">
                <div class="logo">
                    <a href=""><img src="<?=App::$app->pathAsset?>/img/logoWedo.png" alt="WeDo"></a>
                </div>
            </div>
            <div class="col-6 col-md-6 col-lg-5 item">
                <? get_template_part('template-parts/phone-header')?>
            </div>
            <div class="col-2 col-md-1 col-lg-1 item">
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
        <div class="row align-items-center justify-content-end" id="menu">
            <div class="col-12 col-md-9 col-xl-6">
                <ul>
                    <li><a href="#development">Разработка интернет-магазинов</a></li>
                    <li><a href="#integration">Интеграция с учётными системами</a></li>
                    <li><a href="#advancement">Продвижение интернет-магазинов</a></li>
                </ul>
            </div>
        </div>
        <div class="row wrap-btn align-items-center justify-content-center">
            <div class="col-12 col-xl-4">
                <div class="button">
                    <a href="#" data-toggle="modal" data-target="#myModal" class="btn-pink" data-wipe="Бесплатная консультация">Бесплатная консультация</a>
                    <!--<a href="#" class="btn-pink b24-web-form-popup-btn-12 b24-web-form-popup-btn-6" data-wipe="Бесплатная консультация">Бесплатная консультация</a>-->
                </div>
            </div>
        </div>
    </div>
</header>

<section id="wedo">
    <div class="container">
        <div class="row wrap-title justify-content-end">
            <div class="col-12 col-md-12 col-xl-11">
                <h1>WeDo</h1>
                <h1>разработка эффективных <br>систем онлайн продаж</h1>
            </div>
        </div>
        <div class="row items">
            <div class="col-12 col-md-4 col-xl-4 align-self-center item"><p>С <span>2008</span> года <br>в сфере IT и <br>маркетинга</p></div>
            <div class="col-12 col-md-4 col-xl-4 align-self-center item"><p>Более <span>100</span><br>успешных проектов в <br>1С и web</p></div>
            <div class="col-12 col-md-4 col-xl-4 align-self-center item"><p>Более <span>10</span><br>специалистов для <br>работы над проектом</p></div>
        </div>
        <div class="row wrap-btn align-items-center justify-content-center">
            <div class="col-12 col-xl-4">
                <div class="button">
                    <a href="#" data-toggle="modal" data-target="#myModal" class="btn-pink" data-wipe="Бесплатная консультация">Бесплатная консультация</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="development">
    <div class="container">
        <div class="row wrap-title justify-content-end">
            <div class="col-12 col-md-12 col-xl-11">
                <h2>Разработка интернет-магазинов</h2>
                <h2>мы поможем вам продавать товары 24 <br class='hidden-sm-down'> часа в сутки 7 дней в неделю</h2>
            </div>
        </div>

        <div class="row content">
            <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                <section class="timeline">
                    <ul>
                        <li><div>Анализ <br>бизнеса <br>и ниши</div></li>
                        <li><div>Разработка <br>стратегии</div></li>
                        <li><div>Проектирование <br>и дизайн <br>сайта</div></li>
                        <li><div>Интеграция <br>с учётными <br>системами</div></li>
                        <li><div>Запуск <br>проекта и <br>техподдержка</div></li>
                        <li><div>Маркетинговое <br>продвижение</div></li>
                    </ul>
                </section>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-6">
                <div class="ribbon-phone">
                    <div class="ribbon-text">
                        <div class="wrap-thesis">
                            <ul class="thesis">
                                <li>Мобильная адаптация</li>
                                <li>Продающий дизайн</li>
                                <li>SEO оптимизация</li>
                                <li>Высокая конверсия</li>
                                <li>Оперативная техподдержка</li>
                            </ul>
                        </div>
                    </div>
                    <div class="wrap-btn">
                        <div class="button">
                            <a href="#" data-toggle="modal" data-target="#myModal" class="btn-pink" data-wipe="Расчёт интернет-магазина">Расчёт интернет-магазина</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="integration">
    <div class="container">
        <div class="row wrap-title justify-content-end">
            <div class="col-12 col-md-12 col-xl-11">
                <h2>Интеграция с учётными системами</h2>
                <h2>мы ускорим приём заказов и обеспечим <br class='hidden-sm-down'> актуальные цены и наличие на сайте</h2>
                <!--<h2>мы ускорим приём заказов и обеспечим<br class="hidden-sm-down">актуальные цены и наличие на сайте</h2>-->
            </div>
        </div>
        <div class="row items">
            <div class="col-12 col-md-6 col-xl-6 align-self-center item"><p>Автоматическая <br><span>загрузка-выгрузка</span><br> для обработки заказа</p></div>
            <div class="col-12 col-md-6 col-xl-6 align-self-center item"><p>Автоматизированное <br><span>рабочее место менеджера</span><br> товаров и заказов</p></div>
        </div>
        <div class="row items">
            <div class="col-12 col-md-6 col-xl-6 align-self-center item"><p>Системы управления <br><span>отношениями с клиентами</span><br> (CRM)</p></div>
            <div class="col-12 col-md-6 col-xl-6 align-self-center item"><p>Внедрение сложных <br><span>дисконтных и бонусных</span><br> программ в онлайн магазине</p></div>
        </div>
    </div>
</section>
<section id="advancement">
    <div class="container">
        <div class="row wrap-title justify-content-end">
            <div class="col-12 col-md-12 col-xl-11">
                <h2>Продвижение интернет-магазина</h2>
                <h2>мы приведем на сайт целевых покупателей <br>и повысим узнаваемость бренда</h2>
            </div>
        </div>
        <div class="row items justify-content-center no-gutters">
            <div class="col-12 col-md-6 col-xl-4 align-self-center item">
                <a href="/seo/" class="link-to-other-page" target="_blank">
                    <p>SEO</p>
                    <p>Увеличение видимости <br>интернет-магазина в <br>поисковой системе и <br>привлечение пользователей</p>
                </a>
            </div>
            <div class="col-12 col-md-6 col-xl-4 align-self-center item">
                <a href="/kontekstnaya-reklama/" class="link-to-other-page" target="_blank">
                    <p>PPC</p>
                    <p>Контекстная реклама <br>для быстрого привлечения <br>клиентов, планирующих <br>покупку</p>
                </a>
            </div>
            <div class="col-12 col-md-6 col-xl-11 align-self-center item hidden-sm-down">
                <div class="wrap-btn">
                    <div class="button">
                        <a href="#" data-toggle="modal" data-target="#myModal" class="btn-pink" data-wipe="Что выбрать Вам?">Что выбрать Вам?</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4 align-self-center item">
                <a href="/smm/" class="link-to-other-page" target="_blank">
                    <p>SMM</p>
                    <p>Повышения узнаваемости <br>компании и бренда, <br>завоевания доверия <br>потенциальных клиентов</p>
                </a>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-12 col-xl-11">
                <div class="wrap-btn">
                    <div class="button">
                        <a href="#" data-toggle="modal" data-target="#myModal" class="btn-pink" data-wipe="Что выбрать Вам?">Что выбрать Вам?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row justify-content-end">
                    <div class="col-2 justify-content-end">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="<?=App::$app->pathAsset?>/img/close.png" alt="">
                        </button>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-10">
                        <h3 class="modal-title" id="exampleModalLabel">Укажите, пожалуйста, Ваши контактные данные, и мы предоставим Вам бесплатную консультацию</h3>
                    </div>
                </div>
                <div id="hidden-row" class="row">
                    <div class="modal-body">
                        <div class="container1">
                            <div class="card">
                                <form id="callback-form">
                                    <div class="input-container">
                                        <input type="text" id="Username" name="username" required>
                                        <input type="hidden" name="type" value="freeConsultation">
                                        <label for="Username">Имя</label>
                                        <div class="bar"></div>
                                    </div>
                                    <div class="input-container number">
                                        <input class="form-control bfh-phone" type="text" id="phone" value="" name="phone" data-format="+380 (dd) ddd-dd-dd" required>
                                        <label for="phone">Телефон</label>
                                        <div class="bar"></div>
                                    </div>
                                    <div class="errorMessage" style="display: none">Укажите Ваш телефон. (см. подсказку)</div>
                                    <div class="input-container">
                                        <select class="form-control" id="select" name="select" required>
                                            <option value="" disabled selected>Вам требуется</option>
                                            <option value="Разработка интернет-магазина">Разработка интернет-магазина</option>
                                            <option value="Интеграция с учётными системами">Интеграция с учётными системами</option>
                                            <option value="Продвижение интернет-магазина">Продвижение интернет-магазина</option>
                                        </select>
                                        <div class="bar"></div>
                                    </div>
                                    <div class="button-container">
                                        <div class="wrap-btn">
                                            <div class="button">
                                                <button type="submit" class="btn" data-wipe="Отправить заявку">Отправить заявку</button>
                                                <!--<a href="" id="submit-btn" class="btn-pink" data-wipe="Отправить заявку">Отправить заявку</a>-->
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div class="wrap-alert">
    <div class="alert-div" id="alert">
        <p>Спасибо!!! Наш специалист свяжется с вами в ближайшее время.</p>
        <div class="wrap-btn">
            <div class="button">
                <a href="#" id="open-close" class="btn-pink" data-wipe="ОК">ОК</a>
            </div>
        </div>
    </div>
</div>-->
<!-- END Modal -->
<div class="modal fade" id="modal-thank" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p>Спасибо!!! Наш специалист свяжется с вами в ближайшее время.</p>
            </div>
            <div class="modal-footer">
                <div class="wrap-btn">
                    <div class="button">
                        <a href="#" data-dismiss="modal" class="btn-pink" data-wipe="ОК">ОК</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>