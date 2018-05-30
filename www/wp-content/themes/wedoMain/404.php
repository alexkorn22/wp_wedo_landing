<? 
$templateUri = get_template_directory_uri();
$templateUriAssets = $templateUri."/assets";
?>
<!doctype html>
<html lang="ru">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">

    <meta name="yandex-verification" content="80567c69a37b1299" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>


    <link rel="stylesheet" href="<?=$templateUriAssets?>/css/main.css">
    <script src="<?=$templateUriAssets?>/js/jquery.selectric.js"></script>
    <script src="<?=$templateUriAssets?>/js/bootstrap-formhelpers.min.js"></script>
    <link rel="shortcut icon" href="<?=$templateUriAssets?>/img/logo_fav.ico" type="image/x-icon">

</head>
<body>

<div class="head-404">
    <div class="container head-content">
        <div class="row top-line">
            <div class="col-4 col-md-5 col-lg-6">
                <div class="logo">
                    <a href="/"><img src="<?=$templateUriAssets?>/img/logoWedo.png" alt="WeDo"></a>
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
                            <li><a href="\">Главная</a></li>
                            <li><a href="\sozdanie-saitov\">Создание сайтов</a></li>
                            <li><a href="\internet-magaziny\">Создание интернет-магазинов</a></li>
                            <li><a href="\kontekstnaya-reklama\">Контекстная реклама</a></li>
                            <li><a href="\seo\">SEO-продвижение</a></li>
                            <li><a href="\smm\">SMM</a></li>
                            <li class="current_page"><a href="\blog\">Блог</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row center-line">
            <div class="wrap-image-bg">
                <img src="<?=$templateUriAssets?>/img/macbook-min.png" class="img-fluid d-none d-md-block">
            </div>
            <div class="wrap-text">
                <p class="title_404">404</p>
                <p class="descr_404">Страница, которую вы ищете, не существует или была перемещена</p>
                <div class="row wrap-btn justify-content-center">
                    <div class="col-4 col-md-4 col-lg-3">
                        <div class="button button_orange">
                            <a href="index.html">Главная</a>
                        </div>
                    </div>
                    <div class="col-4 col-md-4 col-lg-3">
                        <div class="button button_orange">
                            <a href="blog.html">Блог</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bottom-line">
            <p class="copyright">© Copyright 2018, Все права защищены</p>
        </div>
    </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="<?=$templateUriAssets?>/js/owl.carousel.min.js"></script>
<script src="<?=$templateUriAssets?>/js/config.js"></script>
<script src="<?=$templateUriAssets?>/js/waypoints.min.js"></script>
<script src="<?=$templateUriAssets?>/js/animate-css.js"></script>
<script src="<?=$templateUriAssets?>/js/main.js"></script>
</body>
</html>