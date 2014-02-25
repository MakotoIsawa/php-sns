<?php

#define('DSN', 'mysql:host=localhost;dbname=dotinstall_sns_php');
define('DSN', 'postgresql:host=localhost;dbname=dotinstall_sns_php');
define('DB_USER', 'dbuser');
define('DB_PASSWORD', 'dbuser');

#define('SITE_URL', 'http://localhost/sns_php/');
define('SITE_URL', 'http://localhost');
define('PASSWORD_KEY', 'xdf8sdf(!sdf');

error_reporting(E_ALL & ~E_NOTICE);

#session_set_cookie_params(0, '/sns_php/');
session_set_cookie_params(0, '');



