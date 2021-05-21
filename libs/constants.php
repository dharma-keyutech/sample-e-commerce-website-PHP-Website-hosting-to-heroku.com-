<?php
/*
 * @author Shahrukh Khan
 * @website http://www.thesoftwareguy.in
 * @facebook https://www.facebook.com/Thesoftwareguy7
 * @twitter https://twitter.com/thesoftwareguy7
 * @googleplus https://plus.google.com/+thesoftwareguyIn
 */

// dont add a trailing / at the end
define('HTTP_SERVER', 'http://127.0.0.1');
// add slash / at the end
define('SITE_DIR', '/simple-website/');

// database prefix if you use
define('DB_PREFIX', 'mp_');

define('DB_DRIVER', 'd93o93c07vsmp5');
define('DB_HOST', 'ec2-35-170-85-206.compute-1.amazonaws.com');
define('DB_HOST_USERNAME', 'ffxbgbrdudwwrc');
define('DB_HOST_PASSWORD', 'dce41c0c5ceaa4458bfe68998867ca582a5952935c9be96aa7223455d5e8e7e8');
define('DB_DATABASE', 'simple-website');
define('SITE_NAME', 'Simple Website');

// define database tables
define('TABLE_PAGES', DB_PREFIX.'pages');
define('TABLE_TAGLINE', DB_PREFIX.'tagline');
?>
