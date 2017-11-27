<?php
use \Phalcon\Mvc\Router;
use \Phalcon\Mvc\Router\Group as RouterGroup;
$router = new Router(true);
$router->setDefaultModule(CUR_MODULE_NAME);
// $router->setDefaultNamespace("JMGApp\Attn\Controllers");
// URI_SOURCE_GET_URL
// $router->setUriSource(Router::URI_SOURCE_SERVER_REQUEST_URI);
$router->setUriSource(Router::URI_SOURCE_GET_URL);
$router->removeExtraSlashes(true);
/*$router->add('/', array(
	"controller"=>'index',
	"action"=>'index'
));*/

$moduluename = ucfirst(CUR_MODULE_NAME);
// $namespace = 'QDRP\Controller' . "\\" . $moduluename;
$namespace = "QDRP\\{$moduluename}\\Controller";
$router->add('/', array(
	'namespace'  => $namespace,
	'controller' => 'Reservation',
	'action' => 'list'
));
$router->add('/:controller/:action/:params', array(
	'namespace'  => $namespace,
	'controller' => 1,
	'action'	 => 2,
	'params'	 => 3
));
$router->add('/:controller/:action', array(
	'namespace'  => $namespace,
	'controller' => 1,
	'action'	 => 2
));
$router->add('/:controller', array(
	'namespace'  => $namespace,
	'controller' => 1,
	'action' => 'index'
));
$router->add('/', array(
	'namespace'  => $namespace,
	'controller' => 'index',
	'action' => 'index'
));

return $router;