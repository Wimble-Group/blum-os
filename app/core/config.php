<?php 

/*set database variables*/
define('DB_TYPE','mysql');
define('DB_NAME','database');
define('DB_USER','root');
define('DB_PASS','');
define('DB_HOST','localhost');

/*protocal type http or https*/
define('PROTOCAL','https');

define('TIMESTAMP', '1668363661');

/*hash*/
define('HASH', 'MDdF)@I#)3asd3223');
define('KEY', 'Admin');

/*mail send*/
define('TO_EMAIL', 'news@bloomreality.com');
define('SITE_EMAIL', 'info@bloomreality.com');

/*root and asset paths*/
$path = str_replace("\\", "/",PROTOCAL ."://" . $_SERVER['SERVER_NAME'] . __DIR__  . "/");

$path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);
define('ROOT', str_replace("/app/core", "", $path));
define('ASSETS', str_replace("app/core", "public/assets", $path));
define('URL', $_SERVER['REQUEST_URI']);
/*debug*/

// var_dump($_SERVER);

/*modern pages */
$pages = ['home', '404'];
define('PAGES', $pages);

define('DEBUG',false);

if(DEBUG)
{
	ini_set("display_errors",1);
}else{
	ini_set("display_errors",0);
}