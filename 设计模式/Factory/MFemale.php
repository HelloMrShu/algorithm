<?php

namespace App\Modules\Pattern\Models\Factory;

use App\Modules\Pattern\Models\Factory\MPeople;

class  MFemale implements MPeople
{
    public function marray(){
        return 'method--female marray!';
    }
}
