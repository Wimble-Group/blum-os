<?php

Class Home extends Controller 
{
	function index()
	{
 	 	$data['page_title'] = "BloomOS";
		$data['page'] = "home";
		$this->view("index",$data);
	}
}