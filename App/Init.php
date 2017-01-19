<?php

namespace App;

class Init
{
	private $routes;

	public function __construct()
	{
		$this->initRoutes();
		$this->run($this->getUrl());
	}

	private function initRoutes()
	{
		$ar['home'] = array('route' => '/MVC_Igor/public/', 'controller' => 'index', 'action' => 'index');
		$ar['index'] = array('route' => '/MVC_Igor/public/index', 'controller' => 'index', 'action' => 'index');
		$ar['sobre'] = array('route' => '/MVC_Igor/public/sobre', 'controller' => 'index', 'action' =>'sobre');
		$this->setRoutes($ar);
	}

	private function setRoutes(array $routes)
	{
		$this->routes = $routes;
	}

	public function getUrl()
	{
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	}

	public function run($url)
	{
		array_walk($this->routes, function($route) use($url) {
			if($url == $route['route'])
			{
				$class = "App\\Controllers\\" . ucfirst($route['controller']);
				$controller = new $class;
				$controller->$route['action']();
			}
		});
	}
}