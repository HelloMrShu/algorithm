<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */

//先序非递归
function preOrder($root) {
    if (!$root) return [];
    
    $result = [];
    $stack = [$root];
    
    while($stack) {
        $node = array_pop($stack);
        $result[] = $node->val;
        
        if ($node->right) {
            $stack[] = $node->right;
        }
        
        if ($node->left) {
            $stack[] = $node->left;
        }
    }
    return $result;
}

//中序非递归遍历
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
