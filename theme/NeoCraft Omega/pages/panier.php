<?php if(isset($_Joueur_)){?>
<div class="neo-background-cale text-center" >
	<div class="neo-center">
		<div style="width:auto;" class="neo-xbackground neo-xtransforme-2  ">
			<div class="neo-xbackground neo-xtransforme-1 " style="padding:1px;">
				<p class="neo-text-header-small  neo-xtransforme-2" style="margin-top:10px;text-transform: uppercase;"><b><i class="fa fa-shopping-basket"></i> Panier</b></p>
			</div>
		</div>
	</div>

</div>

<div class="neo-background-cale neo-center-simple" >
		<?php if(isset($_GET['success']) && $_GET['success'] == 'true') { ?>
	
			<p>
				<div class="alert alert-dismissable alert-success neo-radius neo-center-small">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<center>Votre achat a été effectué !</center>
				</div>
			</p>
							
        <?php } ?>

	<div class="neo-center neo-radius neo-padding-16 neo-xbackground neo-container neo-responsive">
		<table class="neo-table-all ">
			<thead>
				<tr class="neo-light-grey">
					<th>Item/Grade</th>
					<th>Description</th>
					<th>Quantite</th>
					<th>Prix Unitaire</th>
					<th>Sous-Total</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
            	<?php $nbArticles = $_Panier_->compterArticle();
                $precedent = 0;
            	if($nbArticles == 0 )
            		echo '<tr><td colspan="6"><center>Votre panier est vide :\'( </center></td></tr>';
            	else
            	{
	            	for($i = 0; $i < $nbArticles; $i++)
	            	{
	            		?>
	            		<tr class="neo-white">
		                    <td class="neo-border neo-center"><?php $_Panier_->infosArticle(htmlspecialchars($_SESSION['panier']['id'][$i]), $nom, $infos); echo $nom; ?></td>
		                    <td class="neo-border neo-center"><?php echo $infos; ?></td>
		                    <td class="neo-border neo-center"><?php echo htmlspecialchars($_SESSION['panier']['quantite'][$i]); ?></td>
		                    <td class="w-25 neo-border text-center"><?php echo htmlspecialchars($_SESSION['panier']['prix'][$i]); ?> <i class="fas fa-gem"></i></td>
		                    <td class="w-25 neo-border text-center"><?php $precedent += htmlspecialchars($_SESSION['panier']['prix'][$i])*htmlspecialchars($_SESSION['panier']['quantite'][$i]);
		                    echo $precedent; ?> <i class="fas fa-gem"></i></td>
                            <td class="neo-border neo-center"><a href="?action=supprItemPanier&id=<?php echo htmlspecialchars($_SESSION['panier']['id'][$i]); ?>" class="btn btn-danger link" title="supprimer l'item du panier"><i class="fa fa-trash"></i></a></td>
		                </tr>
		               <?php
		            } 
                    if(!empty($_SESSION['panier']['reduction']))
                    {
                        echo '<tr><td>'.htmlspecialchars($_SESSION['panier']['code']).'</td><td>'.htmlspecialchars($_SESSION['panier']['reduction_titre']).'</td><td>1</td><td class="w-25 text-center">-'. $_SESSION['panier']['reduction']*100 .'%</td><td></td><td><a href="?action=retirerReduction" class="btn btn-danger link" title="supprimer la réduction"><i class="fa fa-trash"></i></a></td></tr>';
                    }
		        }
		        ?>
		        <tr class="neo-light-grey"> 
		        	<td class="neo-border">Total:</td>
		        	<td class="w-25 text-center neo-border" colspan="5"><?php echo number_format($_Panier_->montantGlobal(), 0, ',', ' '); ?> <i class="fas fa-gem"></i></td>
		        </tr>
            </tbody>
        </table>

		<div class="row neo-margin-top-1">
			<div class="col-12 col-ms-5 col-lg-5 col-xl-5">
			<form action="?action=ajouterCode" method="POST">
				<div class="input-group mb-3">
				  <input type="text" class="form-control" id="codepromo" name="codepromo" placeholder="Code promo" required>
				  <div class="input-group-append">
					<button class="btn btn-primary"  type="submit">envoyer</button>
				  </div>
			    </div>
				</form>
			</div>
			<div class="col-12 col-ms-2 col-lg-2 col-xl-2">
				<div style="width:100%;"> </div>
			</div>
			<div class="col-12 col-ms-5 col-lg-5 col-xl-5">
			<form action="?action=achat" method="POST">
				<div class="input-group mb-3">
				  <input type="text" class="form-control" id="input-pseudo" placeholder="Votre pseudo" required>
				  <div class="input-group-append">
					<button class="btn btn-primary"  type="submit">Acheter !</button>
					<button class="btn btn-danger" OnClick="window.location.href = '?action=viderPanier';" type="button">Vider</button>
				  </div>
				</div>
			</form>
			</div>
		</div>

		
	
	</div>
</div>
<?php }else{ header('Location: ?page=boutique'); }?>