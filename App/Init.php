<?php

namespace App;

use \SON\Init\Bootstrap;

class Init extends Bootstrap
{
	protected function initRoutes()
	{
		$arrayRoutes['home']  	 = array('route' => '/MVC_Igor/public/', 'controller' => 'index', 'action' => 'index');
		$arrayRoutes['index'] 	 = array('route' => '/MVC_Igor/public/index', 'controller' => 'index', 'action' => 'index');
		$arrayRoutes['sobre'] 	 = array('route' => '/MVC_Igor/public/sobre', 'controller' => 'index', 'action' =>'sobre');
		$arrayRoutes['login']	 = array('route' => '/MVC_Igor/public/login', 'controller' => 'index', 'action' =>'login');
		$arrayRoutes['logar'] 	 = array('route' => '/MVC_Igor/public/logar', 'controller' => 'index', 'action' =>'logar');
		$arrayRoutes['painel']   = array('route' => '/MVC_Igor/public/painel', 'controller' => 'index', 'action' =>'painel');
		$this->setRoutes($arrayRoutes);
	}
}