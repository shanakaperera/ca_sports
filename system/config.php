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

//================HEROKU=================
define('DB_HOSTNAME', 'us-cdbr-iron-east-03.cleardb.net');
define('DB_USERNAME', 'bb11a41c0bf4dd');
define('DB_PASSWORD', '2e8608a3');
//============END  GO DADDY=================

//define('DB_DATABASE', 'ca_sports');
define('DB_DATABASE', 'heroku_9e9deb2cc55d7b3');
define('DB_PREFIX', 'cas_');

define('CACHE_DRIVER', 'file');
// Unique AbanteCart store ID
define('UNIQUE_ID', 'fd3fd3330b2c5ff0caa7817645180df7');
// Encryption key for protecting sensitive information. NOTE: Change of this key will cause a loss of all existing encrypted information!
define('ENCRYPTION_KEY', 'PEE8iv');
