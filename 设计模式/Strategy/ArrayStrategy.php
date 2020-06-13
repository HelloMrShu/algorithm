<?php
namespace App\Modules\Pattern\Models\Strategy;

use App\Modules\Pattern\Models\Strategy\Strategy;

class ArrayStrategy implements Strategy
{
    public static function parse($params = []) {
        return $params;
    }
}
