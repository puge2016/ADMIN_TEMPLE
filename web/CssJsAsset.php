<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace puge2016\web;

use yii\web\AssetBundle;
/**
 * This asset bundle provides the [jQuery](http://jquery.com/) JavaScript library.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class CssJsAsset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $css = [
        'adminlte/bootstrap/css/bootstrap.min.css',
        'font-awesome/css/font-awesome.min.css',
        'ionicons/css/ionicons.min.css',
        'adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css',
    ];
    public $js =[
        'adminlte/bootstrap/js/bootstrap.min.js',
        'adminlte/plugins/fastclick/fastclick.js',
        'adminlte/dist/js/app.min.js',
        'adminlte/plugins/sparkline/jquery.sparkline.min.js',
        'adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        'adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        'adminlte/plugins/slimScroll/jquery.slimscroll.min.js',
        'adminlte/plugins/chartjs/Chart.min.js',
        'adminlte/dist/js/pages/dashboard2.js',
        'adminlte/dist/js/demo.js',
    ];
}
