<?php
namespace App\Modules\Pattern\Models\Strategy;

use App\Modules\Pattern\Models\Strategy\Strategy;

class SerializeStrategy implements Strategy
{
    public static function parse($params = []) {
        return serialize($params);
    }
}
