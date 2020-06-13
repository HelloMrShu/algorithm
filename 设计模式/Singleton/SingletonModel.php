<?php

namespace App\Modules\Pattern\Models\Singleton;

/*
 * 单例模式是指一个类只有一个实例
 * 作用：避免大量的new操作，节省系统、内存资源
 * 例如：数据库连接
 * 关注点：并发问题
 *
 */
class SingletonModel
{
    private static $_instance = null;

    private function __clone(){}
    private function __construct(){}
    private function __wakeup(){}
    
    public static function getInstance(){
        if (self::$_instance == null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

}
