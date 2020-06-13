<?php
namespace App\Modules\Pattern\Models\Decorator;

/*
 * 允许向一个现有的对象添加新的功能，同时又不改变其结构
 * 装饰器模式提供了改变子类的灵活方案
 * 装饰器模式经常被用于创建过滤器
 */
interface IComponent
{
    public function operation();
}
