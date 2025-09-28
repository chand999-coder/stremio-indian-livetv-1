<?php
$config['id'] = "live.indian.tv";
$config['description'] = "Watch Indian Live TV channels from many sources. Some of them works only on Indian IP's as the content provided is Indian.";
$config['name'] = "Indian Live TV";
$config['icon'] = "https://www.materialui.co/materialIcons/notification/live_tv_black_192x192.png";
$config['version'] = "1.0.0";
if (!defined('cache_status')) {
    define("cache_status", 0); 
}
if (!defined('cache_path')) {
    define('cache_path', '/tmp/'); 
}
if (!defined('cache_meta_ttl')) {
    define('cache_meta_ttl',86400); // meta of stream cache time in s; defaults to 1 day
}
if (!defined('cache_catalog_ttl')) {
    define('cache_catalog_ttl',3600); // catalog of tag cache time in s; defaults to 1 hour
}
