<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;
use yii\console\Controller;

class HelloController extends Controller{
    public function actionTest(){
        var_dump('asdas');
    }
}
