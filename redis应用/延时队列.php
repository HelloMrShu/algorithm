<?php


//redis 延时队列
public function delayQueue() {
	$id = md5(uniqid(microtime(true),true));
	$key = 'delay-'.$id;
	$score = time() + 10; //延迟10秒处理
	if (Redis::zadd('delay_queue', $score, $key)) {
		echo $key."加入延时队列成功";
	} else {
		echo $key."加入延时队列失败";
	}

	$maxScore = time();
	$items = Redis::zrangebyscore('delay_queue', 0, $maxScore);

	foreach ($items as $item) {
		 if (Redis::zrem('delay_queue', $item)) {
			echo "execute ".$item;
		 }
	}
}