<?php

Class Bloom extends Controller 
{
	function index()
	{
 	 	$data['page_title'] = "Bloom OS";
		$data['page'] = "bloom";
		$this->view("pages/bloom", $data);
	}
}