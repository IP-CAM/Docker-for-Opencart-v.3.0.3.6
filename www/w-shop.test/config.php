<?php
// HTTP
define('HTTP_SERVER', 'http://w-shop.test/');

// HTTPS
define('HTTPS_SERVER', 'http://w-shop.test/');

// DIR
define('DIR_APPLICATION', '/var/www/w-shop.test/catalog/');
define('DIR_SYSTEM', '/var/www/w-shop.test/system/');
define('DIR_IMAGE', '/var/www/w-shop.test/image/');
define('DIR_STORAGE', '/var/www/w-shop.test/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mpdo');
define('DB_HOSTNAME', 'mysql');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'opencart3');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');