<?php

namespace App\Modules\Pattern\Models\Factory;

use App\Modules\Pattern\Models\Factory\SWater;
use App\Modules\Pattern\Models\Factory\SOrange;

class SimpleFactory
{
    public static function produceWater(){
        return new SWater();
    }

    public static function produceOrange(){
        return new SOrange();
    }

}
