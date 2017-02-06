<?php
namespace lemon\inspinia;

/**
 * Class FontawesomeAsset
 *
 * @package lemon\inspinia
 */
class ionRangeSliderAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/ionrangeslider';
    public $css = [
        'css/ion.rangeSlider.css',
        'css/ion.rangeSlider.skinModern.css'
    ];
    public $js = [
        'js/ion.rangeSlider.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
