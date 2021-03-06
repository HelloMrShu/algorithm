<?php
namespace App\Modules\Pattern\Models\Decorator;

use App\Modules\Pattern\Models\Decorator\AbsDecorator;
use App\Modules\Pattern\Models\Decorator\IComponent;

class ConcreteDecoratorA extends AbsDecorator 
{

    public function __construct(IComponent $component) {
        parent::__construct($component);
 
    }
 
    public function operation() {
        parent::operation();    //  调用装饰类的操作
        return $this->addedOperationA();   //  新增加的操作
    }
 
    /**
     * 新增加的操作A，即装饰上的功能
     */
    public function addedOperationA() {
        return  'Add Operation A';
    }
}

