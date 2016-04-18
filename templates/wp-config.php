<?php

define('DB_NAME', '{{ wp_mysql_database }}');

define('DB_USER', '{{ wp_mysql_user }}');

define('DB_PASSWORD', '{{ wp_mysql_password }}');

define('DB_HOST', '{{ wp_mysql_host }}');

define('DB_CHARSET', 'utf8');

define('DB_COLLATE', '');

// Determine HTTP or HTTPS, then set WP_SITEURL and WP_HOME
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443)
{
    $protocol_to_use = 'https://';
} else {
    $protocol_to_use = 'http://';
}
define('WP_SITEURL', $protocol_to_use . $_SERVER['HTTP_HOST']);
define('WP_HOME', $protocol_to_use . $_SERVER['HTTP_HOST']);

// Multi Site
define('WP_ALLOW_MULTISITE', {{ wp_allow_multisite }});

define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

$table_prefix  = 'wp_';

define('WP_DEBUG', false);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
