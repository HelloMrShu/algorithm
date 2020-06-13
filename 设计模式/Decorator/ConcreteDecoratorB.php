<?php
namespace App\Modules\Pattern\Models\Decorator;

use App\Modules\Pattern\Models\Decorator\AbsDecorator;
use App\Modules\Pattern\Models\Decorator\IComponent;

class ConcreteDecoratorB extends AbsDecorator 
{

    public function __construct(IComponent $component) {
        parent::__construct($component);
 
    }
 
    public function operation() {
        parent::operation();    //  调用装饰类的操作
        return $this->addedOperationB();   //  新增加的操作
    }
 
    /**
     * 新增加的操作A，即装饰上的功能
     */
    public function addedOperationB() {
        return 'Add Operation B';
    }
}

