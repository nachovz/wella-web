<?php 
/*Global function to set the view URL*/
function setView($view, $print = true){
	$response = '';
	if($GLOBALS['frendlyURL'] && isset($_SERVER['HTTPS']) ){
		$response = $GLOBALS['secureBaseURL'] . $view;
	}else if($GLOBALS['frendlyURL'] == false && isset($_SERVER['HTTPS']) ){
		$response = $GLOBALS['secureBaseURL'] . 'controller.php?view=' . $view;
	}else if ($GLOBALS['frendlyURL']){
		$response = $GLOBALS['baseURL'] . $view;
	}else{
		$response = $GLOBALS['baseURL'] . 'controller.php?view=' . $view;
	}
	
	if($print) echo($response); else return($response);
}
/*Global function to set the panel URL*/
function setPanel($view, $print = true){
	$response = '';
	if($GLOBALS['frendlyURL']){
		$response = $GLOBALS['baseURL'] . 'panel/' . $view;
	}else{
		$response = $GLOBALS['baseURL'] . 'controller.php?panel=' . $view;
	}
	
	if($print) echo($response); else return ($response);
};
/*This function returns the URL to images dir*/
function imageURL(){echo ($GLOBALS['baseURL'] . 'images/');}

function setImage($img){echo ($GLOBALS['baseURL'] . 'images/' . $img);}
?>