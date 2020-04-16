
<input type="text" class="hidden neo-hide" value="<?php echo $_Serveur_['General']['ipTexte']; ?>" id="neo-copy-ip">

<div class="neo-background-cale" >
	<div class="neo-row-padding neo-hide-large">	
		<div class="neo-quarter">	
			<div class="neo-row-padding">	
				<div class="neo-third neo-hover-opacity hvr-float-shadow" style="margin-top:5px;">	
					<div class="neo-transforme-2 neo-xbackground neo-border  neo-center-simple " style="padding:10px;width:auto;">	
						<i class="fas fa-user" style="font-size:75px;"></i>
					</div>	
				</div>	
				<div class="neo-twothird neo-hover-opacity hvr-float-shadow">	
					<div class="neo-transforme-2 neo-xbackground neo-border " style="padding:5px;">	<div style="margin-bottom:-10">
						<a href="javascript:void(0)" onclick="document.getElementById('PlayerModal').style.display='block'; $('#neo-joueur-list').load('theme/<?php echo $_Serveur_['General']['theme']; ?>/list.php'); " ><p style="font-size:20px;" class="neo-color neo-text"><?php echo $playeronline.' / '.$maxPlayers; ?>  en ligne</p></a>
						<p class="neo-color neo-text" style="font-size:25px;"><?php $req = $bddConnection->query('SELECT COUNT(id) AS count FROM cmw_users'); $fetch = $req->fetch(); echo $fetch['count']; ?> enregistrés !</p>
					</div>
					</div>
				</div>
			</div>	
		</div>	
		<div class="neo-half" style="margin-top:-10px;">
			<?php if($_Theme_['accueil']['-titre'] != 'true') { ?><p style="width:84%;" class="neo-margin-right-8 neo-margin-left-8 hvr-bounce-in neo-center-simple  neo-text-header-big"><?php echo $_Serveur_['General']['name']; ?></p>	
			<?php } else { ?><img style="width:84%;" class="neo-margin-right-8 neo-margin-left-8 hvr-bounce-in "src="theme/<?php echo $_Serveur_['General']['theme']; ?>/img/serveur.png" alt=""><?php } ?>
			<div class="neo-hover-opacity hvr-float-shadow "  style="width:100%">
				<div class="neo-xbackground neo-xtransforme-2 <?php if($_Theme_['general']['-titre'] != 'true') { echo 'neo-margin-top-2'; } else { echo 'neo-margin-top-10'; }?>" >
					<div class="neo-xbackground neo-xtransforme-1 " style="padding:1px;">
						<p class="neo-xtransforme-2 text-center" style="margin-top:10px;text-transform: uppercase;" ><b><?php if($_Theme_['mod']['-mod'] != 'true') { echo '<a onclick="CopyIp()" class="neo-text-header-small" href="javascript:void(0)">'.( !empty($_Serveur_['General']['ipTexte']) ? $_Serveur_['General']['ipTexte'] : 'Adresse inexistante !').'</a>'; } else { ?><a href="javascript:void(0)"  class="neo-text-header-small" onclick="document.getElementById('mod').style.display='block'">Télécharger le launcher</a><?php } ?></b></p>
					</div>
				</div>
			</div>
		</div>	
		<div class="neo-quarter">	
			<div class="neo-row-padding">	
				<div class="neo-twothird neo-hover-opacity hvr-float-shadow">	
					<div class="neo-transforme-1 neo-xbackground neo-border" style="padding:5px;">	<div style="margin-bottom:-10">
						<p style="font-size:20px;" class="neo-color neo-text">Meilleur voteur :</p>
						<a href="?page=profil&profil=<?php echo $topVoteurs[0]['pseudo']; ?>" ><p class="neo-color neo-text" style="font-size:25px;"><?php echo $topVoteurs[0]['pseudo']; ?></p></a>
					</div></div>
				</div>
				<div class="neo-third neo-hover-opacity hvr-float-shadow" style="margin-top:5px;">	
					<div class=" neo-transforme-1 neo-xbackground neo-border neo-center-simple w3-content" style="padding:10px;width:auto;">	
						<i class="fas fa-trophy" style="font-size:75px;"></i>
					</div>
				</div>
			</div>	
		</div>	
	</div>		
	



	<div class="neo-center-simple neo-show-large neo-margin-right-5 neo-margin-left-5">
		<?php if($_Theme_['accueil']['-titre'] != 'true') { ?><p style="width:84%;" class="neo-text-header-big neo-margin-right-8 neo-margin-left-8 hvr-bounce-in neo-center-simple "><?php echo $_Serveur_['General']['name']; ?></p>	
			<?php } else { ?><img style="width:84%;" class="neo-margin-right-8 neo-margin-left-8 hvr-bounce-in "src="theme/<?php echo $_Serveur_['General']['theme']; ?>/img/serveur.png" alt=""><?php } ?>
			<div class="neo-hover-opacity hvr-float-shadow "  style="width:100%">
				<div class="neo-xbackground neo-xtransforme-2 <?php if($_Theme_['general']['-titre'] != 'true') { echo 'neo-margin-top-2'; } else { echo 'neo-margin-top-10'; }?>" >
					<div class="neo-xbackground neo-xtransforme-1 " style="padding:1px;">
						<p class=" neo-xtransforme-2 text-center" style="margin-top:10px;text-transform: uppercase;" ><b><?php if($_Theme_['mod']['-mod'] != 'true') { echo '<a class="neo-text-header-small" onclick="CopyIp()" href="javascript:void(0)">'.$_Serveur_['General']['ipTexte'].'</a>'; } else { ?><a class="neo-text-header-small" href="javascript:void(0)" onclick="document.getElementById('mod').style.display='block'">Télécharger le launcher</a><?php } ?></b></p>
					</div>
				</div>
			</div>
	
	</div>
