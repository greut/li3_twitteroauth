# li3_twitteroauth

## Description

This plugin integrates the Abraham's TwitterOAuth library to Lithium (Li3).

## Dependencies

This library requires https://github.com/abraham/twitteroauth

## Installation

1. Install Abraham's Twitter OAuth library into `libraries/_source/twitteroauth`

2. Symlink _source/twitteroauth/src to libraries/TwitterOAuth

3. To enable the library add the following to `app/config/bootstrap/libraries.php`:

	```php
	Libraries::add('li3_twitteroauth');
	```

## Configuration

1. Configure TwitterOAuth in `app/config/bootstrap/twitteroauth.php`:

    ```php
	use li3_twitteroauth\TwitterOAuth;

	TwitterOAuth::config(['default' => [
		'consumer_key'         => /* consumer key */,
		'consumer_secret'      => /* consumer secret */,
		//'oauth_token'        => /* oauth token */,
		//'oauth_token_secret' => /* oauth token secret */
	]];
    ```

3. Update `app/config/bootstrap.php` to include this new configuration file:

    ```php
    /**
     * Include this file to enable TwitterOAuth.
     */
    require __DIR__ . '/bootstrap/twitteroauth.php';
    ```

4. You can now use TwitterOAuth in your application:

    ```php
    use li3_twitteroauth\TwitterOAuth;
    ```

## Usage

Here is a basic usage to get the connection object.

```php
use li3_twitteroauth\TwitterOAuth;

$twitter = TwitterOAuth::get('default');
```

## More documentation

Everything else should be part of @abraham's library. Find its documentation [here](https://twitteroauth.com).

## Notes

If you would prefer to bootstrap Abraham's TwitterOAuth library manually you can to the following:

```php
Libraries::add('TwitterOAuth', ['prefix' => "Abraham\\TwitterOAuth\\"]);
Libraries::add('li3_twitteroauth', ['bootstrap' => false]);
```

This will allow you to symlink Abraham's TwitterOAuth library how ever you choose.