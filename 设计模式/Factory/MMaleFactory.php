<?php

namespace App\Modules\Pattern\Models\Factory;

use App\Modules\Pattern\Models\Factory\MMale;
use App\Modules\Pattern\Models\Factory\MCreatePeople;

class MMaleFactory implements MCreatePeople
{
    public function create(){
        return new MMale();
    }
}
