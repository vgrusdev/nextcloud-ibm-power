<?php
$CONFIG = array (
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => 'redis',
    'port' => 6379,
  ),
  'instanceid' => 'oc8726v4nvmi',
  'passwordsalt' => 's/KP4PKHt519CGSW8L1rSV9GyO5PJt',
  'secret' => 'ua4V8K1Od6PA0dgz3zKJti67k5Lz6vuJzCyxTcvgkHrhKftP',
  'trusted_domains' => 
  array (
    0 => '172.19.12.50:8085',
  ),
  'datadirectory' => '/var/www/html/data',
  'overwrite.cli.url' => 'http://172.19.12.50:8085',
  'dbtype' => 'pgsql',
  'version' => '13.0.1.1',
  'dbname' => 'nextcloud',
  'dbhost' => 'db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'dbuser' => 'nextcloud',
  'dbpassword' => 'nextpassw0rd',
  'installed' => true,
);

