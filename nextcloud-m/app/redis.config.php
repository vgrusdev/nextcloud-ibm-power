<?php
$CONFIG = array (
  'memcache.distributed' => '\OC\Memcache\Redis',
  'memcache.locking' => '\OC\Memcache\Redis',
  'memcache.local' => '\OC\Memcache\APCu',
  'redis' => array(
    'host' => 'redis',
    'port' => 6379,
  ),
);
