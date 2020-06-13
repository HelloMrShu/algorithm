<?php
namespace App\Modules\Pattern\Models\Decorator;

use App\Modules\Pattern\Models\Decorator\IComponent;

abstract class AbsDecorator implements IComponent
{
     
     protected  $_component;
         
    public function __construct(IComponent $component) {
        $this->_component = $component;
    }
 
    public function operation() {
        $this->_component->operation();
    }

}

