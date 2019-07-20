<?php
/**
 * Note that phpunit loads the Composer autoload.php for us.
 */

WP_Mock::bootstrap();

include dirname( __DIR__ ) . '/hello.php';
