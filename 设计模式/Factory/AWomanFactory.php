<?php

namespace App\Modules\Pattern\Models\Factory;

use App\Modules\Pattern\Models\Factory\ACreatePeople;
use App\Modules\Pattern\Models\Factory\AWomanOne;
use App\Modules\Pattern\Models\Factory\AWomanTwo;


class AWomanFactory implements ACreatePeople
{

    public function createOne(){
        return new AWomanOne();
    }

    public function createTwo(){
        return new AWomanTwo();
    }
}
