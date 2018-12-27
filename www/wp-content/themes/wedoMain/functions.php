<?php
require_once 'classes/App.php';
App::init();

function d($var) {
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

function dd($var) {
    d($var);
    die;
}

/* Удаляем H2 из пагинации */
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
    return '
 <nav class="%1$s" role="navigation">
  <div class="nav-links">%3$s</div>
 </nav>    
 ';
}

add_action('after_setup_theme', function(){
    register_nav_menus( array(
        'header_menu' => 'Меню в шапке',
        'footer_menu' => 'Меню в подвале'
    ) );
});

if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );


add_action( 'wp_enqueue_scripts', 'getStyleScripts' );
function getStyleScripts() {

    wp_enqueue_style( 'bootstrap', App::$app->pathAsset . '/css/bootstrap.min.css');
    wp_enqueue_style( 'main', App::$app->pathAsset . '/css/main.css');

    wp_enqueue_script( 'jquery-3.2.1', App::$app->pathAsset . '/js/jquery-3.2.1.min.js', array(), '3.2.1', false );
    wp_enqueue_script( 'jquery.selectric', App::$app->pathAsset . '/js/jquery.selectric.js', array(), '1', false );
    wp_enqueue_script( 'bootstrap-formhelpers', App::$app->pathAsset . '/js/bootstrap-formhelpers.min.js', array(), '1', false );

    wp_enqueue_script( 'tether', App::$app->pathAsset . '/js/tether.min.js', [], '1', true );
    wp_enqueue_script( 'bootstrap', App::$app->pathAsset . '/js/bootstrap.min.js', [], '1', true );
    wp_enqueue_script( 'owl.carousel', App::$app->pathAsset . '/js/owl.carousel.min.js', [], '1', true );
    wp_enqueue_script( 'config', App::$app->pathAsset . '/js/config.js', [], '1', true );
    wp_enqueue_script( 'waypoints', App::$app->pathAsset . '/js/waypoints.min.js', [], '1', true );
    wp_enqueue_script( 'animate-css', App::$app->pathAsset . '/js/animate-css.js', [], '1', true );
    wp_enqueue_script( 'main', App::$app->pathAsset . '/js/main.js', [], '1', true );

}

/**
 * Альтернатива wp_pagenavi. Создает ссылки пагинации на страницах архивов.
 *
 * @param array  $args      Аргументы функции
 * @param object $wp_query  Объект WP_Query на основе которого строится пагинация. По умолчанию глобальная переменная $wp_query
 *
 * @version 2.7
 * @author  Тимур Камаев
 * @link    Ссылка на страницу функции: http://wp-kama.ru/?p=8
 */
