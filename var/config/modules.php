<?php
// 注册模块
// $application->registerModules(
$modules = [
		'activity'  => [
			'className' => 'QDRP\Activity\Module',
			'path'      => MODULE_PATH . 'activity' . DS . 'Module.php',
			'subdomain'    => 'around',
		],
        'admin'  => [
			'className' => 'QDRP\Admin\Module',
			'path'      => MODULE_PATH . 'admin' . DS . 'Module.php',
			'subdomain'    => 'admin',
		],
	]
;
