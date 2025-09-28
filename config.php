<?php
// Fix: Ensure no whitespace or output before this opening tag.

// Manifest Config
$config['id'] = "live.indian.tv";
$config['description'] = "Watch Indian Live TV channels from many sources. Some of them works only on Indian IP's as the content provided is Indian.";
$config['name'] = "Indian Live TV";
$config['icon'] = "https://www.materialui.co/materialIcons/notification/live_tv_black_192x192.png";
$config['version'] = "1.0.0";

// Cache Settings
// Fix 1: Wrap definitions in if(!defined()) to prevent "already defined" warnings.
// Fix 2: Use the Vercel-friendly /tmp/ path for cache_path.
if (!defined('cache_status')) {
    define("cache_status", 0); 
}

if (!defined('cache_path')) {
    // Using '/tmp/' is the best practice for a writable temporary directory on Vercel/Serverless
    define('cache_path', '/tmp/'); 
}

if (!defined('cache_meta_ttl')) {
    define('cache_meta_ttl',86400); // meta of stream cache time in s; defaults to 1 day
}

if (!defined('cache_catalog_ttl')) {
    define('cache_catalog_ttl',3600); // catalog of tag cache time in s; defaults to 1 hour
}

// Fix 3: Omit the closing PHP tag (?>) to prevent accidental output/whitespace
// which causes the "Cannot modify header information" warning.
