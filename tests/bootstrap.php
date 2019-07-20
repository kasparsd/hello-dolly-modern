<?php
/**
 * Note that phpunit loads the Composer autoload.php for us.
 */

WP_Mock::bootstrap();

require dirname( __DIR__ ) . '/hello.php';
