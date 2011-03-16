<?php

namespace li3_twitteroauth;
use TwitterOAuth;

class TwitterApps extends \lithium\core\Adaptable
{
	/**
	 * A Collection of the configurations you add through TwitterApps::config().
	 *
	 * @var Collection
	 */
	protected static $_configurations = array();

	public static function get($name) {
		$config = static::config($name);
		return (!isset($config['oauth_token'])) ?
			new TwitterOAuth(
				$config['consumer_key'],
				$config['consumer_secret']
			) :
			new TwitterOAuth(
				$config['consumer_key'],
				$config['consumer_secret'],
				$config['oauth_token'],
				$config['oauth_token_secret']
			);
	}
}