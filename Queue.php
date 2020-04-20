<?php


namespace string_symmetry;

include "Node.php";

class Queue
{
    public $front;
    public $back;
    public $count;

    public function __construct()
    {
        $this->front = null;
        $this->back = null;
    }

    public function isEmpty()
    {
        if ($this->front == null) {
            return true;
        } else {
            return false;
        }
    }

    public function enQueue($value)
    {
        $node = new Node($value);
        if ($this->isEmpty()) {
            $this->front = $node;
            $this->back = $node;
            $this->count++;
        } else {
            $this->back->next = $node;
            $this->back = $node;
            $this->count++;
        }
    }

    public function deQueue()
    {
        if ($this->isEmpty()) {
            return null;
        } else {
            if ($this->count == 1) {
                $remove = $this->front->value;
                $this->front = $this->back = null;
                $this->count--;
                return $remove;
            } else {
                $remove = $this->front->value;
                $this->front = $this->front->next;
                $this->count--;
                return $remove;
            }
        }
    }

    public function readQueue()
    {
        $listData = [];
        $current = $this->front;
        while ($current != null) {
            array_push($listData,$current->value);
            $current=$current->next;
        }
        return $listData;
    }
}