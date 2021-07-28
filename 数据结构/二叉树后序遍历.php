<?php

/**
 * 后序遍历
 */

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
