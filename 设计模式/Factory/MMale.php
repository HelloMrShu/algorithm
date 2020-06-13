<?php

namespace App\Modules\Pattern\Models\Factory;

use App\Modules\Pattern\Models\Factory\MPeople;

class  MMale implements MPeople
{
    public function marray(){
        return 'method--male marray!';
    }
}
