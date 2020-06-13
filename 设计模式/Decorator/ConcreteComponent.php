<?php
namespace App\Modules\Pattern\Models\Decorator;

use App\Modules\Pattern\Models\Decorator\IComponent;

class ConcreteComponent implements IComponent{
 
    public function operation() {
        //echo "Concrete Component operation\n";
    }
 
}
