<?php

class App
{
    /**
     * @var App
     */
    public static $app;

    public $pathAsset = '';


    public static function init()
    {
        self::$app = new App();
        self::$app->pathAsset = get_theme_file_uri() . '/assets/';
    }

    public function getImgNoPhoto() {
        return get_theme_file_uri() . '/assets/img/noimage.png';
    }
}