<?php

namespace SON\Controller;

class Action
{
	protected $view;
	protected $action;

	public function __construct()
	{
		$this->view = new \stdClass();
	}

	public function render($action, $layout = true)
	{
		$this->action = $action;
		if($layout && file_exists('../App/views/layout.html'))
		{
			include_once '../App/views/layout.html';
		}
		else
		{
			$this->content();
		}
	}

	public function content()
	{
		$atual = get_class($this);
		$singleClassName = strtolower(str_replace("App\\Controllers\\", '', $atual));
		include_once '../App/Views/' . $singleClassName . '/' . $this->action . '.html';
	}
}