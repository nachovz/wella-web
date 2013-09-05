<?php
	function currentPage($page){
		if($_GET['view'] === $page) echo 'currentpage';
	}
?>
<div id="header_default">	
		<a href="<?php setView('inicio'); ?>"><div id="logo_header"></div></a>	
        <ul id="menuHeaderLinks">			
				<li class="elemMenuHeaderLinks_title <?php currentPage('trendvision'); ?>"><a href="<?php setView('trendvision'); ?>"><span>TREND VISION</span> VENEZUELA 2012</a></li>
                <li class="elemMenuHeaderSeparador"><div class="separador"></li>
				<li class="elemMenuHeaderLinks <?php currentPage('participantes'); ?>"><a href="<?php setView('participantes'); ?>">PARTICIPANTES</a></li>
                <li class="elemMenuHeaderSeparador"><div class="separador"></li>
				<li class="elemMenuHeaderLinks <?php currentPage('reto=1'); ?> <?php currentPage('reto=2'); ?> <?php currentPage('reto=3'); ?> <?php currentPage('reto=4'); ?> <?php currentPage('reto=5'); ?>"><a href="javascript: void(0);">RETOS</a>
                <ul class="grayli">
                	<li class="link"><a href="<?php setView('reto=1'); ?>">1</a></li>
                    <li><div class="separa_sub"></li>
                    <li class="link"><a href="<?php setView('reto=2'); ?>">2</a></li>
                     <li><div class="separa_sub"></li>
                    <li class="link"><a href="<?php setView('reto=3'); ?>">3</a></li>
                     <li><div class="separa_sub"></li>
                    <li class="link"><a href="<?php setView('reto=4'); ?>">4</a></li>
                     <li><div class="separa_sub"></li>
                    <li class="link"><a href="<?php setView('reto=5'); ?>">5</a></li>
                    <li><div class="separa_sub"></li>
                    <li class="link"><a href="<?php setView('reto=6'); ?>">6</a></li>
                </ul>
                </li>	
                <li class="elemMenuHeaderSeparador"><div class="separador"></li>		
				<li class="elemMenuHeaderLinks <?php currentPage('vota'); ?>"><a href="<?php setView('vota'); ?>">VOTA</a></li>
                <li class="elemMenuHeaderSeparador"><div class="separador"></li>
                <li class="elemMenuHeaderLinks twoLines <?php currentPage('terminos_condiciones'); ?>"><a href="<?php setView('terminos_condiciones'); ?>">TERMINOS <br> Y CONDICIONES</a></li>
		</ul>
        <div class="sub_header"></div>	
 </div>
<div style="clear:both"></div>
	