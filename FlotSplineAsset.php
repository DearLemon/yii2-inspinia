<?php
namespace DearLemon\inspinia;

/**
 * Class FontawesomeAsset
 *
 * @package DearLemon\inspinia
 */
class FlotSplineAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/flot-spline';
    public $js = [
        'js/jquery.flot.spline.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'DearLemon\inspinia\FlotAsset'
    ];
}