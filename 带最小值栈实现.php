<?php

class Stack
 {
    private $_data = [];
    private $MaxSize = 5;
    
    private $min = [];
    private $top = -1;

     //判断栈空
     public  function isEmpty(){
         if ($this->top == -1 || empty($this->_data)) {
             return true;
         } else {
             return false;
         }
     }

     //判断栈满
     public function isFull(){
         if ($this->top == ($this->MaxSize-1)) {
             return true;
         } else {
             return false;
         }
     }

    //入栈
     public function push($elem) {
        if (!$this->isFull()) {
            echo  '当前入栈元素：'.$elem.'<br/>';
            $this->_data[++$this->top] = $elem;
            if (empty($this->min)) {
                $this->min[$this->top] = $elem;
            } else {
                if ($this->top) {
                    $index = $this->top-1;
                } else {
                    $index = 0;;
                }
                $tmp = $this->min[$index];

                if ($tmp > $elem) {
                    $this->min[] = $elem;
                } else {
                    $this->min[] = $tmp;
                }
            }
        } else {
            echo '栈满，元素['.$elem.']无法入栈<br/>';
            return '';
        }
     }

     //出栈
     public function pop(){
         if (!$this->isEmpty()) {
             unset($this->min[$this->top]);
             $elem = $this->_data[$this->top];
             unset($this->_data[$this->top]);
             --$this->top;
             return $elem;
         }
         echo '栈空';
         return '';
     }

     //栈最小值
     public function getMin(){
         if ($this->top) {
             return $this->min[$this->top];
         }
         return null;
     }

     //获取栈数据
     public function getData(){
         return $this->_data;
     }

     //获取栈顶元素索引
     public function getTopIndex(){
         return $this->top;
     }

     //返回辅助栈的数据
     public function getMinArr() {
         return $this->min;
     }
    
 }
