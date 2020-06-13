<?php

namespace App\Modules\Pattern\Models\Factory;

use App\Modules\Pattern\Models\Factory\MPeople;

class  AManTwo implements MPeople
{
    public function marray(){
        return 'abstract--man_two marray!';
    }
}
