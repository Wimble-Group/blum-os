<?php

Class Contacts extends Controller 
{
	function index()
	{
 	 	$data['page_title'] = "Contacts";
		$data['page'] = "contacts";
		$this->view("pages/contacts",$data);
	}
}