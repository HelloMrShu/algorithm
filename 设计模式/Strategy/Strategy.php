<?php
namespace App\Modules\Pattern\Models\Strategy;

/*
 * 策略模式是一种定义一些列算法的方法
 * 算法实现相同的工作，内部实现不同，可以以相同的方式调用
 */
interface Strategy
{
    public static function parse();
}
