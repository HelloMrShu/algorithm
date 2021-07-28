<?php

/**
 * 中序非递归遍历
 */
 
function inOrder($root) {
    if (!$root) return [];
    
    $stack = [];
    $result = [];
    
    $node = $root;
    while ($stack || $node) {
        while($node) {
            $stack[] = $node;
            $node = $node->left;
        }
        
        $n = array_pop($stack);
        $result[] = $n->val;
        $node = $node->right;
    }
    return $result;
}

//中序递归遍历
function recursiveInOrder($root) {
    if (!$root) return [];
 
    $left = $right = [];
    if ($root->left) {
        $left = $this->recursiveInOrder($root->left);
    }
    if ($root->right) {
        $right = $this->recursiveInOrder($root->right);
    }
    
    return array_merge($left, [$root->val], $right);
}
