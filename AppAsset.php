<?php

namespace lemon\inspinia;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{

    public $sourcePath = '@vendor/lemon/yii2-inspinia/assets';
    public $css = [
        'css/animate.css',
        'css/style.css'
    ];
    public $js = [
        'js/plugins/modal/ajax-modal-popup.js',
        'js/plugins/metisMenu/jquery.metisMenu.js',
        'js/plugins/slimscroll/jquery.slimscroll.min.js',
        'js/inspinia.js',
        'js/plugins/pace/pace.min.js',
    ];
    public $depends = [
        //'yii\jui\JuiAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'lemon\inspinia\FontawesomeAsset'
    ];

}
