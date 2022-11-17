<?php

Class App 
{
	private $controller = "notfound";
	private $method = "index";
	private $params = [];

	public function __construct()
	{
		
		$url = $this->splitURL();

		if ($url === '/') {
			$this->controller = 'home';
		}

		if ($url === '/bloom-os') {
			$this->controller = 'bloom';
		}

		if ($url === '/headset') {
			$this->controller = 'headset';
		}

		if ($url === '/contacts') {
			$this->controller = 'contacts';
		}

		if ($url === '/send') {
			$this->controller = 'send';
		}

		if ($url === 'notfound') {
			$this->controller = 'notfound';
		}

		require "../app/controllers/". $this->controller .".php";

 		$this->controller = new $this->controller;

		$this->params = array_values(explode("/", filter_var(trim($url,"/"),FILTER_SANITIZE_URL)));
		
 		call_user_func_array([$this->controller,$this->method], $this->params);
	}

	private function splitURL()
	{
		$url_part = $_SERVER['REQUEST_URI'];
		$url = isset($url_part) ? $url_part : "notfound";
		return $url;
	}
}