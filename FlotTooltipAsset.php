<?php
namespace DearLemon\inspinia;

/**
 * Class FontawesomeAsset
 *
 * @package DearLemon\inspinia
 */
class FlotTooltipAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/flot.tooltip';
    public $js = [
        'js/jquery.flot.tooltip.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'DearLemon\inspinia\FlotAsset'
    ];
}