function kama_pagenavi( $args = array(), $wp_query = null ){

    // параметры по умолчанию
    $default = array(
        'before'          => '',   // Текст до навигации.
        'after'           => '',   // Текст после навигации.
        'echo'            => true, // Возвращать или выводить результат.

        'text_num_page'   => '',           // Текст перед пагинацией.
        // {current} - текущая.
        // {last} - последняя (пр: 'Страница {current} из {last}' получим: "Страница 4 из 60").
        'num_pages'       => 10,           // Сколько ссылок показывать.
        'step_link'       => 10,           // Ссылки с шагом (если 10, то: 1,2,3...10,20,30. Ставим 0, если такие ссылки не нужны.
        'dotright_text'   => '…',          // Промежуточный текст "до".
        'dotright_text2'  => '…',          // Промежуточный текст "после".
        'back_text'       => '',    // Текст "перейти на предыдущую страницу". Ставим 0, если эта ссылка не нужна.
        'next_text'       => '',   // Текст "перейти на следующую страницу".  Ставим 0, если эта ссылка не нужна.
        'first_page_text' => '« к началу', // Текст "к первой странице".    Ставим 0, если вместо текста нужно показать номер страницы.
        'last_page_text'  => 'в конец »',  // Текст "к последней странице". Ставим 0, если вместо текста нужно показать номер страницы.
    );

    // Cовместимость с v2.5: kama_pagenavi( $before = '', $after = '', $echo = true, $args = array() )
    if( ($fargs = func_get_args()) && is_string( $fargs[0] ) ){
        $default['before'] = isset($fargs[0]) ? $fargs[0] : '';
        $default['after']  = isset($fargs[1]) ? $fargs[1] : '';
        $default['echo']   = isset($fargs[2]) ? $fargs[2] : true;
        $args              = isset($fargs[3]) ? $fargs[3] : array();
        $wp_query = $GLOBALS['wp_query']; // после определения $default!
    }

    if( ! $wp_query ){
        wp_reset_query();
        global $wp_query;
    }

    if( ! $args ) $args = array();
    if( $args instanceof WP_Query ){
        $wp_query = $args;
        $args     = array();
    }

    $default = apply_filters( 'kama_pagenavi_args', $default ); // чтобы можно было установить свои значения по умолчанию

    $rg = (object) array_merge( $default, $args );

    //$posts_per_page = (int) $wp_query->get('posts_per_page');
    $paged          = (int) $wp_query->get('paged');
    $max_page       = $wp_query->max_num_pages;

    // проверка на надобность в навигации
    if( $max_page <= 1 )
        return false;

    if( empty( $paged ) || $paged == 0 )
        $paged = 1;

    $pages_to_show = intval( $rg->num_pages );
    $pages_to_show_minus_1 = $pages_to_show-1;

    $half_page_start = floor( $pages_to_show_minus_1/2 ); // сколько ссылок до текущей страницы
    $half_page_end   = ceil(  $pages_to_show_minus_1/2 ); // сколько ссылок после текущей страницы

    $start_page = $paged - $half_page_start; // первая страница
    $end_page   = $paged + $half_page_end;   // последняя страница (условно)

    if( $start_page <= 0 )
        $start_page = 1;
    if( ($end_page - $start_page) != $pages_to_show_minus_1 )
        $end_page = $start_page + $pages_to_show_minus_1;
    if( $end_page > $max_page ) {
        $start_page = $max_page - $pages_to_show_minus_1;
        $end_page = (int) $max_page;
    }

    if( $start_page <= 0 )
        $start_page = 1;

    // создаем базу чтобы вызвать get_pagenum_link один раз
    $link_base = str_replace( 99999999, '___', get_pagenum_link( 99999999 ) );
    $first_url = get_pagenum_link( 1 );
    if( false === strpos( $first_url, '?') )
        $first_url = user_trailingslashit( $first_url );

    // собираем елементы
    $els = array();

    if( $rg->text_num_page ){
        $rg->text_num_page = preg_replace( '!{current}|{last}!', '%s', $rg->text_num_page );
        $els['pages'] = sprintf( '<span class="pages">'. $rg->text_num_page .'</span>', $paged, $max_page );
    }
    // назад
    if ( $rg->back_text && $paged != 1 )
        $els['prev'] = '<a class="pagination__prev pagination__prev-no-active" href="'. ( ($paged-1)==1 ? $first_url : str_replace( '___', ($paged-1), $link_base ) ) .'">'. $rg->back_text .'</a>';
    // в начало
//    if ( $start_page >= 2 && $pages_to_show < $max_page ) {
//        $els['first'] = '<a class="first" href="'. $first_url .'">'. ( $rg->first_page_text ?: 1 ) .'</a>';
//        if( $rg->dotright_text && $start_page != 2 )
//            $els[] = '<span class="extend">'. $rg->dotright_text .'</span>';
//    }
    // пагинация
    for( $i = $start_page; $i <= $end_page; $i++ ) {
        if( $i == $paged )
            $els['current'] = '<span class="pagination__page pagination__page-active">'. $i .'</span>';
        elseif( $i == 1 )
            $els[] = '<a href="'. $first_url .'" class="pagination__page ">1</a>';
        else
            $els[] = '<a href="'. str_replace( '___', $i, $link_base ) .'" class="pagination__page">'. $i .'</a>';
    }

    // ссылки с шагом
    $dd = 0;
    if ( $rg->step_link && $end_page < $max_page ){
        for( $i = $end_page + 1; $i <= $max_page; $i++ ){
            if( $i % $rg->step_link == 0 && $i !== $rg->num_pages ) {
                if ( ++$dd == 1 )
                    $els[] = '<span class="extend">'. $rg->dotright_text2 .'</span>';
                $els[] = '<a href="'. str_replace( '___', $i, $link_base ) .'" class="pagination__page">'. $i .'</a>';
            }
        }
    }
    // в конец
//    if ( $end_page < $max_page ) {
//        if( $rg->dotright_text && $end_page != ($max_page-1) )
//            $els[] = '<span class="extend">'. $rg->dotright_text2 .'</span>';
//        $els['last'] = '<a class="last" href="'. str_replace( '___', $max_page, $link_base ) .'">'. ( $rg->last_page_text ?: $max_page ) .'</a>';
//    }
    // вперед
    if ( $rg->next_text && $paged != $end_page )
        $els['next'] = '<a class="pagination__next" href="'. str_replace( '___', ($paged+1), $link_base ) .'">'. $rg->next_text .'</a>';

    $els = apply_filters( 'kama_pagenavi_elements', $els );

    $out = $rg->before . '<div class="pagination">'. implode( ' ', $els ) .'</div>'. $rg->after;

    $out = apply_filters( 'kama_pagenavi', $out );
    if( $rg->echo ) echo $out;
    else return $out;
}

function getBreadcrumbs () {
    if (is_home()) {
        return '';
    }
    $arNavs = [];
    $arNavs[] = '<a href="' . home_url() . '" class="breadcrumb-link">' . __( 'Главная', 'wedo' ) . '</a>';
    if (is_page()) {
        $arNavs[] = '<a href="' . get_page_link() . '" class="breadcrumb-link breadcrumb-link_active">' . get_the_title() . '</a>';
    }
    if (is_single()) {
        $arNavs[] = '<a href="/blog/" class="breadcrumb-link">' . __( 'Блог', 'wedo' ) . '</a>';
        $arNavs[] = '<a href="' . get_page_link() . '" class="breadcrumb-link breadcrumb-link_active">' . get_the_title() . '</a>';
    }
    $result = '<nav id="breadcrumb" class="breadcrumb">';
    foreach ($arNavs as $arNav) {
        $result .= $arNav;
    }
    $result .= '</nav>';
    return $result;

}