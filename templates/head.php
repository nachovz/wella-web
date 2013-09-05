
<!--
Below goes all the head import definitions before
start rendering de content view.
-->
<?php if(isset($_REQUEST['view'])) { 
	switch($_REQUEST['view']){
		case 'inicio': ?>
			<title>Wella's Stage Trend Vision Award 2012 | Inicio</title> 

	<?php 	break;	
		case 'participantes': ?>
			<title>Wella's Stage Trend Vision Award 2012 | Participantes</title> 
			

	<?php 	break;		
		case 'reto=1': ?>
			<title>Wella's Stage Trend Vision Award 2012 | Retos</title> 
    <?php 	break;		
		case 'reto=2': ?>
			<title>Wella's Stage Trend Vision Award 2012 | Retos</title> 
    <?php 	break;		
		case 'reto=3': ?>
			<title>Wella's Stage Trend Vision Award 2012 | Retos</title> 
     <?php 	break;		
		case 'reto=4': ?>
			<title>Wella's Stage Trend Vision Award 2012 | Retos</title> 
     <?php 	break;		
		case 'reto=4': ?>
			<title>Wella's Stage Trend Vision Award 2012 | Retos</title> 
			
    <?php 	break;		
		case 'trendvision': ?>
			<title>Wella's Stage Trend Vision Award 2012 | Trend Vision</title> 
           
	<?php 	break;		
		case 'especialistas=teamartistico': ?>
			<title>Wella's Stage Trend Vision Award 2012 | Especialistas</title> 
    <?php 	break;		
		case 'especialistas=editorialistas': ?>
			<title>Wella's Stage Trend Vision Award 2012 | Especialistas</title> 
    <?php 	break;		
		case 'team': ?>
			<title>Wella's Stage Trend Vision Award 2012 | Team Artístico</title> 
     <?php 	break;		
		case 'editorialistas': ?>
			<title>Wella's Stage Trend Vision Award 2012 | Editorialistas</title>       

	<?php 	break;		
		default: ?>
		  <title>Wella's Stage Trend Vision Award 2012</title>
		  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php } ?>
	
  <?php if($_REQUEST['view']==$GLOBALS["LOGIN_VIEW"] || $_REQUEST['view']==$GLOBALS["SIGNUP_VIEW"] || $_REQUEST['view']==$GLOBALS["CHANGE_PASSWORD_VIEW"]){ ?>
  	<script type="text/javascript" src="js/sha1.js"></script>
  <?php } ?>

<?php } ?>
