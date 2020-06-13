<?php

namespace App\Modules\Pattern\Models\Observer;

use App\Modules\Pattern\Models\Observer\Observerable;

interface BaseContext
{
    public function attach(Observerable $ob);

    public function dettach(Observerable $ob);

    public function notify();

}
