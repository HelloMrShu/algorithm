<?php

namespace App\Modules\Pattern\Models\Factory;

use App\Modules\Pattern\Models\Factory\SDrink;

class SOrange implements SDrink
{
    public function create(){
        return 'simple--orange!';
    }
}
