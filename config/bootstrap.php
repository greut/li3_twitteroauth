<?php

use lithium\core\libraries;

if (!defined('TWITTEROAUTH_LIBRARY_PATH')) {
	define(
		'TWITTEROAUTH_LIBRARY_PATH',
		LITHIUM_LIBRARY_PATH . '/twitteroauth/twitteroauth'
	);
}

// TODO: lazy loading
require TWITTEROAUTH_LIBRARY_PATH . '/OAuth.php';
require TWITTEROAUTH_LIBRARY_PATH . '/twitteroauth.php';

$name = 'twitteroauth';
$library = Libraries::get($name);

if (empty($library)) {
	Libraries::add($name, array(
		'bootstrap' => false,
		'path' => TWITTEROAUTH_LIBRARY_PATH
	));
}

?>