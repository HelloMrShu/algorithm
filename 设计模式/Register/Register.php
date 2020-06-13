<?php 

namespace App\Modules\Pattern\Models\Register;

class Register
{
    public static $objects;

    public static function set($alias, $obj) {
        if (!isset(self::$objects[$alias])) {
            self::$objects[$alias] = $obj;
        }
    }

    public static function get($alias) {
        if (isset(self::$objects[$alias])) {
            return self::$objects[$alias];
        }
        return [];
    }

    public static function _unset($alias) {
        if (isset(self::$objects[$alias])) {
            unset(self::$objects[$alias]);
        }
    }
}
