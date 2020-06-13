<?php

namespace App\Modules\Pattern\Models\Factory;

use App\Modules\Pattern\Models\Factory\MFemale;
use App\Modules\Pattern\Models\Factory\MCreatePeople;

class MFemaleFactory implements MCreatePeople
{
    public function create(){
        return new MFemale();
    }
}
