<?php


function DepthFirstSearch($root)
{
    if($root == null) return [];
    
    $stack = [ $root ];
    $result = [];

    while(count($stack) > 0){
      
        $current = array_pop($stack);
        array_push($result, $current->val);
        if($current->rigth) array_push($stack, $current->rigth);
        if($current->left) array_push($stack, $current->left);
        
    }

    return $result;
}





?>