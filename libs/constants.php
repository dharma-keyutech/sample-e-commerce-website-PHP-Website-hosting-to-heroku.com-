<?php
/*
 * @author Shahrukh Khan
 * @website http://www.thesoftwareguy.in
 * @facebook https://www.facebook.com/Thesoftwareguy7
 * @twitter https://twitter.com/thesoftwareguy7
 * @googleplus https://plus.google.com/+thesoftwareguyIn
 */

// dont add a trailing / at the end
define('HTTP_SERVER', 'http://localhost');
// add slash / at the end
define('SITE_DIR', '/sample-php-website/');

// database prefix if you use
define('DB_PREFIX', 'mp_');

define('DB_DRIVER', 'postgresql');
define('DB_HOST', 'ec2-34-193-113-223.compute-1.amazonaws.com');
define('port','5432');
define('dbname','d5hmnh8lkipqq6'),
define('DB_HOST_USERNAME', 'gnmsdeujuozclz');
define('DB_HOST_PASSWORD', '14cc6af541402fc35c18a4e3b7af16b70c51e4468131747c391c3f84ed36e018');
//define('DB_DATABASE', 'simple-website');
define('SITE_NAME', 'Simple Website');

// define database tables
define('TABLE_PAGES', DB_PREFIX.'pages');
define('TABLE_TAGLINE', DB_PREFIX.'tagline');
?>
