<?php
class LRUCache {
    /**
     * @param Integer $capacity
     */
    public $cache = [];
    public $queue = [];
    function __construct($capacity) {
        $this->capacity = $capacity;
    }

    /**
     * @param Integer $key
     * @return Integer
     */
    function get($key) {
        if (isset($this->cache[$key])) {
            if ($pos = array_search($key, $this->queue)) {
                unset($this->queue[$pos]);
                array_unshift($this->queue, $key);
            }
            return $this->cache[$key];
        }
        return -1;
    }

    /**
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value) {
        $pos = array_search($key, $this->queue);
        if ($pos !== false) {
            unset($this->queue[$pos]);
        } else {
            if (count($this->queue) >= $this->capacity) {
                $popKey = array_pop($this->queue);
                unset($this->cache[$popKey]);
            }
        }
        array_unshift($this->queue, $key);
        $this->cache[$key] = $value;
    }
}