<?php


/*
 * redis实现悲观锁
 */

class RedisLock
{
    public static function PressimisticLock($key) {

        do {
            $timeout = 5000;
            $microtime = microtime(true)*1000;
            $microtimeout = $microtime + $timeout + 1;

            $curKey = 'lock-'. $key;
            // 上锁
            $isLock = Redis::setnx($curKey, $microtimeout);

            if (!empty($isLock)) {
                $getTime = Redis::get($curKey);

                // key过期时间大于当前时间
                if ($getTime > $microtime) {
                    // 睡眠 降低抢锁频率　缓解redis压力
                    usleep(5000);
                    // 未超时继续等待
                    continue;
                 }

                // 超时,抢锁,可能有几毫秒级时间差可忽略
                $previousTime = Redis::getset($curKey, $microtimeout);
                // key之前的时间小于当前时间，说明过期, 成功
                if ((int)$previousTime < $microtime) {
                    break;
                }
            }

        } while(empty($isLock));
    }

    //解锁
    public static function unLock($key)
    {
        //检测锁是否过期
        if(Redis::ttl($key)) {
            Redis::del($key);
        }
    }


}