</div>

 <?php if(!empty($lectureAccueil['Infos']))
    { ?>
	<div class="neo-background-cale" style="margin-top:50px;">
		<div class="row neo-margin-right-5 neo-margin-left-5"> 
		<?php for($i = 1; $i < count($lectureAccueil['Infos']) + 1; $i++)
				{ ?>
					<div style="margin-bottom:15px"class="col-12 col-ms-6 col-lg-4">
						<div class="neo-card-4 hvr-float-shadow " style="width:100%;;">
									<img class="neo-hover-grayscale" onclick="ImgModal(this)" style="height: 200px; width: 100%; display: block; cursor:pointer;" src="theme/upload/navRap/<?php echo $lectureAccueil['Infos'][$i]['image']; ?>" alt="">
								<div class="neo-xbackground">
								<p class="neo-text neo-padding-8"><?php echo $lectureAccueil['Infos'][$i]['message']; ?></p>
								<a href="<?php echo $lectureAccueil['Infos'][$i]['lien']; ?>"><button style="width:100%" class="neo-border-top neo-button " >Aller »</button></a>
							</div>
						</div>
					</div>
			<?php } ?>
		</div>
	</div>
	<div id="Modal-index" class="neo-modal" onclick="this.style.display='none'">
	  <div class="neo-modal-content neo-animate-zoom">
	  <span class="neo-button neo-hover-gray neo-xlarge neo-display-topright" style="background-color:rgba(255, 255, 255, 0.3)">&times;</span>
		<img id="Modal-img" style="width:100%">
		
	  </div>
	</div>
<?php } ?>




