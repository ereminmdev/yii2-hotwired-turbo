<?php

namespace ereminmdev\yii2\hotwired_turbo;

use yii\web\AssetBundle;

class HotwiredTurboAsset extends AssetBundle
{
    public $sourcePath = '@npm/hotwired--turbo/dist';

    public $js = [
        'turbo.es2017-esm.js',
        //'turbo.es2017-umd.js',
    ];
}
