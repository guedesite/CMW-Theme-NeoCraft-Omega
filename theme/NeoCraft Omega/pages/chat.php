<div class="neo-background-cale text-center" >
	<div class="neo-center">
		<div style="width:auto;" class="neo-xbackground neo-xtransforme-2  ">
			<div class="neo-xbackground neo-xtransforme-1 " style="padding:1px;">
				<p class="neo-text-header-small  neo-xtransforme-2" style="margin-top:10px;text-transform: uppercase;"><b>Chat Minecraft</b></p>
			</div>
		</div>
	</div>
</div>

<div class="neo-background-cale" >
	<div class="neo-center">
		<?php if(count($jsonCon) >0) {
				$Chat = new Chat($jsonCon);?>
				<div class="neo-xbackground neo-radius">
					<div class="neo-row-padding" style="padding:10px;">
					<?php for($i = 0; $i < count($jsonCon); $i++) {?>
						 <a href="javascript:void(0)" onclick="openShop(event, 'categorie-<?php echo $i; ?>');">
							<div class="hvr-backward neo-col <?php if($i == 0) { echo 'neo-border-gray'; } ?> tablink neo-bottombar neo-hover-light-grey neo-padding" style="<?php if(count($jsonCon) == 1) { echo 'width:100%'; } elseif(count($jsonCon) == 2) { echo 'width:50%'; } elseif(count($jsonCon) == 3) { echo 'width:33.33%'; } elseif(count($jsonCon) == 4) { echo 'width:25%'; } elseif(count($jsonCon) == 5) { echo 'width:20%'; } elseif(count($jsonCon) == 6) { echo 'width:16.66%'; } elseif(count($jsonCon) == 7) { echo 'width:14.28%'; } elseif(count($jsonCon) == 8) { echo 'width:12.5%'; } elseif(count($jsonCon) == 9) { echo 'width:11.11%'; } elseif(count($jsonCon) == 10) { echo 'width:100%'; } ?>"><?php echo $lecture['Json'][$i]['nom']; ?></div>
						 </a>
					<?php }?>
					</div>
				</div>
				<div class="neo-xbackground neo-radius" style="padding:10;px;margin-top:20px;">	
				<div class="tab-content" id="messages">
					<?php
				for($i=0; $i < count($jsonCon); $i++)
				{
					$messages = $Chat->getMessages($i);
				?>
					<div id="categorie-<?php echo $i; ?>" class="tab-pane fade <?php if($i==0) echo 'in active show'; ?>" aria-expanded="false">
						<div class="panel-body">
							<?php 
							if($messages != false)
							{
								foreach($messages as $value)
								{
									//var_dump($value);
									$Img = new ImgProfil($value['player'], 'pseudo');

									?>
										<p class="neo-xbackground neo-radius" style="padding:5px;margin-bottom:10px;" ><img class="rounded" src="<?=$Img->getImgToSize(32, $width, $height);?>" style="width: <?=$width;?>px; height: <?=$height;?>px;" alt="avatar de l'auteur" title="<?php echo $value['player']; ?>" /> <?=($value['player'] == '') ? 'Console': $value['player'].', '.$_Forum_->gradeJoueur($value['player']);?> à <span class="font-weight-light"><?=date('H:i:s', $value['time']);?></span> -> <?=$Chat->formattage(htmlspecialchars($value['message']));?></p>
									<?php
								}
							}
							else
								echo '<div class="alert alert-danger">La connexion au serveur n\'a pas pu être établie. :\'(</div>';
							?>
						</div>
					</div>
				<?php 
				}
				?>
				
				</div>
					<?php 
				if(isset($_Joueur_))
				{
					?>
					<form action="?action=sendChat" method="POST">	
						<div class="row" style="margin-top:20px;">
							<div class="col-md-8">
								<input type="text" name="message" placeholder="Votre message ici ! (§ et & pour les couleurs si vous y êtes autorisé)" max="100" class="form-control">
							</div>
							<div class="col-md-2">
								<select name="i" class="form-control">
									<?php 
									for($i=0; $i < count($jsonCon); $i++)
									{
										?><option value="<?=$i;?>"><?=$lecture['Json'][$i]['nom'];?></option><?php 
									}
									?>
								</select>
							</div>
							<div class="col-md-2">
								<button class="neo-button neo-green" type="submit">Envoyer :)</button>
							</div>
						</div>
					</form>
					<?php 
				}
				?>
				</div>
			<?php }
				else
				{ ?>
			<h3 class="text-center">Veuilliez relier votre serveur.</h3>
			<?php } ?>				
	</div>					
</div>					
<script>
	setInterval(AJAXActuChat, 10000);
	function AJAXActuChat()
	{
		<?php for($i = 0; $i < count($jsonCon); $i++)
		{
			?>if($('#categorie-<?=$i;?>').hasClass("active"))
			{
				var active = <?=$i;?>;
			}
			<?php
		}
		?>
		$.ajax({
			url: 'index.php?action=chatActu',
			type: 'POST',
			data: 'ajax=true&active='+active,
			success: function(code, statut){
				$("#messages").html(code);
			}
		});
	}
</script>
