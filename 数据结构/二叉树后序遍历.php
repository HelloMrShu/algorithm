<?php

/**
 * 后序遍历
 */

function postOrder($root)
{
    if (!$root) return [];
    
    $stack = array();
    $data = array();
    array_push($stack, $root);
    while(!empty($stack)){
        $center_node = array_pop($stack);
        array_push($data, $center_node->val);
        if($center_node->right != null)
            array_push($stack, $center_node->right);
        if($center_node->left != null)
            array_push($stack, $center_node->left);
    }
    
    return array_reverse($data);
}

function recursivePostOrder($root)
{
    if (!$root) return [];
  
    $left = $right = [];
  
    if ($root->left) {
        $left = $this->recursivePostOrder($root->left);
    }
  
    if ($root->right) {
        $right = $this->recursivePostOrder($root->right);
    }
  
    return array_merge($left, $right, [$root->val]);
}
