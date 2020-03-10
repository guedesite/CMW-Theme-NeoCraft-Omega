
<div class="neo-background-cale text-center" >
	<div class="neo-center">
		<div style="width:auto;" class="neo-xbackground neo-xtransforme-2  ">
			<div class="neo-xbackground neo-xtransforme-1 " style="padding:1px;">
				<p class="neo-text-header-small  neo-xtransforme-2" style="margin-top:10px;text-transform: uppercase;"><b><i class="fa fa-shopping-cart"></i> Boutique</b></p>
			</div>
		</div>
	</div>
	<div class="neo-center-small" style="margin-top:10px;">
		<div class="neo-xbackground neo-radius" style="padding:10px;">
			<p style="max-width:50%;" class="neo-text"><center><strong>
			La boutique permet d'acheter du contenu In-Game depuis le site grâce à de l'argent réel, cela sert à payer l'hébergement du serveur.
			La monnaie virtuelle utilisée sur la boutique est le "Jeton". <?php if(isset($_Joueur_)) {  if(isset($_Joueur_['tokens'])) echo ' | Vous avez ' . $_Joueur_['tokens'] . ' <i class="fas fa-gem"></i> 
			 | Votre panier contient '.$_Panier_->compterArticle().($_Panier_->compterArticle()>1 ? ' articles' : ' article'); } ?>
			<br/><?php if(isset($_Joueur_)) {  ?>
			<a href="?&page=token"  class=" neo-button neo-gray">Acheter des Jetons</a>
			<a href="?&page=panier"  class=" neo-button neo-gray">Accéder au panier</a>
			<?php } 
			else
			{ ?>
				<a onclick="document.getElementById('Connection').style.display='block'" class="hvr-bounce-in neo-button neo-gray" ><span class="glyphicon glyphicon-user"></span> connectez vous !</a>
			<?php } ?>
			</strong></center></p>
		</div>
	</div>
</div>

<div class="neo-background-cale" style="margin-top:75px;">
<div class="neo-center">
		<div class="tabbable">
		<div class="neo-xbackground neo-radius" style="padding:10px;">
			<div class="neo-row-padding">
			<?php
			$j = 0;
			while($j < count($categories))
			{
			$categories[$j]['titre'] = str_replace(' ', '_', $categories[$j]['titre']); ?>
			
			 <a href="javascript:void(0)" onclick="openShop(event, 'categorie-<?php echo $j; ?>');">
				<div class="hvr-backward neo-col <?php if($j == 0) { echo 'neo-border-gray'; } ?> tablink neo-bottombar neo-hover-light-grey neo-padding" style="<?php if(count($categories) == 1) { echo 'width:100%'; } elseif(count($categories) == 2) { echo 'width:50%'; } elseif(count($categories) == 3) { echo 'width:33.33%'; } elseif(count($categories) == 4) { echo 'width:25%'; } elseif(count($categories) == 5) { echo 'width:20%'; } elseif(count($categories) == 6) { echo 'width:16.66%'; } elseif(count($categories) == 7) { echo 'width:14.28%'; } elseif(count($categories) == 8) { echo 'width:12.5%'; } elseif(count($categories) == 9) { echo 'width:11.11%'; } elseif(count($categories) == 10) { echo 'width:100%'; } ?>"><?php $categories[$j]['titre'] = str_replace('_', ' ', $categories[$j]['titre']); echo $categories[$j]['titre']; ?></div>
			 </a>
				  
			
			<?php $j++; } ?>
			</div>
		</div>
			<div class="tab-content">
				<?php
				if(isset($categories)) {
				$j = 0;
				while($j < count($categories))
				{
					$categories[$j]['titre'] = str_replace(' ', '_', $categories[$j]['titre']);
				?>
				
				<div id="categorie-<?php echo $j; ?>" class="neo-animate-opacity neo-tabs" style="display:none;">
				<?php $categories[$j]['titre'] = str_replace('_', ' ', $categories[$j]['titre']); ?>
						<div class="panel-body">
							<?php if($categories[$j]['message'] == ""){ ?>
							<?php } else { ?>
							<p>
							<div class="alert alert-dismissable alert-success neo-radius">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<center><?php echo $categories[$j]['message']; ?></center>
							</div>
							</p>
							<?php } ?>
							<div class="row">
							<?php
								foreach($categories as $key => $value)
								{
									$categories[$key]['offres'] == 0;
								}
								for($i = 1; $i <= count($offresTableau); $i++)
								{
									if($offresTableau[$i]['categorie'] == $categories[$j]['id'])
									{
										echo '
											<div class="col-12 col-ms-6 col-lg-6 col-xl-4">
											<div class="neo-card neo-center-simple neo-xbackground neo-radius neo-margin-right-1 neo-margin-left-1" style="margin-bottom:15px;">
											
												<header class="neo-container">
												  <h2 class="neo-text">'. $offresTableau[$i]['nom'] .'</h2>
												</header>
												
												<hr>
												
												<div class="neo-container">
												  <p class="neo-center-simple neo-text">' .$offresTableau[$i]['description']. '</p>
												</div>
												
												<footer class="neo-container">';
												  if(isset($_Joueur_)) 
												  { 
													echo '<a style="width:100%" href="?action=addOffrePanier&offre='. $offresTableau[$i]['id']. '&quantite=1" class="neo-button neo-blue" title="Ajouter directement au panier une unité"><i class="fa fa-cart-arrow-down"></i></a>';
												  }
												  else
												  {  
													echo'<a style="width:100%" onclick="document.getElementById(\'Connection\').style.display=\'block\'" class="neo-button neo-blue" ><span class="glyphicon glyphicon-user"></span> Se connecter</a>'; 
												  }
												  echo'<button style="width:100%" class="neo-button neo-green" >Prix : ' .$offresTableau[$i]['prix']. ' <i class="fas fa-gem"></i></a>
												</footer>
											</div>
											</div>';
										$categories[$j]['offres']++;
									}
								}
							?>
							</div>
							<?php 
							if($categories[$j]['offres'] == 0)
								echo '<div class="alert alert-dismissible alert-danger">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
									<center><strong>Oh zut !</strong> <a href="#" class="alert-link">'.$categories[$key]['titre'].'</a> est encore vide, ré-essayez plus tard !.</center>
								</div>';
							?>
						</div>
					</div>
				<?php $j++; } } else { ?>	
				<center><strong>Oh zut !</strong> il n'y a pas de catégorie, ré-essayez plus tard !.</center>
				<?php } ?>	
			</div>
		</div>						
		</div>						

</div>
