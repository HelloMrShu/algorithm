<?php

namespace App\Modules\Pattern\Models\Observer;

use App\Modules\Pattern\Models\Observer\BaseContext;
use App\Modules\Pattern\Models\Observer\Observerable;

class Context implements BaseContext
{
    private $observers = null;

    public function __construct(){
        $this->observers = [];
    }

    //绑定
    public function attach(Observerable $ob){
        return array_push($this->observers, $ob);
    }

    //解绑
    public function dettach(Observerable $ob){
        $index = in_array($ob, $this->observers);
        if (empty($index)) {
            return FALSE;
        }
        unset($this->observers[$index]);
        return true;
    }

    //通知
    public function notify(){
        if (!is_array($this->observers)) {  
            return FALSE;  
        }  
  
        $ret = [];
        foreach ($this->observers as $observer) {  
            $ret [] = $observer->update();  
        }
        return $ret;
    }

}
