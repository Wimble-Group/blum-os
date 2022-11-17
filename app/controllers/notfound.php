<?php

Class Notfound extends Controller 
{
	function index()
	{   
 	 	$data['page_title'] = "Page Not Found";
		  $data['page'] = '404';
		$this->view("404",$data);
	}

}