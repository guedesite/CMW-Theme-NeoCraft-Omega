<div class="neo-background-cale text-center" >
	<div class="neo-center">
		<div style="width:auto;" class="neo-xbackground neo-xtransforme-2  ">
			<div class="neo-xbackground neo-xtransforme-1 " style="padding:1px;">
				<p class="neo-text-header-small  neo-xtransforme-2" style="margin-top:10px;text-transform: uppercase;"><b><i class="fa fa-shopping-cart"></i> Achat de Jetons</b></p>
			</div>
		</div>
	</div>
	<div class="neo-center-small" style="margin-top:10px;">
		<div class="neo-xbackground neo-radius" style="padding:10px;">
			<p style="max-width:50%;" class="neo-text"><center><strong>
				<?php if(isset($_Joueur_)) {  if(isset($_Joueur_['tokens'])) echo ' Vous avez ' . $_Joueur_['tokens'] . ' <i class="fas fa-gem"></i> '; } ?>
				<br/><?php if(!isset($_Joueur_)) {  ?>
				<h3 class="neo-text">Vous n'etes pas connecté</h3>
					<a onclick="document.getElementById('Connection').style.display='block'" class="neo-button neo-gray neo-border hvr-bounce-in" ><span class="glyphicon glyphicon-user"></span> connectez vous !</a>
				<?php } ?>
			</strong></center></p>
		</div>
	</div>
</div>
<?php if($_Serveur_['Payement']['paypal'] == true) 
{
?>
			
<div class="neo-background-cale">
	
		<?php if(isset($_GET['success']) AND $_GET['success'] == 'true'){ ?>
		<div class="alert alert-dismissable alert-success neo-radius neo-center-small">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<center>
				Votre code a bien été validé, vous avez été crédité de <?php echo $_GET['tokens']; ?>  Jetons ! 
			</center>
		</div>
		<?php } elseif(isset($_GET['success']) AND $_GET['success'] == 'false'){ ?>
		<div class="alert alert-dismissable alert-success neo-radius neo-center-small">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<center>
					Le code entré est incorrect, vous n'avez pas été crédité...
			</center>
		</div>
		<?php }  ?>
		
	
			<div class="neo-xbackground neo-radius neo-center">

			<h3 class="neo-text"> Payement par PayPal <i class="fab fa-paypal"></i></h3>
			
			</div>
			
			<div  class="alert alert-dismissable alert-success neo-radius neo-center-small">
				<button type="button" class="close" data-dismiss="alert">×</button>
					<center>
						Deux possibilités s'offrent à vous pour les dons, vous pouvez payer par PayPal, soit avec votre compte PayPal soit avec votre Carte Bleu de manière sécurisée depuis le site PayPal (le payement ne s'effectue donc pas sur notre serveur/site). L'avantage de PayPal est que le joueur reçoit plus de Jetons qu'avec un payement téléphonique (qui sont surtaxés).
					</center>
			</div>
			
			<div class="neo-xbackground neo-radius neo-center">
				<?php 
				require_once('controleur/tokens/paypal.php'); 
				?><div class="row">
					<?php
					if(isset($offresTableau))
					{
						for($i = 0; $i < count($offresTableau); $i++)
						{
							echo '
								<div class="text-center col-12 col-ms-6 col-lg-6 col-xl-4" style="margin-bottom:10px;">
								<div class="card">
								  <h5 class="card-header">'. $offresTableau[$i]['nom'] .'</h5>
								  <div class="card-body neo-padding-8">
								  ' .espacement($offresTableau[$i]['description']);
								  if(isset($_Joueur_)) {
									if($lienPaypal[$i] == 'viaMail') {
										require('controleur/paypal/paypalMail.php');
									} else {
										echo '<a href="'. $lienPaypal[$i] .'" class="btn btn-primary">Acheter !</a>';
									}
								  }
								  else
								  {
									  echo '<button href="#" class="btn btn-primary" disabled> Vueilliez vous connectez ...</button>';
								  }
								  echo '<button href="#" class="btn btn-primary" disabled>' .$offresTableau[$i]['prix']. ' €</button>
								  </div>
								</div>
								</div>';
						}
					} else {
						echo '<div style="margin-left: 15px;margin-right: 15px;" class="alert alert-danger"><strong>Aucune offre de payement par paypal n\'est disponible pour le moment...</strong></div>';
					}
						?>
				</div>
			</div>
			
	
		
		
</div>

<?php 
} 

	if($_Serveur_['Payement']['dedipass'] == true)
	{
		?>
		<div class="neo-background-cale">
			<div class="neo-xbackground neo-radius neo-center">
			<h3 class="neo-text"> Paiement par Dedipass <i class="far fa-money-bill-alt"></i></h3>
			</div>
			<div  class="alert alert-dismissable alert-success neo-radius neo-center-small">
				<button type="button" class="close" data-dismiss="alert">×</button>
					<center>
						Vous pouvez payer par Dedipass, vous paierez ainsi avec votre forfait téléphonique, c'est donc un avantage important. D'un autre côté, vous serez déversé de moins de tokens qu'avec un payement paypal (qui sont beaucoup moins taxés).
					</center>
			</div>
			<div class="neo-xbackground neo-radius neo-center neo-padding-16">
				<div data-dedipass="<?=$_Serveur_['Payement']['public_key'];?>" data-dedipass-custom=""></div>	
			</div>
			
		
		
</div>
		<?php
	}
	?>



