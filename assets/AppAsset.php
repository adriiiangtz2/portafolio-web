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
        'css/site.css',
        'css/general.css',
        'css/trabajos.css',
        'css/footer.css',
        "https://fonts.googleapis.com",
        "https://fonts.gstatic.com",
        "https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" ,
        "https://fonts.googleapis.com/css2?family=Merriweather&family=Press+Start+2P&display=swap",
        "https://use.fontawesome.com/releases/v5.8.1/css/all.css", 

        "https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@900&display=swap",
        "https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@400;900&display=swap",
    ];
    public $js = [
        'js/jquery-3.6.0.min.js',
        'js/filtro.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        
    ];
}