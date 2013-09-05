<?php 
if(!empty($vars['participantes'])){
	$participantes = $vars['participantes'];
}
?>

<div id="mainContent">
	<div id="slider" class="div_listas">
    	<ul>
        	<!--------------------------- primero ----------------------------->
            <?php $i = 0;
			while ($i<count($participantes)){?>
        	<li>
            <?php for ($x = 0; $x<4; $x++){?>
            	<?php if ($i == count($participantes)){
					break;
					}else{
						$web = $participantes->web[$i]; 
					}?>					
						<div class="participantes">
							<div class="img_part">
								<img src="<?php imageURL(); echo $web->foto?>" border="0" />
							</div>
							<h2><span><?php echo $web->nombre; ?></span> <?php echo $web->apellido; ?></h2>
							<p>
								<b>Estado o  Ciudad:</b> <?php echo $web->estado; ?>
							</p>                 
							<p>
								<b class="twitter">Twitter:</b> <a href="http://www.twitter.com/<?php echo $web->twitter;?>">@<?php echo $web->twitter; ?></a>
							</p>
						</div>
                <?php if ($x != 4){ ?>
                	<div class="div_separador"></div>
               <?php } 
			   $i++;
			   }?>
            </li>
            <?php
				}
			?>
        </ul>
    	
    </div>
	<div class="sub"></div>
</div>