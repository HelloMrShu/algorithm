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

//先序递归遍历
function recursivePreOrder($root) {
    if (!$root) return [];
    
    $left = $right = [];
    if ($root->left) {
        $left = $this->recursivePreOrder($root->left);
    }
    
    if ($root->right) {
        $right = $this->recursivePreOrder($root->right);
    }
    
    return array_merge([$root->val], $left, $right);
}
