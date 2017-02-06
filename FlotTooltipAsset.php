<?php
namespace lemon\inspinia;

/**
 * Class FontawesomeAsset
 *
 * @package lemon\inspinia
 */
class FlotTooltipAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/flot.tooltip';
    public $js = [
        'js/jquery.flot.tooltip.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'lemon\inspinia\FlotAsset'
    ];
}
