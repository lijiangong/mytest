<?php
return new \Phalcon\Config([
	'application' => [
		// 'controllersDir' => 'platform/controllers/',
		// 'modelsDir'      => 'platform/models/',
		// 'viewsDir'       => 'platform/views/',
		'pluginsDir'     => APP_PATH . 'plugin',
		// 'formsDir'       => 'usr/forms/',
		'libraryDir'     => APP_PATH . 'library',
		'helperDir'      => APP_PATH . 'helper',
		'dataDir'        => APP_PATH . 'data/',
		'cacheDir'       => ROOT_PATH . 'var/cache',
		'logDir'         => ROOT_PATH . 'var/logs',
		'voltDir'        => ROOT_PATH . 'var/volt',
		'uploadDir'      => ROOT_PATH . '/public/uploads',
		'baseUri'        => '/',
		'masterdomain'   => 'defray.xxkj.tpl',
		'resource_uri'   => 'http://defray.xxkj.tpl/',
	],
	'logger' => [
		'threshold'   => 8,
	],
	'autoload' => [ 
		'helper' => ['string','http'],
	],
	'database' => [
		'activity' => [
			'adapter' => 'Mysql',
			'host' => '192.168.18.21',
			'username' => 'root',
			'password' => '8812345',
			'dbname' => 'youdao_subscribe',
			'charset' => 'utf8',
		],
		'mongodb' => [
			'server'     => "mongodb://192.168.18.21:27017",
			'database'   => 'redpacket'
		],
	],
	'memcache' => [
		'lefttime' => 172800,
		'host' => '192.168.18.21',
		'port' => 11211,
		'persistent' => 0,
		'prefix' => 'QM_',
		'statsKey' => '_PHCM',
	],
	'redis' => [
		'lefttime' => 172800,
		'host' => '192.168.18.21',
		'port' => 6379,
		'persistent' => 0,
		'auth' => 'foobared',
	],
	'beanstalk' => [
		'host' => '192.168.18.21',
		'port' => 11310
	],
	'openAPI' => [
		'domain' => 'api.dev.xxkj.com',
		'notify' => '/tunnel/notify/'
	],
	'cookie' => [
		'encrypt' => true,
		'key' => '003585e12cda936031f2c56d07ba9dd0'
	],
	'cos_api' => [
		'appid'          => '10015520',
		'secret_id'      => 'AKID6QJ8XRrbW2mdpUwrTvZpUH3k3tHu7B8O',
		'secret_key'     => '1NMmCd7qMoxUa1Ioyf0fxSny6rMEAVcE',
		'url'           => '/profile/qcloudauth'
	],
	'platform_api' => [
		'url'            => 'http://apis.l.xxkj.com/callback/qdrp',
	]
]);