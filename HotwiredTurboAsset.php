<?php

namespace ereminmdev\yii2\hotwired_turbo;

use yii\web\AssetBundle;
use yii\web\View;

class HotwiredTurboAsset extends AssetBundle
{
    public $sourcePath = '@npm/hotwired--turbo/dist';

    public $js = [
        'turbo.es2017-umd.js',
        //'turbo.es2017-esm.js',
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}
