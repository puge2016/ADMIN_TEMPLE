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
class IfItIe9Asset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $js = [
        'html5shiv/dist/html5shiv.min.js',
        'resopnd/dest/respond.min.js',
    ];
    public $jsOptions = [
        'condition' => 'lt IE 9',
        'position' => \yii\web\View::POS_HEAD ,
    ];
}
