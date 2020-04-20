<?php
namespace string_symmetry;


class Stack
{
    public $stack;
    public function __construct()
    {
        $this->stack=[];
    }

    public function push($item){
        array_unshift($this->stack,$item);
    }

    public function isEmpty(){
        return empty($this->stack);
    }

    public function pop(){
        if ($this->isEmpty()){
            throw new \RuntimeException("Stack is Empty");
        }else{
            return array_shift($this->stack);
        }
    }

    public function getStack(){
        return $this->stack;
    }
}