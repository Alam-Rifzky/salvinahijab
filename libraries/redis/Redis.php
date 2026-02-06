<?php
class Redisbean {
    private $redis;
    private static $instance = null;

    public static function getRedisInstance($launcher){
        if (self::$instance==null) {
			$redis = new Redis();
            $redis->pconnect($launcher->redisHost, $launcher->redisPort, 2.5);
            self::$instance = $redis;
		}
        return self::$instance;
    }
    
    // public function getRedisKey($key){
    //     return $this->redis->get($key);
    // }
}