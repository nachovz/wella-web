<?php
	function currentPage($page){
		if($_GET['view'] === $page) echo 'currentpage';
	}
?>
<div id="header_default">	
		<a href="Javascript:void(0);"><div id="logo_header"></div></a>	
        <ul id="menuHeaderLinksTm">
				<li class="elemMenuHeaderLinks <?php currentPage('especialistas=teamartistico'); ?> <?php currentPage('team'); ?>">
					<a href="<?php setView('especialistas=teamartistico'); ?>"><strong>TEAM ARTISTICO</strong> WELLA</a>
				</li>
		</ul>	
 </div>
<div style="clear:both"></div>
	