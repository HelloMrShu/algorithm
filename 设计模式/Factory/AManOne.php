<?php

namespace App\Modules\Pattern\Models\Factory;

use App\Modules\Pattern\Models\Factory\MPeople;

class  AManOne implements MPeople
{
    public function marray(){
        return 'abstract--man_one marray!';
    }
}
