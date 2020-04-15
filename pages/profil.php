<?php	$getprofil = htmlspecialchars($_GET['profil']);?>

<div class="neo-background-cale text-center" >
		<div class="neo-center">
			<div style="width:auto;" class="neo-xbackground neo-xtransforme-2  ">
				<div class="neo-xbackground neo-xtransforme-1 " style="padding:1px;">
					<p class="neo-text-header-small  neo-xtransforme-2" style="margin-top:10px;text-transform: uppercase;"><b>Profil de <?php echo $getprofil; ?></b></p>
				</div>
			</div>
		</div>
	</div>

<div class="neo-background-cale" >
	<div class="neo-center">
		<div class="tabbable">
			<?php if(isset($_Joueur_) AND $_GET['profil'] == $_Joueur_['pseudo']) { ?>	
				<div class="neo-xbackground neo-radius" style="margin-bottom:10px;">
				<div class="neo-row-padding" style="padding:10px;">
					 <a href="javascript:void(0)" onclick="openShop(event, 'categorie-0');">
						<div class="hvr-backward neo-col neo-border-gray tablink neo-bottombar neo-hover-light-grey neo-padding" style="width:33.33%;">Mes infos</div>
					 </a>
					  <a href="javascript:void(0)" onclick="openShop(event, 'categorie-1');">
						<div class="hvr-backward neo-col tablink neo-bottombar neo-hover-light-grey neo-padding" style="width:33.33%;">Autres</div>
					 </a>
					  <a href="javascript:void(0)" onclick="openShop(event, 'categorie-2');">
						<div class="hvr-backward neo-col tablink neo-bottombar neo-hover-light-grey neo-padding" style="width:33.33%;">Donner des jetons</div>
					 </a>

				</div>
				</div>
				<?php 
				if(isset($_GET['erreur']))
				{
					if($_GET['erreur'] == 1)
						echo '<div class="alert alert-dismissable alert-danger neo-margin-top-1  neo-radius "><button type="button" class="close" data-dismiss="alert">×</button><center>Erreur, l\'email rentré est vide</center></div>';
					elseif($_GET['erreur'] == 2)
						echo '<div class="alert alert-dismissable alert-danger neo-margin-top-1  neo-radius "><button type="button" class="close" data-dismiss="alert">×</button><center>Erreur, un des champs est trop court ( < à 4caractères)</center></div>';
					elseif($_GET['erreur'] == 3)
						echo '<div class="alert alert-dismissable alert-danger neo-margin-top-1  neo-radius "><button type="button" class="close" data-dismiss="alert">×</button><center>Erreur, le mot de passe rentré ne correspond pas à celui associé à votre compte</center></div>';
					elseif($_GET['erreur'] == 4)
						echo '<div class="alert alert-dismissable alert-danger neo-margin-top-1  neo-radius "><button type="button" class="close" data-dismiss="alert">×</button><center>Vous n\'avez pas assez de tokens :( </center></div>';
					elseif($_GET['erreur'] == 5)
						echo '<div class="alert alert-dismissable alert-danger neo-margin-top-1  neo-radius "><button type="button" class="close" data-dismiss="alert">×</button><center>Pseudo inconnu ... </center></div>';
					elseif($_GET['erreur'] == 6)
						echo '<div class="alert alert-dismissable alert-danger neo-margin-top-1  neo-radius "><button type="button" class="close" data-dismiss="alert">×</button><center>Extension non autorisée !</center></div>';
					elseif($_GET['erreur'] == 7)
						echo '<div class="alert alert-dismissable alert-danger neo-margin-top-1  neo-radius "><button type="button" class="close" data-dismiss="alert">×</button><center>Fichier trop volumineux ! Maximum 2Mo</center></div>';
					elseif($_GET['erreur'] == 8)
						echo '<div class="alert alert-dismissable alert-danger neo-margin-top-1  neo-radius "><button type="button" class="close" data-dismiss="alert">×</button><center>Des champs sont manquants !</center></div>';
					else
						echo '<div class="alert alert-dismissable alert-danger neo-margin-top-1  neo-radius "><button type="button" class="close" data-dismiss="alert">×</button><center>Erreur indéterminé</center></div>';
				}
				elseif (isset($_GET['success'])) {
					if($_GET['success'] == 'true')
						echo '<div class="alert alert-dismissable alert-success neo-margin-top-1  neo-radius "><button type="button" class="close" data-dismiss="alert">×</button><center>Vos informations ont bien été changé ! :)</center></div>';
					elseif($_GET['success'] == "jetons")
						echo '<div class="alert alert-dismissable alert-success neo-margin-top-1  neo-radius "><button type="button" class="close" data-dismiss="alert">×</button><center>Vous venez d\'envoyer '.htmlspecialchars($_GET['montant']).' jetons à '.htmlspecialchars($_GET['pseudo']).'</center></div>';
					elseif($_GET['success'] == "image")
						echo '<div class="alert alert-dismissable alert-success neo-margin-top-1  neo-radius "><button type="button" class="close" data-dismiss="alert">×</button><center>Votre photo de profil a été modifiée :D</center></div>';
					elseif($_GET['success'] == "imageRemoved")
						echo '<div class="alert alert-dismissable alert-success neo-margin-top-1  neo-radius "><button type="button" class="close" data-dismiss="alert">×</button><center>Votre photo de profil a été supprimée de nos serveurs.</center></div>';
				}
				?>
				<div class="neo-xbackground neo-radius" style="padding:10px;margin-top:10px;">	
					<div class="tab-content">
						<div id="categorie-0" class="neo-animate-opacity neo-tabs" style="padding:15px;" >
							<div class="row">
								<div class="col-12 col-ms-6 col-lg-6 neo-border-right">
									
									<form method="post" action="?&action=changeProfil" role="form">
									
									
										<label>Pseudo</label>
										<input class="neo-input neo-animate-input" type="text"  value="<?php echo $_Joueur_['pseudo']; ?>" style="width:60%" disabled>
				
										<label style="margin-top:20px;">Mot de Passe</label>
										<input class="neo-input neo-animate-input" type="text" name="mdpAncien" style="width:60%" placeholder="Ancien Mot de Passe">
										<input class="neo-input neo-animate-input" type="text" name="mdpNouveau" style="width:60%" placeholder="Nouveau Mot de Passe">
										<input class="neo-input neo-animate-input" type="text" name="mdpConfirme" style="width:60%" placeholder="Nouveau Mot de Passe">
										
										<label style="margin-top:20px;">Email</label>
										<input class="neo-input neo-animate-input" type="text"  name="email" value="<?php echo $joueurDonnees['email']; ?>" style="width:60%">
										
										 <div class="text-center"><button type="submit" style="width:60%;margin-top:15px;" class="neo-button neo-green">Valider mes changements</button> </div>
									</form>
								</div>
								
								<div class="col-12 col-ms-6 col-lg-6">
									<div class="row">
										<div class="col-md-6">
											<h3 class="header-bloc header-form">Modifier sa photo de profil</h3>
											<form class="form-horizontal" method="post" action="?action=modifImgProfil" role="form" enctype="multipart/form-data">
												<div class="form-group">
													<label for="img-profil" class="control-label">Importer votre image (< 1Mo, jpeg, jpg, png, bmp, ico, gif)</label>
													<input type="file" name="img_profil" required class="form-control-file" id="img-profil">
												</div>
												<div class="form-group">
													<button type="submit" class="neo-button neo-green">Envoyer</button>
												</div>
											</form>
										</div>
										<div class="col-md-6">
											<h3 class="header-bloc">Photo de profil actuelle</h3>
											<?php
											$Img = new ImgProfil($_Joueur_['id']);
											echo "<center><img src='".$Img->getImgToSize(128, $width, $height)."' style='width: ".$width."px; height: ".$height."px;' alt='Profil' /></center>";
											if($Img->modif)
											{
												echo '<center><a class="neo-button neo-red" style="margin-top: 10px;" href="?action=removeImgProfil">Supprimer</a></center>';
											}
											?>
										</div>
									</div>
								</div>
							</div>
								<div class="text-center" style="margin-top:20px;">
									<p>Votre email est actuellement <span style="font-weight: bold;"><?php if($joueurDonnees['show_email'] == 0) echo 'visible Publiquement'; else echo 'Privée'; ?></span></p>
									<a href="?action=modifShowEmail&actuel=<?=$joueurDonnees['show_email'];?>" class="neo-button neo-red">Permuter la visibilitée</a>
								</div>
							
						</div>
						<div id="categorie-1" class="neo-animate-opacity neo-tabs" style="display:none;">
							<form class="form-horizontal" method="post" action="?&action=changeProfilAutres" role="form">
							<div style="margin-left:20%;margin-right:20%;width:60%;">
								<?php foreach($listeReseaux as $value) { ?>
									<label style="margin-top:20px;" ><?=ucfirst($value['nom']);?></label>
									<input class="neo-input " type="text" placeholder="Votre nom d'utilisateur <?=$value['nom'];?>" name="<?=$value['nom'];?>" value="<?php if($joueurDonnees[$value['nom']] != 'inconnu') echo $joueurDonnees[$value['nom']]; ?>" style="width:100%">
								<?php } ?>
								<label style="margin-top:20px;" >Âge</label>
								<input class="neo-input" type="text" min="0" max="99" placeholder="17" name="age" value="<?php if($joueurDonnees['age'] != 'inconnu') echo $joueurDonnees['age']; ?>" style="width:100%">
								<div class="form-group">
									<label for="inputPassword3" class="col-sm-12 text-center control-label">Signature Forum</label>
									<div class="col-md-12 text-center">
										<?php 
											$smileys = getDonnees($bddConnection);
											for($i = 0; $i < count($smileys['symbole']); $i++)
											{
												echo '<a href="javascript:insertAtCaret(\'signature\',\' '.$smileys['symbole'][$i].' \')"><img src="'.$smileys['image'][$i].'" alt="'.$smileys['symbole'][$i].'" title="'.$smileys['symbole'][$i].'" /></a>';
											}
										?>
										<a href="javascript:ajout_text('signature', 'Ecrivez ici ce que vous voulez mettre en gras', 'ce texte sera en gras', 'b')" style="text-decoration: none;" title="gras"><i class="fas fa-bold" aria-hidden="true"></i></a>
										<a href="javascript:ajout_text('signature', 'Ecrivez ici ce que vous voulez mettre en italique', 'ce texte sera en italique', 'i')" style="text-decoration: none;" title="italique"><i class="fas fa-italic"></i></a>
										<a href="javascript:ajout_text('signature', 'Ecrivez ici ce que vous voulez mettre en souligné', 'ce texte sera en souligné', 'u')" style="text-decoration: none;" title="souligné"><i class="fas fa-underline"></i></a>
										<a href="javascript:ajout_text('signature', 'Ecrivez ici ce que vous voulez mettre en barré', 'ce texte sera barré', 's')" style="text-decoration: none;" title="barré"><i class="fas fa-strikethrough"></i></a>
										<a href="javascript:ajout_text('signature', 'Ecrivez ici ce que vous voulez mettre en aligné à gauche', 'ce texte sera aligné à gauche', 'left')" style="text-decoration: none" title="aligné à gauche"><i class="fas fa-align-left"></i></a>
										<a href="javascript:ajout_text('signature', 'Ecrivez ici ce que vous voulez mettre en centré', 'ce texte sera centré', 'center')" style="text-decoration: none" title="centré"><i class="fas fa-align-center"></i></a>
										<a href="javascript:ajout_text('signature', 'Ecrivez ici ce que vous voulez mettre en aligné à droite', 'ce texte sera aligné à droite', 'right')" style="text-decoration: none" title="aligné à droite"><i class="fas fa-align-right"></i></a>
										<a href="javascript:ajout_text('signature', 'Ecrivez ici ce que vous voulez mettre en justifié', 'ce texte sera justifié', 'justify')" style="text-decoration: none" title="justifié"><i class="fas fa-align-justify"></i></a>
										<a href="javascript:ajout_text_complement('signature', 'Ecrivez ici l\'adresse de votre lien', 'https://craftmywebsite.fr/forum', 'url', 'Entrez le titre de votre lien', 'CraftMyWebsite')" style="text-decoration: none" title="lien"><i class="fas fa-link"></i></a>
										<a href="javascript:ajout_text_complement('signature', 'Ecrivez ici l\'adresse de votre image', 'https://craftmywebsite.fr/img/cat6.png', 'img', 'Entrez ici le titre de votre image (laisser vide si vous ne voulez pas compléter', 'Titre')" style="text-decoration: none" title="image"><i class="fas fa-image"></i></a>
										<a href="javascript:ajout_text_complement('signature', 'Ecrivez ici votre texte en couleur', 'Ce texte sera coloré', 'color', 'Entrer le nom de la couleur en anglais ou en hexaécimal avec le  # : http://www.code-couleur.com/', 'red ou #40A497')" style="text-decoration: none" title="couleur"><i class="fas fa-font"></i></a>
										<a href="javascript:ajout_text_complement('signature', 'Ecrivez ici votre message caché', 'contenue du spoiler', 'spoiler', 'Entrer le titre du message caché (si la case est vide le titre sera \'Spoiler\'', 'Spoiler')" style="text-decoration: none" title="spoiler"><i class="fas fa-flag"></i></a>
										<div class="dropdown">
											<a href="#" role="button" id="font" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											 <i class="fas fa-text-height"></i>
											</a>
											<div class="dropdown-menu" aria-labelledby="font">
												<a class="dropdown-item" href="javascript:ajout_text('signature', 'Ecrivez ici ce que vous voulez mettre en taille 2', 'ce texte sera en taille 2', 'font=2')"><span style="font-size: 2em;">2</span></a>
												<a class="dropdown-item" href="javascript:ajout_text('signature', 'Ecrivez ici ce que vous voulez mettre en taille 5', 'ce texte sera en taille 5', 'font=5')"><span style="font-size: 5em;">5</span></a>
											</div>
										</div>
									</div>
									<div >
										<div class="col-sm-12" >
											<textarea name="signature" class="form-control" placeholder="Votre signature" oninput="previewTopic(this);" id="signature"><?php if(isset($joueurDonnees['signature'])) echo $joueurDonnees['signature']; ?></textarea>
										</div>
										<div class="col-sm-12" style="margin-top:10px;">
											<p style="height: auto; width: auto; background-color: white;" id="previewTopic"></p>
										</div> 
									</div>
								  </div>
									 <div class="text-center"><button type="submit" style="width:60%;margin-top:15px;" class="neo-button neo-green">Valider mes changements Falcultatif</button> </div>
								</div>
							</form>			
						</div>
						<div id="categorie-2" class="neo-animate-opacity neo-tabs" style="display:none;">
							<form  method="post" action="?&action=give_jetons" role="form">
							<div style="margin-left:20%;margin-right:20%;width:60%;">
								<label style="margin-top:20px;">Pseudo du receveur</label>
								<input class="neo-input" type="text"  name="pseudo" placeholder="Le nom de la personne a qui vous souhaiter donner des jetons" id="pseudo"  style="width:100%" required>
								
								<label style="margin-top:20px;">Pseudo du receveur</label>
								<input class="neo-input" type="number"  name="montant" placeholder="0"   style="width:100%" required>
			
								<div class="text-center"><button type="submit" style="width:60%;margin-top:15px;" class="neo-button neo-green">Envoyer</button> </div>
							 </div>
							</form>	
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<div class="neo-background-cale" >
	<div class="neo-center">
		<div class="row neo-radius neo-xbackground" >
			<div class="col-12 col-ms-6 col-lg-6" >
				<table class="neo-table neo-striped neo-bordered col-12 col-ms-12">
					<tbody>
						<tr class="neo-light-grey">
							<td>Status</td>
							<td><?php echo $serveurProfil['status']; ?></td>
						</tr>
						<tr class="neo-light-grey">
							<td>Age</td>
							<td><?php echo $joueurDonnees['age']; ?> ans.</td>
						</tr>
						<tr class="neo-light-grey">
							<td>Pseudo</td>
							<td><?php echo htmlspecialchars($getprofil); ?></td>
						</tr>
						<tr class="neo-light-grey">
							<td>Grade Site</td>
							<td><?php echo $gradeSite; ?></td>
						</tr>
						<tr class="neo-light-grey">
							<td>Inscription</td>
							<td><?php echo 'Le '.date('d/m/Y', $joueurDonnees['anciennete']).' &agrave; '.date('H:i:s', $joueurDonnees['anciennete']); ?></td>
						</tr>
						<tr class="neo-light-grey">
							<td>Email</td>
							<td><?php if($joueurDonnees['show_email'] == 0)
								echo $joueurDonnees['email'];
							else
								echo 'inconnue'; ?></td>
						</tr>
							<?php 
							foreach($listeReseaux as $value)
							{
								?><tr class="neo-light-grey">
									<td><?=ucfirst($value['nom']);?></td>
									<td><?=$joueurDonnees[$value['nom']];?></td>
								</tr><?php 
							}
							?>
							<tr class="neo-light-grey">
								<td># votes</td>
								<td>
									<?php require_once("modele/topVotes.class.php");
									$nbreVotes = new TopVotes($bddConnection);
									echo $nbreVotes->getNbreVotes($getprofil);?>
								</td>
							</tr>
					</tbody>
				</table>
			</div>
			<div class="col-12 col-ms-6 col-lg-6">
				<h3 class="header-bloc"><?php echo htmlspecialchars($getprofil); ?></h3>
				<?php $Img = new ImgProfil($joueurDonnees['id']); ?>
				<img src="<?=$Img->getImgToSize(128, $width, $height);?>" style="width: <?=$width;?>px; height: <?=$height;?>px;" alt="<?=htmlspecialchars($getprofil);?>" />
				<img src="<?=$Img->getImgBodyToSize(128, $width, $height);?>" style="width: auto; height: 400px;padding-left: 30%;" alt="" />
			</div>
		</div>
	</div>
</div>