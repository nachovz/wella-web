<?php
	function currentPage($page){
		if($_GET['view'] === $page) echo 'currentpage';
	}
?>
<div id="header">	
		<a href="<?php setView('inicio'); ?>"><div id="logo"></div></a>		
 		<div id="banner">
			<img src="<?php imageURL();?>home/home-banner.jpg" border="0" />
    	</div>
</div>

	