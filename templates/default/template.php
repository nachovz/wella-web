<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" href="<?php echo $GLOBALS["baseURL"];?>css/default.css" rel="stylesheet" media="screen">


<?php require_once('cocoasHead.js'); ?>
<?php require_once('templates/head.php'); ?>

<script>
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
</script>
</head>
<body onload="MM_preloadImages('images/home/1_03_03.jpg')">
		<div id="divBackOpaco"></div>
    	<div id="divVideo">
    		<iframe width="420" height="315" src="http://www.youtube.com/embed/40-V1vBRZxQ" frameborder="0" allowfullscreen></iframe>
    	</div>		
		<div id="wrapper">
			<!-- start header -->
		<?php 
			if($_REQUEST['view']== "especialistas=teamartistico" || $_REQUEST['view']== "team"){
				require_once($root.'headerTeam.php');
			}
			else{	
				require_once($root.'header.php');
			} 
		?>
		<!-- end header -->
			
			<!-- start content -->
				<div id="default-content">
				<?php require_once($view); ?>
				</div>
			<!-- end content -->
			
		<?php require_once($root.'footer.php'); ?>
		</div>
</body>
  
<script type="text/javascript" src="<?php echo $GLOBALS["baseURL"];?>js/easySlider1.7.js"></script>

<?php if($_REQUEST['view']== "participantes"): ?>	
<script>
	$(document).ready(function(){	
			$("#slider").easySlider({
				auto: false, 
				continuous: true,
				nextId: "slider1next",
				prevId: "slider1prev"
			});
			//$('#controls li a').html("&nbsp;&nbsp;&nbsp;&nbsp;");
		});	
	
</script>
<?php endif; ?>

<?php if($_REQUEST['view']== "reto=1" || $_REQUEST['view']== "reto=2" || $_REQUEST['view']== "reto=3" || $_REQUEST['view']== "reto=4" || $_REQUEST['view']== "reto=5" || $_REQUEST['view']== "reto=6"): ?>	
<script>
	$(document).ready(function(){	
			$("#slider").easySlider({
				auto: false, 
				continuous: true,
				nextId: "slider1next",
				prevId: "slider1prev"
			});
			//$('#controls li a').html("&nbsp;&nbsp;&nbsp;&nbsp;");
		});	
	
</script>
<?php endif; ?>

<?php if($_REQUEST['view']== "jurados"): ?>	
<script>
	$(document).ready(function(){	
			$("#slider").easySlider({
				auto: false, 
				continuous: true,
				nextId: "slider1next",
				prevId: "slider1prev"
			});
			//$('#controls li a').html("&nbsp;&nbsp;&nbsp;&nbsp;");
		});	
	
</script>
<?php endif; ?>

<?php if($_REQUEST['view']== "especialistas=teamartistico"): ?>	
<script>
	$(document).ready(function(){	
			$("#slider").easySlider({
				auto: false, 
				continuous: true,
				nextId: "slider1next",
				prevId: "slider1prev"
			});
			//$('#controls li a').html("&nbsp;&nbsp;&nbsp;&nbsp;");
		});	
	
</script>
<?php endif; ?>

<?php if($_REQUEST['view']== "especialistas=editorialistas"): ?>	
<script>
	$(document).ready(function(){	
			$("#slider_editorial").easySlider({
				auto: false, 
				continuous: true,
				nextId: "slider_editorial1next",
				prevId: "slider_editorial1prev",
				controlsShow: false
			});
			//$('#controls li a').html("&nbsp;&nbsp;&nbsp;&nbsp;");
		});	
	
</script>
<?php endif; ?>

<?php if($_REQUEST['view']== "team"): ?>	
<script>
	var next = <?php echo $_REQUEST['pg']; ?>;
	$(document).ready(function(){	
			$("#slider").easySlider({
				auto: false, 
				continuous: true,
				nextId: "slider1next",
				prevId: "slider1prev",
				autoNext: next,
			});
			//$('#controls li a').html("&nbsp;&nbsp;&nbsp;&nbsp;");
		});	
	
</script>
<?php endif; ?>


</html>
