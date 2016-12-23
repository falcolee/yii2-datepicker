<?php

namespace xiaogouxo\datepicker\assets;

use Yii;
use yii\web\AssetBundle;


class DateRangeAsset extends AssetBundle
{
    public $css = [
        'dateRange.css',
        
    ];
    
    public $js = [
        'dateRange.js',
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    
    /**
     * 初始化：sourcePath赋值
     * @see \yii\web\AssetBundle::init()
     */
    public function init()
    {
        $this->sourcePath = dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR . 'statics';
    }
}