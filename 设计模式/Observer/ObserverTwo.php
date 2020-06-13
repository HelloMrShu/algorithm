<?php

namespace App\Modules\Pattern\Models\Observer;

use App\Modules\Pattern\Models\Observer\Observerable;

class ObserverTwo implements Observerable
{
    public function update(){
        return 'update observer_two!';
    }
}
