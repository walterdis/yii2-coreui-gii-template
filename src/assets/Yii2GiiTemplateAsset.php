<?php


namespace Walterdis\Yii2\Gii\assets;

use yii\bootstrap4\BootstrapAsset;
use yii\web\AssetBundle;


/**
 * @author  Walter Discher Cechinel <mistrim@gmail.com>
 * Class Yii2GiiTemplates
 *
 * @package Walterdis\Yii2\Gii\assets
 */
class Yii2GiiTemplateAsset extends AssetBundle
{

    public $sourcePath = __DIR__;

    public $css = [
        'styles.css',
    ];

    public $js = [
    ];

    public $depends = [
        'yii\web\YiiAsset',
        BootstrapAsset::class,

    ];

}