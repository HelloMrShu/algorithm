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
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    
    public $nodes = [];
    function preorderTraversal($root) {
        if (empty($root)) {
            return [];
        }

        $ret = [];
        $this->nodes[] = $root;
        while($this->nodes) {
            $node = array_pop($this->nodes);
            $ret[] = $node->val;
            if ($node->right) {
                $this->nodes[] = $node->right;
            }
            if ($node->left) {
                $this->nodes[] = $node->left;
            }
        }
        return $ret;
    }
}