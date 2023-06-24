<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/fontawesome.css',
        'css/slick.css',
        'css/lightgallery.min.css',
        'css/animate.css',
        'css/style.css',
    ];
    public $js = [
        'js/jquery-1.12.4.min.js',
        'js/jquery.slick.min.js',
        'js/lightgallery.min.js',
        'js/wow.min.js',
        'js/ripples.min.js',
        'js/particles.min.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap5\BootstrapAsset'
    ];
}
