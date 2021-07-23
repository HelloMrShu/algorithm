<?php

/**
 * BST：二叉搜索树
 * 中序遍历：从小到大的序列
 * 查找：O(log2n)
*/

typedef struct node {
    int data;
    struct node *left;
    struct node *right;
} Node;

typedef struct tree {
    struct node *root;
} Tree;

#build a binary search tree
function build_bst($tree, $val) {
    //构建一个val的节点
    $n = new Node;
    $n->data = $val;
    $n->left = null;
    $n->right = null;
    
    if ($tree->root == null) {
        $tree->root = $n;
    } else {
        $temp = $tree->root;
        while($temp) {
            if ($val > $temp->data) {
                //右侧
                if ($temp->right) {
                    $temp = $temp->right;                
                } else {
                    $temp->right = $n;                
                }
            } else {
                //左侧
                 if ($temp->left) {
                     $temp = $temp->left;                 
                 } else {
                     $temp->left = $n;                 
                 }
            }
        }
    }
}
