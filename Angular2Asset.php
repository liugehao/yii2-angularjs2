<?php
/**
 * @copyright Copyleft (c) 2016 WorkGroup.cn
 */
namespace liugehao\angularjs2;
use yii\web\AssetBundle;
/**
 * This asset bundle provides the [angular javascript library](https://angular.io/)
 *
 * @author Liugehao <root@workgroup.cn>
 */
class Angular2Asset extends AssetBundle
{
    public $sourcePath = '@vendor/liugehao/yii2-angularjs2';
    public $js = [
        "node_modules/core-js/client/shim.min.js",
        "node_modules/zone.js/dist/zone.js",
        "node_modules/reflect-metadata/Reflect.js",
        "node_modules/systemjs/dist/system.src.js",
        "systemjs.config.js",
    ];
}
