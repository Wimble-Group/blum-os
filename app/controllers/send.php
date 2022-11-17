<?php

Class Send extends Controller 
{
	function index()
	{   
        if(isset($_POST['emails'])) {
			$email = $_POST['emails'];
            send_mail($email);
		}
	}

}