<div class="neo-background-cale" >

	
<div  id="neo-s-index">

						<?php 
						$i = 0;
							if(isset($news) && count($news) > 0)
							{
								for($i = 0; $i < 10; $i++)
								{
									if($i < count($news))
									{
										$getCountCommentaires = $accueilNews->countCommentaires($news[$i]['id']);
										$countCommentaires = $getCountCommentaires->rowCount();

										$getcountLikesPlayers = $accueilNews->countLikesPlayers($news[$i]['id']);
										$countLikesPlayers = $getcountLikesPlayers->rowCount();
										$namesOfPlayers = $getcountLikesPlayers->fetchAll();

										$getNewsCommentaires = $accueilNews->newsCommentaires($news[$i]['id']);
										?>
										
										
										 <neo>
										 <div class=" neo-center"  >
										 
											<button id="news-toggle-btn-<?php echo $i; ?>" onclick="ToggleNews('<?php echo $i; ?>');" class="neo-btn neo-border-bottom neo-block <?php if($i == 0) { echo 'neo-gray'; } else { echo 'neo-white'; } ?> neo-left-align"> <i id="news-xsquare-<?php echo $i; ?>" style="font-size:20px;" class="neo-float-left <?php if($i == 0) { echo 'neo-show'; } else { echo 'neo-hide'; } ?> far fa-minus-square"></i> <i style="font-size:20px;" id="news-square-<?php echo $i; ?>" class="neo-float-left <?php if($i == 0) { echo 'neo-hide'; } else { echo 'neo-show'; } ?> far fa-plus-square"></i><p class="neo-float-left" style="margin-left:5px;"> <?php echo $news[$i]['titre']; ?> | #<?php echo $i + 1; ?> | </p> <p style="margin-right:5px;" class="neo-float-right"><?php echo 'Posté le '.date('d/m/Y', $news[$i]['date']).' &agrave; '.date('H:i:s', $news[$i]['date']); ?> </p></button>
											
											<div class="neo-card neo-hide neo-animate-opacity" id="news-toggle-<?php echo $i; ?>">
												<div class="neo-container neo-xbackground">
												  <p class="neo-text"><?php echo $news[$i]['message']; ?></p>
												  <?php if(isset($_Joueur_)) {
														$reqCheckLike = $accueilNews->checkLike($_Joueur_['pseudo'], $news[$i]['id']);
														$getCheckLike = $reqCheckLike->fetch();
														$checkLike = $getCheckLike['pseudo'];
														if($_Joueur_['pseudo'] == $checkLike) {
															echo '<a href="#news'.$news[$i]['id'].'" onclick="document.getElementById(\'news'.$news[$i]['id'].'\').style.display=\'block\'" ><i class="fa fa-comment" aria-hidden="true"></i> '.$countCommentaires.' Commentaires</a>';
														} else {
																echo '<a href="?&action=likeNews&id_news='.$news[$i]['id'].'" ><i class="fa fa-thumbs-up" aria-hidden="true"></i> J\'aime !</a> | <a href="#news'.$news[$i]['id'].'" onclick="document.getElementById(\'news'.$news[$i]['id'].'\').style.display=\'block\'" ><i class="fa fa-comment" aria-hidden="true"></i> '.$countCommentaires.' Commentaires</a>';
														}
													} else {
														echo '<a href="#news'.$news[$i]['id'].'" onclick="document.getElementById(\'news'.$news[$i]['id'].'\').style.display=\'block\'" ><i class="fa fa-comment" aria-hidden="true"></i> '.$countCommentaires.' Commentaires</a>';
													}
													if($countLikesPlayers != 0) {
														echo ' <i class="fa fa-thumbs-up"></i> '.$countLikesPlayers;
													}
													unset($Img);
													$Img = new ImgProfil($news[$i]['auteur'], 'pseudo');
													?>
												</div>
												<footer class="neo-container neo-border-top neo-xbackground">
												  <h5 class="neo-text"> Auteur : <a href="?page=profil&profil=<?php echo $news[$i]['auteur']; ?>" alt="aller voir le profil de l'auteur"><img src="<?=$Img->getImgToSize(24, $width, $height);?>" style="width: <?=$width;?>px; height: <?=$height;?>px;" alt="auteur"/> <?php echo $news[$i]['auteur']; ?></a></h5>
												</footer>
											</div>
										</div>
										<?php 
										unset($Img);
										if(isset($_Joueur_)) {
											$getNewsCommentaires = $accueilNews->newsCommentaires($news[$i]['id']);
											while($newsComments = $getNewsCommentaires->fetch()) {
												$reqEditCommentaire = $accueilNews->editCommentaire($newsComments['pseudo'], $news[$i]['id'], $newsComments['id']);
												$getEditCommentaire = $reqEditCommentaire->fetch();
												$editCommentaire = $getEditCommentaire['commentaire'];
												if($newsComments['pseudo'] == $_Joueur_['pseudo'] OR $_Joueur_['rang'] == 1) {  ?>
												<div class="neo-modal " id="news<?php echo $news[$i]['id'].'-'.$newsComments['id'].'-edit'; ?>" style="z-index:53;">
													<div class="neo-modal-content"  style="background-color: rgba(51, 51, 51, 0.5);color:#FFF;width:80%">
														<div class="neo-container">
															<span  onclick="document.getElementById('news<?php echo $news[$i]['id'].'-'.$newsComments['id'].'-edit'; ?>').style.display='none'" class="neo-button neo-display-topright">&times;</span>
																							
																<div class="neo-panel ">
																	<h2 style="text-align:center;;">  Edition du commentaire </h2>
																	<form action="?&action=edit_news_commentaire&id_news=<?php echo $news[$i]['id'].'&auteur='.$newsComments['pseudo'].'&id_comm='.$newsComments['id']; ?>" method="post">
																		<div class="neo-container"  >
																		<p>
																		<ul class="neo-ul" style="width:100%;">
																			
																		<textarea name="edit_commentaire" class="form-control" rows="3" style="resize: none;" maxlength="255" required><?php echo $editCommentaire; ?></textarea>
																		
																			
																				
																		</ul>
																		</p>
																	</div>
																	  <footer class="neo-container ">
																		<button type="submit" class="neo-button neo-grey">Valider la modification</button>
																	  </footer>
																	</form>
																</div>
															</div>
														</div>
												</div>
											
													<?php }
												}
											} ?>
											
											<div class="neo-modal " id="<?php echo "news".$news[$i]['id']; ?>" style="z-index:53;">
												<div class="neo-modal-content neo-animate-zoom"  style="background-color: rgba(15,15 , 15, 0.8);border-radius: 25px;padding:20px;color:#FFF;">
													<div class="neo-container" style="background-color:rgba(40, 40, 40, 0.2);">
															<span  onclick="document.getElementById('<?php echo "news".$news[$i]['id']; ?>').style.display='none'" class="neo-button neo-display-topright" style="border-radius: 30px;margin-top:5px; margin-right:5px;"class="neo-button neo-display-topright">&times;</span>
																								
																<div class="neo-panel ">
																	<h2 style="text-align:center;;" class="neo-text-header-small">  <?php echo $news[$i]['titre']; ?></h2>
																	
																		<div class="neo-container"  >
																		<p>
																		<ul class="neo-ul" style="width:100%;">
																		<?php
																		$getNewsCommentaires = $accueilNews->newsCommentaires($news[$i]['id']);
																		while($newsComments = $getNewsCommentaires->fetch()) {
																			if(isset($_Joueur_)) {
																				
																				$getCheckReport = $accueilNews->checkReport($_Joueur_['pseudo'], $newsComments['pseudo'], $news[$i]['id'], $newsComments['id']);
																				$checkReport = $getCheckReport->rowCount();

																				$getCountReportsVictimes = $accueilNews->countReportsVictimes($newsComments['pseudo'], $news[$i]['id'], $newsComments['id']);
																				$countReportsVictimes = $getCountReportsVictimes->rowCount();
																			}
																			unset($Img);
																			$Img = new ImgProfil($newsComments['pseudo'], 'pseudo');
																			?>
																				<div class="neo-row-padding "  style="margin-bottom:30px;"><div class="neo-border-bottom">
																				
																					<div class="neo-third" style="padding:10px;" >
																						<img class="rounded neo-margin-left-auto neo-margin-right-auto" src="<?=$Img->getImgToSize(64, $width, $height);?>" style="display: block;" alt="Auteur" />
																						<p class="text-muted text-center username"><?php echo '<B> '.$newsComments['pseudo'].'</B>'; ?><br/>
																						<?php echo  '<b>'.gradeJoueur($newsComments['pseudo'], $bddConnection).'</b><br/>'; ?>
																						<?php echo '<B>Le '.date('d/m', $newsComments['date_post']).' à '.date('H:i:s', $newsComments['date_post']).'</B>'; ?></p>
																						<?php if(isset($_Joueur_)) { ?>
																							<span style="color: red;"><?php if($newsComments['nbrEdit'] != "0"){echo 'Nombre d\'édition: '.$newsComments['nbrEdit'].' | ';}if($countReportsVictimes != "0"){echo '<B>'.$countReportsVictimes.' Signalement</B> |';} ?></span>
																						

																							<div class="neo-dropdown-hover">
																								<button class="neo-button neo-red">Action <b class="caret"></b></button>
																								<div class="neo-dropdown-content neo-bar-block neo-border">
																									<?php if($newsComments['pseudo'] == $_Joueur_['pseudo'] OR $_Joueur_['rang'] == 1) {
																										echo '<a href="javascript:void(0)" class="neo-bar-item neo-button"  onclick="document.getElementById(\'news'.$news[$i]['id'].'\').style.display=\'none\'; document.getElementById(\'news'.$news[$i]['id'].'-'.$newsComments['id'].'-edit\').style.display=\'block\'"  >Editer</a>';
																										echo ' <a href="?&action=delete_news_commentaire&id_comm='.$newsComments['id'].'&id_news='.$news[$i]['id'].'&auteur='.$newsComments['pseudo'].'" class="neo-bar-item neo-button">Supprimer</a> ';
																									}
																									if($newsComments['pseudo'] != $_Joueur_['pseudo']) {
																										if($checkReport == "0") {
																											echo ' <a href="?&action=report_news_commentaire&id_news='.$news[$i]['id'].'&id_comm='.$newsComments['id'].'&victime='.$newsComments['pseudo'].'" class="neo-bar-item neo-button">Signaler</a>';
																										} else {
																											echo '<a class="neo-bar-item neo-button" href="javascript:void(0)">Déjà report</a>';
																										}
																									} ?>
																						
																								</div>
																							  </div>
																							
																							
																						<?php } ?>
																					</div>
																					
																					<div class="neo-twothird" style="padding:10px;"  >
																						
																						<div style="width:80%"><?php $com = espacement($newsComments['commentaire']); echo BBCode($com, $bddConnection); ?></div>
																						
																					</div>
																					
																					</div>
																				</div>
																				
																		
																	<?php } ?>
																				
																		</ul>
																		</p>
																	</div>
																	  <footer class="neo-container">
																		<?php
																		if(isset($_Joueur_)) { ?>
																				<form action="?&action=post_news_commentaire&id_news=<?php echo $news[$i]['id']; ?>" method="post" *>
																					<textarea name="commentaire" class="form-control w-100" required></textarea>
																					<center><h4><B>Minimum de 6 caractères<br>Maximum de 255 caractères</B></h4></center>
																				</br>
																				<center><button type="submit" class="neo-button neo-grey">Commenter</button></center>
																				</form>
																	<?php } else { ?>
																			<center><div class="alert alert-danger">Veuillez-vous connecter pour mettre un commentaire.</div></center>
																			<center><a onclick="document.getElementById('Connection').style.display='block'" class="neo-button neo-green neo-hover-green hvr-bounce-in">Connexion</a></center>
																		<?php } ?>
																	  </footer>
																</div>
															</div>
														</div>
												</div>
												</neo>
								<?php }  
								}
							} ?>
						</div>
						
		</div> 
