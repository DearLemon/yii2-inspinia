<?php
namespace lemon\inspinia;

/**
 * Class FontawesomeAsset
 *
 * @package lemon\inspinia
 */
class SparklineAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/jquery-sparkline';
    public $js = [
        'dist/jquery.sparkline.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
