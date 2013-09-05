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
<script>
	function openWd(){
		$("#divBackOpaco").show("fast", function(){
			$("#divVideo").show("fast");
		});
	}
	function closeWd(){
		$("#divVideo").hide("fast", function(){
			$("#divBackOpaco").hide("fast");
		});
	}
</script>
</head>
<body onload="MM_preloadImages('images/home/1_03_03.jpg')">
		<div id="divBackOpaco"></div>
    	<div id="divVideo">
    		<div style="font-size: 12px; overflow: hidden; width: 440px;">
    			<div style="margin-right: 5px; float: right; width: 47px; margin-top: 3px;">
    				<a href="javascript:void(0);" onclick="closeWd();" >Cerrar X</a>
    			</div>
    		</div>
    		<div style="width: 425px; overflow: hidden; margin: 5px auto;">
    			<!--iframe width="420" height="315" src="http://www.youtube.com/embed/40-V1vBRZxQ?rel=0&egm=1&loop=1" frameborder="0" allowfullscreen></iframe-->
    			<object width="420" height="315">
    				<param name="movie" value="https://www.youtube.com/v/40-V1vBRZxQ?version=3&amp;hl=es_MX&amp;rel=0"></param>
    				<param name="allowFullScreen" value="true"></param>
    				<param name="allowscriptaccess" value="always"></param>
    				<embed src="https://www.youtube.com/v/40-V1vBRZxQ?version=3&amp;hl=es_MX&amp;rel=0" type="application/x-shockwave-flash" width="420" height="315" allowscriptaccess="always" allowfullscreen="true"></embed>
    			</object>
    		</div>
    	</div>	<!--Coemnto algo-->	
		<div id="wrapper">
			<!-- start header -->
		<?php require_once($root.'header.php'); ?>
		<!-- end header -->
			
			<!-- start content -->
				
				<?php require_once($view); ?>
				
			<!-- end content -->
			
		<?php require_once($root.'footer.php'); ?>
		</div>
</body>
</html>
