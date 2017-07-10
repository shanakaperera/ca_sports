<?php


define('SERVER_NAME', 'localhost');
// Admin Section Configuration. You can change this value to any name. Will use ?s=name to access the admin
define('ADMIN_PATH', 'admin_section_ca');

// Database Configuration
define('DB_DRIVER', 'amysqli');

//================LAPTOP=====================
// define('DB_HOSTNAME', '127.0.0.1:3306');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', 'nbuser');
//================END LAPTOP=================

//================SEWTECH 2=================
//define('DB_HOSTNAME', '192.168.1.103:3306');
//define('DB_USERNAME', 'root');
//define('DB_PASSWORD', 'nbuser');
//============END  EWTECH 2=================

//================FORT RABBIT=================
define('DB_HOSTNAME', 'custom-ygi3.mysql.us1.frbit.com');
define('DB_USERNAME', 'custom-ygi3');
define('DB_PASSWORD', 'R91HGfk-It3sbiQ7nMtn5n-s');
//============END  FORT RABBIT=================

//define('DB_DATABASE', 'ca_sports');
define('DB_DATABASE', 'custom-ygi3');
define('DB_PREFIX', 'cas_');

define('CACHE_DRIVER', 'file');
// Unique AbanteCart store ID
define('UNIQUE_ID', 'fd3fd3330b2c5ff0caa7817645180df7');
// Encryption key for protecting sensitive information. NOTE: Change of this key will cause a loss of all existing encrypted information!
define('ENCRYPTION_KEY', 'PEE8iv');
