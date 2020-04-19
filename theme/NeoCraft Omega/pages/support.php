
<div class="neo-background-cale text-center" >
				<div class="neo-center">
					<div style="width:auto;" class="neo-xbackground neo-xtransforme-2  ">
						<div class="neo-xbackground neo-xtransforme-1 " style="padding:1px;">
							<p class="neo-text-header-small  neo-xtransforme-2" style="margin-top:10px;text-transform: uppercase;"><b><i class="fa fa-user-md"></i> Support communautaire</b></p>
						</div>
					</div>
				</div>
			</div>


<div class="neo-background-cale neo-center-simple" >
	<div class="neo-center neo-xbackground neo-container neo-responsive neo-radius neo-padding-16">
		<h2 class="header-bloc">Gestion des signalements</h2>
			<div class="corp-bloc">

				<table class="neo-table neo-striped neo-bordered neo-hoverable">

					<thead>
						<tr class="neo-light-grey">
							<?php if($_Joueur_['rang'] == 1 OR $_PGrades_['PermsDefault']['support']['displayTicket'] == true) { echo '<th style="text-align: center;">Visuel</th>'; } ?>
							<th style="text-align: center;">Pseudo</th>
							<th style="text-align: center;">Titre</th>
							<th style="text-align: center;">Date</th>
							<th style="text-align: center;">Action</th>
                            <th style="text-align: center;">Status </th>
							<?php if($_Joueur_['rang'] == 1 OR $_PGrades_['PermsDefault']['support']['closeTicket'] == true) { echo '<th style="text-align: center;">Modification</th>'; } ?>
						</tr>
					</thead>
					<tbody>
					<?php $j = 0;
					while($tickets = $ticketReq->fetch()) { ?>
						<tr class="neo-white">
						    <?php if($tickets['ticketDisplay'] == 0 OR $tickets['auteur'] == $_Joueur_['pseudo'] OR $_Joueur_['rang'] == 1 OR $_PGrades_['PermsDefault']['support']['displayTicket'] == true) {
						    if($_Joueur_['rang'] == 1 OR $_PGrades_['PermsDefault']['support']['displayTicket'] == true) { ?>
						    <td class="neo-center-simple">
						        <?php if($tickets['ticketDisplay'] == "0") {
						                echo '<span>Public</span>';
						            } else {
								        echo '<span >Privé</span>';
								} ?>
							</td>
							<?php } ?>

							<td class="neo-center-simple">
								<a href="index.php?&page=profil&profil=<?php echo $tickets['auteur'] ?>"><img class="icon-player-topbar" src="https://cravatar.eu/head/<?php echo $tickets['auteur']; ?>/32" /> <?php echo $tickets['auteur'] ?></a>
							</td>
						
							<td class="neo-center-simple">
								<?php echo $tickets['titre'] ?>​
							</td>
						
							<td class="neo-center-simple">
								<?php echo $tickets['jour']. '/' .$tickets['mois']. ' à ' .$tickets['heure']. ':' .$tickets['minute']; ?>
							</td>
						
							<td class="neo-center-simple">
								 <a class="neo-button neo-green" onclick="document.getElementById('<?php echo $tickets['id']; ?>Slide').style.display='block'">
									Voir <i class="fa fa-eye"></i>
								</a>
							</td>
                            
                            <td class="neo-center-simple">
                                <?php
                                    $ticketstatus = $tickets['etat'];
                                    if($ticketstatus == "1"){
                                        echo '<button class="neo-button neo-green">Résolu <i class="fas fa-check"></i></button>';
                                    } else {
                                        echo '<button class="neo-button neo-red">Non Résolu <i class="fas fa-times"></i></button>';
                                    }
                                ?>
                            </td>

							<?php if($_Joueur_['rang'] == 1 OR $_PGrades_['PermsDefault']['support']['closeTicket'] == true) { ?>
								<td class="neo-center-simple">
									<form class="form-horizontal default-form" method="post" action="?&action=ticketEtat&id=<?php echo $tickets['id']; ?>">
										<?php if($tickets['etat'] == 0){ 
											echo '<button type="submit" name="etat" class="neo-button neo-red" value="1" />Fermer le ticket</button>';
										}else{
											echo '<button type="submit" name="etat" class="neo-button neo-red" value="0" />Ouvrir le ticket</button>';
										} ?>
									</form>
								</td>
							<?php }
							} ?>
						</tr>
						
					<?php if($tickets['ticketDisplay'] == "0" OR $tickets['auteur'] == $_Joueur_['pseudo'] OR $_Joueur_['rang'] == 1 OR $_PGrades_['PermsDefault']['support']['displayTicket'] == true) { ?>
					<!-- Modal -->
					
					<div class="neo-modal " id="<?php echo $tickets['id']; ?>Slide" style="z-index:53;">
							<div class="neo-modal-content neo-animate-zoom"  style="background-color: rgba(15,15 , 15, 0.8);border-radius: 25px;padding:20px;color:#FFF;">
							<div class="neo-container" style="background-color:rgba(40, 40, 40, 0.2);">
															<span  onclick="document.getElementById('<?php echo $tickets['id']; ?>Slide').style.display='none'" class="neo-button neo-display-topright" style="border-radius: 30px;margin-top:5px; margin-right:5px;"class="neo-button neo-display-topright">&times;</span>
																							
																<div class="neo-panel ">
																	<h2 style="text-align:center;;" class="neo-text-header-small">   <?php echo $tickets['titre']; ?>  <?php $ticketstatus = $tickets['etat']; if($ticketstatus == "1"){ echo ' | Résolu !'; } ?></h2>
																	
																		<div class="neo-container"  >
																		<p>
																		<ul class="neo-ul" style="width:100%;">
																		
																			<div class="neo-row-padding "  style="margin-bottom:40px;"><div class="neo-border-bottom">
																				
																					<?php
																					unset($Img);
																					$Img = new ImgProfil($tickets['auteur'], 'pseudo');
																					?>
																					<div class="neo-third" style="padding:10px;" >
																						<img class="rounded neo-margin-left-auto neo-margin-right-auto" src="<?=$Img->getImgToSize(64, $width, $height);?>" style="display: block;" alt="Auteur" />
																						<p class="text-muted text-center username"><?php echo '<B> '.$tickets['auteur'].'</B>'; ?><br/>
																						<?php echo  '<b>'.gradeJoueur($tickets['auteur'], $bddConnection).'</b><br/>'; ?>

																					</div>
																					
																					<div class="neo-twothird" style="padding:10px;"  >
																						
																						<div style="width:80%"><?php unset($message);
																							$message = espacement($tickets['message']);
																							$message = BBCode($message, $bddConnection);
																							echo $message;  ?></div>
																						
																					</div>
																					
																					</div>
																				</div>
																		
																				<?php
																				$commentaires = 0;
																				if(isset($ticketCommentaires[$tickets['id']]))
																				{
																					echo '<div class="neo-border-top"><h3 class="ticket-commentaire-titre"><center>' .count($ticketCommentaires[$tickets['id']]). ' Commentaires</center></h3></div>';
																					for($i = 0; $i < count($ticketCommentaires[$tickets['id']]); $i++)
																					{
																						$get_idComm = $bddConnection->prepare('SELECT id FROM cmw_support_commentaires WHERE auteur LIKE :auteur AND id_ticket LIKE :id_ticket');
																						$get_idComm->bindParam(':auteur', $ticketCommentaires[$tickets['id']][$i]['auteur']);
																						$get_idComm->bindParam(':id_ticket', $tickets['id']);
																						$get_idComm->execute();
																						$req_idComm = $get_idComm->fetch();
				
																						unset($Img);
																						$Img = new ImgProfil($ticketCommentaires[$tickets['id']][$i]['auteur'], 'pseudo');
																							?>
																							<div class="neo-row-padding "  style="margin-bottom:30px;"><div class="neo-border-bottom">
																							
																								<div class="neo-third" style="padding:10px;" >
																									<img class="rounded neo-margin-left-auto neo-margin-right-auto" src="<?=$Img->getImgToSize(64, $width, $height);?>" style="display: block;" alt="Auteur" />
																									<p class="text-muted text-center username"><?php echo '<B> '.$ticketCommentaires[$tickets['id']][$i]['auteur'].'</B>'; ?><br/>
																									<?php echo  '<b>'.gradeJoueur($ticketCommentaires[$tickets['id']][$i]['auteur'], $bddConnection).'</b><br/>'; ?>
																									<b><?php echo 'Le ' .$ticketCommentaires[$tickets['id']][$i]['jour']. '/' .$ticketCommentaires[$tickets['id']][$i]['mois']. ' à ' .$ticketCommentaires[$tickets['id']][$i]['heure']. ':' .$ticketCommentaires[$tickets['id']][$i]['minute']; ?></b></p>
		
																									<?php if(isset($_Joueur_) && (($ticketCommentaires[$tickets['id']][$i]['auteur'] == $_Joueur_['pseudo'] OR $_Joueur_['rang'] == 1 OR $_PGrades_['PermsDefault']['support']['deleteMemberComm'] == true) OR ($ticketCommentaires[$tickets['id']][$i]['auteur'] == $_Joueur_['pseudo'] OR $_Joueur_['rang'] == 1 OR $_PGrades_['PermsDefault']['support']['editMemberComm'] == true))) { ?>
																										 <span class="dropdown" style="padding-left: 40%">
																											<div  style="float:right;" class="neo-margin-left-1 neo-float-right neo-dropdown-hover">
																												 <button class=" neo-button neo-green hvr-bounce-in" >Action <b class="caret"></b></button>
																												  <div class="neo-dropdown-content neo-bar-block neo-border">
																													<?php if($ticketCommentaires[$tickets['id']][$i]['auteur'] == $_Joueur_['pseudo'] OR $_Joueur_['rang'] == 1 OR $_PGrades_['PermsDefault']['support']['deleteMemberComm'] == true) {
																														echo '<a class="neo-bar-item hvr-forward neo-button" href="?&action=delete_support_commentaire&id_comm='.$req_idComm['id'].'&id_ticket='.$tickets['id'].'&auteur='.$ticketCommentaires[$tickets['id']][$i]['auteur'].'">Supprimer</a>';
																													} if($ticketCommentaires[$tickets['id']][$i]['auteur'] == $_Joueur_['pseudo'] OR $_Joueur_['rang'] == 1 OR $_PGrades_['PermsDefault']['support']['editMemberComm'] == true) {
																														echo '<a class="hvr-forward neo-bar-item neo-button" href="#editComm-'.$req_idComm['id'].'" onclick="document.getElementById(\'editComm-'.$req_idComm['id'].'\').style.display=\'block\'" >Editer</a>';
																													}?>
																													</div>
																											</div>
																												
																										 </span>
																									<?php } ?>
																								</div>
																								
																								<div class="neo-twothird" style="padding:10px;"  >
																									<div style="width:80%">	<?php unset($message);
																										$message = espacement($ticketCommentaires[$tickets['id']][$i]['message']);
																										$message = BBCode($message, $bddConnection);
																										echo $message;  ?></div>
																								</div>
																								
																								</div>
																							</div>
																				<?php }  
																				
																				}else
																					echo '<h3 class="ticket-commentaire-titre">0 Commentaire</h3>'; ?>
																				
																		</ul>
																		</p>
																	</div>
																	  <footer class="neo-container">
																		<?php
																		if(isset($_Joueur_)) {
																				if($tickets['etat'] == "0"){
																					echo '<form action="?&action=post_ticket_commentaire" method="post"><div class="modal-footer">
																								<input type="hidden" name="id" value="'.$tickets['id'].'" /><div class="row">
																								<div class="col-md-12 text-center">';
																								$smileys = getDonnees($bddConnection);
																								for($y = 0; $y < count($smileys['symbole']); $y++)
																								{
																									echo '<a href="javascript:insertAtCaret(\'ticket'.$tickets['id'].'\',\' '.$smileys['symbole'][$y].' \')"><img src="'.$smileys['image'][$y].'" alt="'.$smileys['symbole'][$y].'" title="'.$smileys['symbole'][$y].'" /></a>';
																								}
																								?>
																								<a href="javascript:ajout_text('ticket<?=$tickets['id'];?>', 'Ecrivez ici ce que vous voulez mettre en gras', 'ce texte sera en gras', 'b')" style="text-decoration: none;" title="gras"><i class="fas fa-bold" aria-hidden="true"></i></a>
																								<a href="javascript:ajout_text('ticket<?=$tickets['id'];?>', 'Ecrivez ici ce que vous voulez mettre en italique', 'ce texte sera en italique', 'i')" style="text-decoration: none;" title="italique"><i class="fas fa-italic"></i></a>
																								<a href="javascript:ajout_text('ticket<?=$tickets['id'];?>', 'Ecrivez ici ce que vous voulez mettre en souligné', 'ce texte sera en souligné', 'u')" style="text-decoration: none;" title="souligné"><i class="fas fa-underline"></i></a>
																								<a href="javascript:ajout_text('ticket<?=$tickets['id'];?>', 'Ecrivez ici ce que vous voulez mettre en barré', 'ce texte sera barré', 's')" style="text-decoration: none;" title="barré"><i class="fas fa-strikethrough"></i></a>
																								<a href="javascript:ajout_text('ticket<?=$tickets['id'];?>', 'Ecrivez ici ce que vous voulez mettre en aligné à gauche', 'ce texte sera aligné à gauche', 'left')" style="text-decoration: none" title="aligné à gauche"><i class="fas fa-align-left"></i></a>
																								<a href="javascript:ajout_text('ticket<?=$tickets['id'];?>', 'Ecrivez ici ce que vous voulez mettre en centré', 'ce texte sera centré', 'center')" style="text-decoration: none" title="centré"><i class="fas fa-align-center"></i></a>
																								<a href="javascript:ajout_text('ticket<?=$tickets['id'];?>', 'Ecrivez ici ce que vous voulez mettre en aligné à droite', 'ce texte sera aligné à droite', 'right')" style="text-decoration: none" title="aligné à droite"><i class="fas fa-align-right"></i></a>
																								<a href="javascript:ajout_text('ticket<?=$tickets['id'];?>', 'Ecrivez ici ce que vous voulez mettre en justifié', 'ce texte sera justifié', 'justify')" style="text-decoration: none" title="justifié"><i class="fas fa-align-justify"></i></a>
																								<a href="javascript:ajout_text_complement('ticket<?=$tickets['id'];?>', 'Ecrivez ici l\'adresse de votre lien', 'https://craftmywebsite.fr/forum', 'url', 'Entrez le titre de votre lien', 'CraftMyWebsite')" style="text-decoration: none" title="lien"><i class="fas fa-link"></i></a>
																								<a href="javascript:ajout_text_complement('ticket<?=$tickets['id'];?>', 'Ecrivez ici l\'adresse de votre image', 'https://craftmywebsite.fr/img/cat6.png', 'img', 'Entrez ici le titre de votre image (laisser vide si vous ne voulez pas compléter)', 'Titre')" style="text-decoration: none" title="image"><i class="fas fa-image"></i></a>
																								<a href="javascript:ajout_text_complement('ticket<?=$tickets['id'];?>', 'Ecrivez ici votre texte en couleur', 'Ce texte sera coloré', 'color', 'Entrer le nom de la couleur en anglais ou en hexaécimal avec le  # : http://www.code-couleur.com/', 'red ou #40A497')" style="text-decoration: none" title="couleur"><i class="fas fa-font"></i></a>
																								<a href="javascript:ajout_text_complement('ticket<?=$tickets['id'];?>', 'Ecrivez ici votre message caché', 'contenue du spoiler', 'spoiler', 'Entrer le titre du message caché (si la case est vide le titre sera \'Spoiler\'', 'Spoiler')" style="text-decoration: none" title="spoiler"><i class="fas fa-flag"></i></a>
																								<div class="dropdown" style="display:inline;">
																									<a href="#" role="button" id="font" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																									 <i class="fas fa-text-height"></i>
																									</a>
																									<div class="dropdown-menu" aria-labelledby="font">
																										<a class="dropdown-item" href="javascript:ajout_text('ticket<?=$tickets['id'];?>', 'Ecrivez ici ce que vous voulez mettre en taille 2', 'ce texte sera en taille 2', 'font=2')"><span style="font-size: 2em;">2</span></a>
																										<a class="dropdown-item" href="javascript:ajout_text('ticket<?=$tickets['id'];?>', 'Ecrivez ici ce que vous voulez mettre en taille 5', 'ce texte sera en taille 5', 'font=5')"><span style="font-size: 5em;">5</span></a>
																									</div>
																								</div>
																							</div><div class="col-md-12">
																							
																								<textarea name="message" id="ticket<?=$tickets['id'];?>" class="form-control" rows="3" cols="60"></textarea>
																								</br></div></div>
																						  </div>
																						  <button type="submit" class="neo-button neo-green">Commenter</button>
																							</form>
																							<?php 
																				} else {
																					echo '<div class="modal-footer">
																							<form action="" method="post">
																								<textarea style="text-align: center;"name="message" class="form-control" rows="2" placeholder="Ticket résolu ! Merci de contacter un administrateur pour réouvrir votre ticket." disabled></textarea>
																							</form>
																						  </div>';
																				}
																			?>
																	<?php } else  { ?>
																			<center><div class="alert alert-danger">Veuillez-vous connecter pour mettre un commentaire.</div></center>
																			<center><a onclick="document.getElementById('Connection').style.display='block'" class="neo-button neo-grey">Connexion</a></center>
																		<?php } ?>
																	  </footer>
																</div>
															</div>
							</div>
					</div>
					<?php if($ticketCommentaires[$tickets['id']][$i]['auteur'] == $_Joueur_['pseudo'] OR $_Joueur_['rang'] == 1 OR $_PGrades_['PermsDefault']['support']['editMemberComm'] == true) {
						for($i = 0; $i < count($ticketCommentaires[$tickets['id']]); $i++) {
							$get_idComm = $bddConnection->prepare('SELECT id FROM cmw_support_commentaires WHERE auteur LIKE :auteur AND id_ticket LIKE :id_ticket');
							$get_idComm->bindParam(':auteur', $ticketCommentaires[$tickets['id']][$i]['auteur']);
							$get_idComm->bindParam(':id_ticket', $tickets['id']);
							$get_idComm->execute();
							$req_idComm = $get_idComm->fetch(); ?>
					<div class="neo-modal " id="editComm-<?php echo $req_idComm['id']; ?>" style="z-index:53;">
						<div class="neo-modal-content neo-animate-zoom"  style="background-color: rgba(15,15 , 15, 0.8);border-radius: 25px;padding:20px;color:#FFF;">
							<div class="neo-container" style="background-color:rgba(40, 40, 40, 0.2);">
								<span  onclick="document.getElementById('editComm-<?php echo $req_idComm['id']; ?>').style.display='none'" style="border-radius: 30px;margin-top:5px; margin-right:5px;"class="neo-button neo-display-topright">&times;</span>
																
									<div class="neo-panel ">
										<h2 style="text-align:center;;" class="neo-text-header-small">  Edition du commentaire </h2>
											<div class="neo-container"  >
											 <form method="POST" action="?&action=edit_support_commentaire&id_comm=<?php echo $req_idComm['id']; ?>&id_ticket=<?php echo $tickets['id']; ?>&auteur=<?php echo $ticketCommentaires[$tickets['id']][$i]['auteur']; ?>">
											<p>
												<ul class="neo-ul" style="width:100%;">
													<textarea name="editMessage" class="form-control" rows="3" style="resize: none;"><?php echo $ticketCommentaires[$tickets['id']][$i]['message']; ?></textarea>
													 <button type="submit" class="neo-button neo-green">Valider !</button>
												</ul>
											</p>
											</form>
										</div>
									</div>	 
								</div>
							</div>
					</div>

				    <?php }
				       }
				    }
					$j++; } ?>
					</tbody>
				</table>
			</div>
			<div class="card-footer">
				<?php
					if(!isset($_Joueur_)) 
						echo '<a class="neo-button neo-red neo-hover-red hvr-bounce-in" onclick="document.getElementById(\'Connection\').style.display=\'block\'"><i class="fa fa-user"></i> Se connecter pour ouvrir un ticket</a>'; 
					else 
					{
				?>
				<a data-toggle="collapse" data-parent="#ticketCree" href="#ticketCree" class="neo-button neo-green neo-hover-green hvr-bounce-in"><i class="fa fa-pencil-square-o"></i> Poster un ticket !</a>

				<div class="collapse neo-center" id="ticketCree">
					<div class="card">
						<form action="" method="post" onSubmit="envoie_ticket();">
							<div class="card-block">
								<div class="row">
									<div class="col-sm-8">
										<div class="form-group">
											<label class="control-label">Sujet</label>
											<div class="form-group">
												<div class="input-group">
													<div class="input-group-addon"><i class="fas fa-eye"></i></div>
													<input type="text" id="titre_ticket" class="form-control" name="titre" placeholder="Sujet">
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<label for="exampleSelect1">Visibilité</label>
											<select class="form-control" id="vu_ticket" name="ticketDisplay">
												<option value="0">Publique</option>
												<option value="1">Privée</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12 text-center">
									<?php 
										$smileys = getDonnees($bddConnection);
										for($i = 0; $i < count($smileys['symbole']); $i++)
										{
											echo '<a href="javascript:insertAtCaret(\'message_ticket\',\' '.$smileys['symbole'][$i].' \')"><img src="'.$smileys['image'][$i].'" alt="'.$smileys['symbole'][$i].'" title="'.$smileys['symbole'][$i].'" /></a>';
										}
									?>
									<a href="javascript:ajout_text('message_ticket', 'Ecrivez ici ce que vous voulez mettre en gras', 'ce texte sera en gras', 'b')" style="text-decoration: none;" title="gras"><i class="fas fa-bold" aria-hidden="true"></i></a>
									<a href="javascript:ajout_text('message_ticket', 'Ecrivez ici ce que vous voulez mettre en italique', 'ce texte sera en italique', 'i')" style="text-decoration: none;" title="italique"><i class="fas fa-italic"></i></a>
									<a href="javascript:ajout_text('message_ticket', 'Ecrivez ici ce que vous voulez mettre en souligné', 'ce texte sera en souligné', 'u')" style="text-decoration: none;" title="souligné"><i class="fas fa-underline"></i></a>
									<a href="javascript:ajout_text('message_ticket', 'Ecrivez ici ce que vous voulez mettre en barré', 'ce texte sera barré', 's')" style="text-decoration: none;" title="barré"><i class="fas fa-strikethrough"></i></a>
									<a href="javascript:ajout_text('message_ticket', 'Ecrivez ici ce que vous voulez mettre en aligné à gauche', 'ce texte sera aligné à gauche', 'left')" style="text-decoration: none" title="aligné à gauche"><i class="fas fa-align-left"></i></a>
									<a href="javascript:ajout_text('message_ticket', 'Ecrivez ici ce que vous voulez mettre en centré', 'ce texte sera centré', 'center')" style="text-decoration: none" title="centré"><i class="fas fa-align-center"></i></a>
									<a href="javascript:ajout_text('message_ticket', 'Ecrivez ici ce que vous voulez mettre en aligné à droite', 'ce texte sera aligné à droite', 'right')" style="text-decoration: none" title="aligné à droite"><i class="fas fa-align-right"></i></a>
									<a href="javascript:ajout_text('message_ticket', 'Ecrivez ici ce que vous voulez mettre en justifié', 'ce texte sera justifié', 'justify')" style="text-decoration: none" title="justifié"><i class="fas fa-align-justify"></i></a>
									<a href="javascript:ajout_text_complement('contenue', 'Ecrivez ici l\'adresse de votre lien', 'https://craftmywebsite.fr/forum', 'url', 'Entrez le titre de votre lien', 'CraftMyWebsite')" style="text-decoration: none" title="lien"><i class="fas fa-link"></i></a>
									<a href="javascript:ajout_text_complement('contenue', 'Ecrivez ici l\'adresse de votre image', 'https://craftmywebsite.fr/img/cat6.png', 'img', 'Entrez ici le titre de votre image (laisser vide si vous ne voulez pas compléter', 'Titre')" style="text-decoration: none" title="image"><i class="fas fa-image"></i></a>
									<a href="javascript:ajout_text_complement('contenue', 'Ecrivez ici votre texte en couleur', 'Ce texte sera coloré', 'color', 'Entrer le nom de la couleur en anglais ou en hexaécimal avec le  # : http://www.code-couleur.com/', 'red ou #40A497')" style="text-decoration: none" title="couleur"><i class="fas fa-font"></i></a>
									<a href="javascript:ajout_text_complement('contenue', 'Ecrivez ici votre message caché', 'contenue du spoiler', 'spoiler', 'Entrer le titre du message caché (si la case est vide le titre sera \'Spoiler\'', 'Spoiler')" style="text-decoration: none" title="spoiler"><i class="fas fa-flag"></i></a>
									<div class="neo-dropdown-hover neo-margin-right-1">
					 <button class="neo-button fadeInDown"><i class="fas fa-text-height"></i></button>
						<div class="neo-dropdown-content neo-bar-block neo-border">
							<a class="neo-bar-item hvr-forward neo-button" href="javascript:ajout_text('contenue', 'Ecrivez ici ce que vous voulez mettre en taille 2', 'ce texte sera en taille 2', 'font=2')"><span style="font-size: 2em;">2</span></a>
							<a class="neo-bar-item hvr-forward neo-button" href="javascript:ajout_text('contenue', 'Ecrivez ici ce que vous voulez mettre en taille 5', 'ce texte sera en taille 5', 'font=5')"><span style="font-size: 5em;">5</span></a>
							
					</div>
				</div>
									<!--<a href="javascript:ajout_text('message', 'Ecrivez ici ce que vous voulez mettre en rouge', 'ce texte sera en rouge', 'color=red')" class="redactor_color_link" style="background-color: rgb(255, 0, 0);"></a>-->
								</div>
									<label for="message_ticket">Description détaillée</label>
									<textarea class="form-control" id="message_ticket" name="message" placeholder="Description détaillée de votre problème" rows="3"></textarea>
								</div>
							</div>
							<div class="card-footer">
								<button type="submit" class="neo-button neo-green champ valider pull-right">Envoyer</button>
							</div>
						</form>
					</div>
				</div>
				<?php } ?>
					</div>
		  </div>
	</div>
<script>
var nbEnvoie = 0
	function envoie_ticket()
	{
		if(nbEnvoie>0)
			return false;
		else
		{
			var data_titre = document.getElementById("titre_ticket").value;
			var data_message = document.getElementById("message_ticket").value;
			var data_vu = document.getElementById("vu_ticket").value;
			$.ajax({
				url  : 'index.php?action=post_ticket',
				type : 'POST',
				data : 'titre=' + data_titre + '&message=' + data_message + '&ticketDisplay=' + data_vu,
				dataType: 'html'
			});
			nbEnvoie++;
			return true;
		}
	}
</script>

