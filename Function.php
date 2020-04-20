<?php
function isSymmetryChain($str){
    $queue= new \string_symmetry\Queue();
    $stack= new \string_symmetry\Stack();

    for ($i=0;$i<strlen($str);$i++){
        $queue->enQueue($str[$i]);
        $stack->push($str[$i]);
    }

    for ($j=0;$j<count($stack->getStack());$j++){
        if ($stack->getStack()[$j] != $queue->readQueue()[$j]){
            return false;
        }
    }
    return true;
}

function checkSymmetryChain($str){
    if (isSymmetryChain($str)){
        echo "<b>$str</b> la chuoi doi xung";
    } else {
        echo "<b>$str</b> khong phai doi xung";
    }
}