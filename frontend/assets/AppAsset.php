<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'fonts/flaticon.min4bf4.css',
        'css/public4bf4.css',
        'css/stylef488.css',
        'css/styles5b31.css',
        'css/font-awesome.min474a.css',
        'css/swiper19f6.css',
        'css/magnific-popup8a54.css',
        'css/shortcodes19f6.css',
        'css/cherry-chartsf488.css',
        'css/grid-base8a54.css',
        'css/grid-responsive8a54.css',
        'css/slick91ce.css',
        'css/drop-downs8a54.css',
        'css/main8a54.css',
        'css/main-responsive8a54.css',
        'css/add-onsf03b.css',
        'css/style8a54.css',
        'css/site.css',
        'css/arrowsb523.css',
        'css/arrows5152.css',
        'css/font-awesome.minb523.css',
        'css/tooltipster9b70.css',
        'css/themes/tooltipster-light9b70.css',
        'css/animationsa242.css',
        'css/stylesa242.css',
        'css/responsivea242.css',
        'css/theme694e.css',


    ];
    public $js = [
        'js/jquery/jqueryc1d8.js',
        'js/jquery/jquery-migrate.min1576.js',
        'js/cherry-api.minf03b.js',
        'js/spin.min7406.js',
        'js/spin.jquery7406.js',
        'js/tooltipster/js/jquery.tooltipster.min9b70.js',
        'js/functionsa242.js',
        'js/comment-reply.minb523.js',
        'js/jquery.magnific-popup.min8a54.js',
        'js/script.minf03b.js',
        'js/script5152.js',
        'js/forms-api.min677a.js',
        'js/shotcodes/swiper.jquery.min19f6.js',
        'js/shotcodes/init.min19f6.js',
        'js/shotcodes/video-preview.min19f6.js'
    ];
    public $depends = [
        //'yii\web\YiiAsset',
       // 'yii\bootstrap\BootstrapAsset',
    ];
}
