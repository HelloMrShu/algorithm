<?php

namespace App\Modules\Pattern\Models\Factory;

use App\Modules\Pattern\Models\Factory\SDrink;

class SWater implements SDrink
{
    public function create(){
        return 'simple--water!';
    }
}
