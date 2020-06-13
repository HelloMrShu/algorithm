<?php

/*
 * 利用redis 实现 api接口访问速率限制
 * 原理：为接口唯一key设置默认访问次数
 * 每次访问检查，如果允许访问，次数减1，否则禁止访问 
 *
 */
class RateLimit
{

    public static function check($ip = null, $sourceKey = null){

        if (empty($ip) || empty($sourceKey)) {
            return false;
        }

        $rateKey = $ip.'-'.$sourceKey;
        if (Redis::get($rateKey) === null) {
            Redis::setex($rateKey, 60, 10);
        }

        $curApiCount = Redis::decr($rateKey);
        if ($curApiCount < 0) {
            return 0;
        }
        return $curApiCount;
    }

}
