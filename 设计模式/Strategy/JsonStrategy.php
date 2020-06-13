<?php
namespace App\Modules\Pattern\Models\Strategy;

use App\Modules\Pattern\Models\Strategy\Strategy;

class JsonStrategy implements Strategy
{
    public static function parse($params = []) {
        return json_encode($params);
    }
}
