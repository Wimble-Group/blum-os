<?php

Class Privacy extends Controller 
{
	function index()
	{
 	 	$data['page_title'] = "Privacy";
		  $data['page'] = "privacy";
		$this->view("pages/privacy",$data);
	}
}