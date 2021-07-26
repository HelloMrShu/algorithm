<?php

/**
 *  层序遍历（queue + bfs）
*/

function layerOrder($root) {
    if (!$root) return [];
  
    $data = []; //存储结果系列
    $queue = [$root];
  
    while($queue) {
        $n = count($queue);
        $layer = [];
        for ($i = 0; $i < $n; $i++) {
            $node = array_shift($queue);
            array_push($layer, $node->val);
          
            if ($node->left) {
                array_push($queue, $node->left);
            }
                           
            if ($node->right) {
                array_push($queue, $node->right);
            }
        }
        $data[] = $layer;
    }
    return $data;
}
