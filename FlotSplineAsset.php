<?php
namespace lemon\inspinia;

/**
 * Class FontawesomeAsset
 *
 * @package lemon\inspinia
 */
class FlotSplineAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/flot-spline';
    public $js = [
        'js/jquery.flot.spline.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'lemon\inspinia\FlotAsset'
    ];
}
