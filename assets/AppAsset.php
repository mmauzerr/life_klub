<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

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
        'css/bootstrap.css',
        'css/site.css',
        'css/jcarousel.basic.css',
        'css/contact-buttons.css',
    ];

    public $js = [
        'js/bootstrap.min.js',
        'js/jcarousel.basic.js',
        'js/jquery.js',
        'js/jquery.color.js',
//        'js/jquery-1.3.2.js', // uncomment for full jquery glow
        'js/jquery-glowing.js',
        'js/jquery.contact-buttons.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapThemeAsset',
    ];

}
