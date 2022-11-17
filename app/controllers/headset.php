<?php

Class Headset extends Controller 
{
	function index()
	{
 	 	$data['page_title'] = "Headset";
		$data['page'] = "headset";
		$this->view("pages/headset", $data);
	}
}