<?php

namespace DearLemon\inspinia;

class TimeagoAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/jquery-timeago';
    public $js = ['jquery.timeago.js'];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}