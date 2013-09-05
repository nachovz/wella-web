<?php
	function currentPage($page){
		if($_GET['view'] === $page) echo 'currentpage';
	}
?>
<div id="header">	
		<a href="<?php setView('inicio'); ?>"><div id="logo"></div></a>		
 		<div id="banner">
			<img src="<?php imageURL();?>home/foto-home_03.png" border="0" />
    	</div>
</div>

	