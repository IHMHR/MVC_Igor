<?php

namespace App\Controllers;

use SON\Controller\Action;

class Index extends Action
{
	public function index()
	{
		$this->view->nome = array('Igor', 'Martinelli', 'Ramos');
		$this->render(__FUNCTION__);
	}

	public function sobre()
	{
		$this->view->nome = array('Empresa Sobre');
		$this->render(__FUNCTION__);
	}

	public function login()
	{
		$this->render(__FUNCTION__);
	}

	public function logar()
	{
		var_dump($_POST);
		//$this->render(__FUNCTION__);
		$_SESSION['logado'] = true;
	}

	private function painel()
	{
		if ($_SESSION['logado'])
		{
			$this->render(__FUNCTION__);
		}
		else
		{
			$this->login();
		}
	}
}