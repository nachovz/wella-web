<?php

////////////////////////////////////////////////
// GLOBAL DEFINITIONS OF THE PROYECT          //
////////////////////////////////////////////////

/*--------THIS ARE THE MANDATORY DEFINITIONS----------*/

$GLOBALS["LOGIN_VIEW"]    = "login";
$GLOBALS["SIGNUP_VIEW"]   = "signup";
$GLOBALS["CHANGE_PASSWORD_VIEW"]   = "change-password";
$GLOBALS["PRIVATE_VIEW"]  = "private";
$GLOBALS["DEFAULT_VIEW"]  = "inicio";  //The logic name for the deault view that has to be showed in the start page
$GLOBALS["DEFAULT_PANEL"] = "";

$GLOBALS["DEFAULT_USER"] = "anonymus";

/*--------END OF THE MANDATORY DEFINITIONS----------*/


/*--------THIS ARE THE SECURITY DEFINITIONS----------*/

$GLOBALS["DEFAULT_ROLE"]    = "invalid";
$GLOBALS["DEFAULT_ROLE_ID"] = "1";
$GLOBALS["PENDING_VIEW"]    = "validate";

/*--------END OF THE MANDATORY DEFINITIONS----------*/

/*--------THIS ARE THE MYSQL CONECTION DEFINITIONS----------*/
//
$GLOBALS["dbServer"]   = "";
$GLOBALS["dbName"]     = "";
$GLOBALS["dbUser"]     = "";
$GLOBALS["dbPassword"] = "";
$GLOBALS["doctrineConnection"] = "";

//$GLOBALS["dbServer"]   = "localhost";
//$GLOBALS["dbName"]     = "ivoted";
//$GLOBALS["dbUser"]     = "root";
//$GLOBALS["dbPassword"] = "zL3hFu8y";

/*--------END OF THE MYSQL CONECTION DEFINITIONS----------*/

/*--------THIS ARE THE OPTIONAL DEFINITIONS----------*/

//Here are the global var to edit the keywords, description and language metatags of the proyect

$GLOBALS["keywords"]    = "1,2,3,4,5";
$GLOBALS["description"] = "stc solutions developers main page";
$GLOBALS["language"]    = "spanish";

//for developing use, if you set this var to "true" errors and aditional information will be showed

$GLOBALS["showViewHierarchy"] = false;
$GLOBALS["showRoleHierarchy"] = false;
$GLOBALS["BDLazyMode"]        = false;

/*--------END OF THE OPTIONAL DEFINITIONS----------*/

/*--------THIS ARE THE ERROR REPORTING DEFINITIONS----------*/

$GLOBALS["debugMode"]  = false;
$GLOBALS["logErrors"]  = false;
$GLOBALS["mailErrors"] = false;

$GLOBALS["error_mailHost"]     = "mail.domain.com";
$GLOBALS["error_mailUserName"] = "user+domain.com";
$GLOBALS["error_mailPasswors"] = "password";
$GLOBALS["error_mailAccount"]  = "aalejo@gmail.com";

/*--------FRENDLY URL DEFINITIONS----------*/

$GLOBALS["frendlyURL"] = true;
/*--------FRENDLY URL DEFINITIONS----------*/
//$local = $_SERVER['REMOTE_ADDR'] === '127.0.0.1';
//if($local):
	$GLOBALS["baseURL"] = "http://apps.cuevasocial.com/concurso/web/";//http://localhost/wella-web/";
	$GLOBALS["secureBaseURL"] = "https://apps.cuevasocial.com/concurso/web/";
	$GLOBALS["wellaAppURL"] = "http://apps.cuevasocial.com/concurso/app/";
	$GLOBALS["secureWellaAppURL"] = "https://apps.cuevasocial.com/concurso/app/";
//else:
//	$GLOBALS["baseURL"] = "http://geekies.co/wella/";
//	$GLOBALS["secureBaseURL"] = "https://geekies.co/wella/";
//endif;


/*----------GLOBAL FUNCTIONS-----------*/
require_once('global-functions.php');

?>
