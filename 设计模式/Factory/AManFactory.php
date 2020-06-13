<?php

namespace App\Modules\Pattern\Models\Factory;

use App\Modules\Pattern\Models\Factory\ACreatePeople;
use App\Modules\Pattern\Models\Factory\AManOne;
use App\Modules\Pattern\Models\Factory\AManTwo;


class AManFactory implements ACreatePeople
{

    public function createOne(){
        return new AManOne();
    }

    public function createTwo(){
        return new AManTwo();
    }
}
