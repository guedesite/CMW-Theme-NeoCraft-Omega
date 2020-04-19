<div class="neo-modal " id="PlayerModal" style="z-index:53;">
	<div class="neo-modal-content neo-animate-zoom"  style="background-color: rgba(15,15 , 15, 0.8);border-radius: 25px;padding:20px;color:#FFF;width:80%">
		<div class="neo-container" style="background-color:rgba(40, 40, 40, 0.2);">
			<span  onclick="document.getElementById('PlayerModal').style.display='none'" style="border-radius: 30px;margin-top:5px; margin-right:5px;" class="neo-button neo-display-topright">&times;</span>
											
				<div class="neo-panel ">
					<h2 style="text-align:center;" class="neo-text-header-small">  Liste des joueurs connecté sur <?php echo $_Serveur_['General']['name']; ?> ! </h2>
						<div class="neo-container"  >
						<p>
						<ul class="neo-ul" style="width:100%;">
							
						  <div class="neo-row-padding neo-responsive">
						   <div id="neo-joueur-list" style="text-align:center;margin-top:25px;">
								<?php for($j = 0; $j < count($jsonCon); $j++) { 
								if(isset($serveurStats)) {
								foreach ($serveurStats[$j]['joueurs'] as $cle => $element) { 
										echo ' <div  class="neo-quarter neo-container neo-card-4">';
										echo '<img alt="" src="https://cravatar.eu/head/'.$serveurStats[$j]['joueurs'][$cle].'/128.png" >';
										echo '<a href="?page=profil&profil='.$serveurStats[$j]['joueurs'][$cle].'"<h2>'.$serveurStats[$j]['joueurs'][$cle].'</h2></a>';
										echo '</div>';
							
								} 
							
								} }
							?>
						   </div> 
						</div>
							
								
						</ul>
						</p>
					</div>
				</div>
			</div>
		</div>
</div>

<div class="neo-modal" id="AddBlock" style="z-index:53;">
	<div class="neo-modal-content neo-animate-zoom"  style="background-color: rgba(15,15 , 15, 0.8);border-radius: 25px;padding:20px;color:#FFF;">
		<div class="neo-container"  style="background-color:rgba(40, 40, 40, 0.2);">
			<span  onclick="document.getElementById('AddBlock').style.display='none'" style="border-radius: 30px;margin-top:5px; margin-right:5px;"class="neo-button neo-display-topright">&times;</span>
											
				<div class="neo-panel ">
					<h2 style="text-align:center;"class="neo-text-header-small"> Merci de votre attention. </h2>
						<div class="neo-container"  >
					  <div class="neo-center-simple" style="margin-top:25px;"> 
							  <p>Votre bloqueur de publicité nous tue à petit feu. (Ad Block, UBlock etc.), NeoCraft est un projet réalisé 
							  par des bénévoles passionnés et nous essayons de rendre la machine autosuffisante.</p>
								<hr></hr>
								<p>Depuis la première parution le 12 décembre 2015, nous voulons faire un serveur plaisant et passionnant.</p>
								<hr></hr>
								<p>Nous ne cherchons pas à vous envahir de publicité mais à tirer quelques euros de plus à la fin du mois pour réduire les frais, jusqu'à présent nous gagnons 50 à 100 euros sur 1 an alors que nous payons 200 euros en hébergement par an.

								</p><p>Sans vous, chers membres de la communauté NeoCraft, nous n'en serions jamais là.

								Merci à vous, Guedesite/Hugo MATHIEU, Fondateur de NeoCraft.</p>
							</div> 			

					</div>
				</div>
			</div>
		</div>
</div>
<div class="neo-modal" id="Connection" style="z-index:53;">
	<div class="neo-modal-content neo-animate-zoom"  style="background-color: rgba(15,15 , 15, 0.8);border-radius: 25px;padding:20px;color:#FFF;">
		<div class="neo-container"  style="background-color:rgba(40, 40, 40, 0.2);">
			<span  onclick="document.getElementById('Connection').style.display='none'" style="border-radius: 30px;margin-top:5px; margin-right:5px;"class="neo-button neo-display-topright">&times;</span>
											
				<div class="neo-panel ">
					<h2 style="text-align:center;"class="neo-text-header-small">  Se connecter </h2>
						<div class="neo-container"  >
						<p>
						<ul class="neo-ul" style="width:100%;">
					
	
							   <div class="neo-center-simple" style="margin-top:25px;"> 
							     <form class="form-signin" role="form" method="post" action="?&action=connection">
									
									<label class="neo-text">Pseudo</label>
									<input class="neo-input neo-border " name="pseudo" id="PseudoConectionForm" type="text" style="width:100%" placeholder="Votre pseudo" required autofocus>
									
									<label style="margin-top:15px;" class="neo-text">Mot de passe <a href="#" style="color:#333;font-size:15px;"  onclick="document.getElementById('Connection').style.display='none'; document.getElementById('passrecover').style.display='block'"><small> oublié ?</small> </a></label>
									<input class="neo-input neo-border " type="password" name="mdp"  id="MdpConnectionForm" style="width:100%" placeholder="Votre mot de passe" required >
									<div class="neo-row-padding" style="margin-top:15px;">
										<div class="neo-half">
											<input class="form-check-input" name="reconnexion" type="checkbox" autochecked> Se souvenir de moi
										</div>
										<div class="neo-half">
											<button type="submit" class="neo-button hvr-bounce-in neo-gray">Connexion</button>
										</div>
									</div>
									
							   
							   </form>	
							</div> 			
						</ul>
						</p>
					</div>
				</div>
			</div>
		</div>
</div>

<div class="neo-modal" id="enreg" style="z-index:53;">
	<div class="neo-modal-content neo-animate-zoom"  style="background-color: rgba(15,15 , 15, 0.8);border-radius: 25px;padding:20px;color:#FFF;">
		<div class="neo-container"  style="background-color:rgba(40, 40, 40, 0.2);">
			<span  onclick="document.getElementById('enreg').style.display='none'"style="border-radius: 30px;margin-top:5px; margin-right:5px;" class="neo-button neo-display-topright">&times;</span>
											
				<div class="neo-panel ">
					<h2 style="text-align:center;" class="neo-text-header-small">  S'enregistrer </h2>
						<div class="neo-container"  >
						<p>
						<ul class="neo-ul" style="width:100%;">
					
	
							   <div class="neo-center-simple " style="margin-top:25px;"> 
							    <form role="form" method="post" action="?&action=inscription">
									
										<label class="neo-text">Pseudo</label>
										<input class="neo-input neo-border " type="text" name="pseudo"  id="PseudoInscriptionForm" style="width:100%" placeholder="Votre pseudo exact In-Game" required>
										
										<label style="margin-top:15px;" class="neo-text">Mot de passe</label>
										<input class="neo-input neo-border " onKeyUp="securPass();" type="password" name="mdp" id="MdpInscriptionForm"  style="width:100%" placeholder="Votre mot de passe" required >
										<input class="neo-input neo-border " onKeyUp="securPass();" type="password" name="mdpConfirm" id="MdpConfirmInscriptionForm" style="width:100%;margin-top:5px;" placeholder="Confirmer-le"  required >
										<div class="progress-bar progress-bar-striped progress-bar-animated" id="progressbar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
										
										<label style="margin-top:15px;" class="neo-text">Adresse Mail</label>
										<input class="neo-input neo-border " type="email" name="email" id="EmailInscriptionForm" style="width:100%" placeholder="Vueilliez rentrer une email valide" required>
										
										<label style="margin-top:15px;" class="neo-text">Age</label>
										<input class="neo-input neo-border " type="number" value="0" min="0" max="99" name="age"  style="width:100%" required>
										
										<label style="margin-top:15px;" class="neo-text"><input type="checkbox" name="show_email" value="true"> Rendre votre adresse email publique</label>

										
										
										<div class="neo-row-padding" style="margin-top:15px;">
											<div class="neo-half">
												<input type='text' name='CAPTCHA' placeholder='captcha' class="neo-input neo-border"/>
												<button type="button" onclick='var t=document.getElementById("captcha"); t.src=t.src+"&amp;"+Math.random();' href="" style="margin-top:5px;width: 100%" class="neo-button neo-gray"><i class="fa fa-refresh"></i> Recharger le captcha</button>
											</div>
											<div class="neo-half">
												<img id='captcha' src='include/purecaptcha/purecaptcha_img.php?t=login_form' style="width: 100%;height: 85px;"/>
												
											</div>
										</div>
										
										<div class="neo-row-padding" style="margin-top:15px;">
											<div class="neo-half">
												<input type="checkbox" name="souvenir" checked> S'inscrire à la newsletter.</div>
											<div class="neo-half">
												<button type="submit" class="neo-button hvr-bounce-in neo-gray">S'inscrire</button>
											</div>
										</div>
								</form>	
							</div> 			
						</ul>
						</p>
					</div>
				</div>
			</div>
		</div>
</div>
<div class="neo-modal " id="passrecover" style="z-index:53;">
	<div class="neo-modal-content neo-animate-zoom"  style="background-color: rgba(15,15 , 15, 0.8);border-radius: 25px;padding:20px;color:#FFF;width:40%">
		<div class="neo-container"  style="background-color:rgba(40, 40, 40, 0.2);">
			<span  onclick="document.getElementById('passrecover').style.display='none'" style="border-radius: 30px;margin-top:5px; margin-right:5px;"class="neo-button neo-display-topright">&times;</span>
											
				<div class="neo-panel ">
					<h2 style="text-align:center;" class="neo-text-header-small">  Mot de passe oublié ? </h2>
						<div class="neo-container"  >
						<form class="-signin" role="form" method="post" action="?&action=passRecover">
						<p>
						<ul class="neo-ul" style="width:100%;">
						<label class="neo-center-simple">Merci d'indiquer votre email utilisé à l'inscription , vous recevrez un lien pour réinitialiser votre mot de passe.</label>
						<input type="email" name="email" class="neo-input neo-border " id="EmailRecoverForm" placeholder="Email" required autofocus>	
						 <button style="margin-top:10px;" type="submit" class="neo-float-right neo-button hvr-bounce-in neo-gray">Envoyer</button>
						</ul>
						</p>
						</form>
					</div>
				</div>	 
			</div>
		</div>
</div>



<?php if($_Theme_['mod']['-mod'] == 'true') { ?>

<div class="neo-modal " id="mod" style="z-index:53;">
	<div class="neo-modal-content neo-animate-zoom"  style="background-color: rgba(15,15 , 15, 0.8);border-radius: 25px;padding:20px;color:#FFF;width:80%">
		<div class="neo-container"  style="background-color:rgba(40, 40, 40, 0.2);">
			<span  onclick="document.getElementById('mod').style.display='none'"style="border-radius: 30px;margin-top:5px; margin-right:5px;" class="neo-button neo-display-topright">&times;</span>
											
				<div class="neo-panel ">
					<h2 class="neo-center-simple neo-text-header-small">  Rejoindre la communauté ! </h2>
						<div class="neo-container"  >
						<form class="-signin" role="form" method="post" action="?&action=passRecover">
						<p>
						<ul class="neo-ul" style="width:100%;">
						 <div class="neo-row-padding">
						   <div style="margin-top:25px;">
							  <?php if($_Theme_['mod']['-URL_EMBED'] == "true") { echo '<div  class="neo-container neo-half">
                                <h2><i class="fa fa-cog fa-spin"></i> Démonstration</h2>
								<iframe src="'.$_Theme_['mod']['URL_EMBED'].'"  frameborder="1" style="width:95%;height:260px;border:none;" allowfullscreen></iframe> 
							  </div>'; } ?>
							  <?php if($_Theme_['mod']['-URL_WIND'] == "true" or $_Theme_['mod']['-URL_MOD_MAC'] == "true" or $_Theme_['mod']['-URL_MOD_LINUX'] == "true" or $_Theme_['mod']['-URL_MOD_PACK'] == "true") {  ?>
								  <div style="text-align:center;" class="neo-container <?php if($_Theme_['mod']['-URL_WIND'] == "true" or $_Theme_['mod']['-URL_MAC'] == "true" or $_Theme_['mod']['-URL_LINUX'] == "true" or $_Theme_['mod']['-URL_MOD_PACK'] == "true" and $_Theme_['mod']['-URL_EMBED'] == "true") { echo 'neo-half'; } ?>">
									<h2><i class="fa fa-cog fa-spin"></i> Télécharges le launcher !</h2>
                                    <?php if($_Theme_['mod']['-URL_WIND'] == "true") { echo'<a href="'.$_Theme_['mod']['URL_WIND'].'" class="neo-button neo-gray" style="width:90%;height:50px;font-size:20px;margin-top:15px  "><i style="font-size:35px;vertical-align:middle;vertical-align:-5px;" class="fab fa-windows"></i> Launcher sous Windows</a><br/>'; } ?>
									<?php if($_Theme_['mod']['-URL_MAC'] == "true") { echo '<a href="'.$_Theme_['mod']['URL_MAC'].'" class="neo-button neo-gray" style="width:90%;height:50px;font-size:20px;margin-top:15px  "><i style="font-size:35px;vertical-align:middle;vertical-align:-5px;" class="fab fa-apple"></i> Launcher sous Apple/OS</a><br/>'; } ?>
									<?php if($_Theme_['mod']['-URL_LINUX'] == "true") { echo '<a href="'.$_Theme_['mod']['URL_LINUX'].'" class="neo-button neo-gray" style="width:90%;height:50px;font-size:20px;margin-top:15px  "><i style="font-size:35px;vertical-align:middle;vertical-align:-5px;" class="fab fa-linux"></i> Launcher sous Linux</a><br/>'; } ?>
									<?php if($_Theme_['mod']['-URL_MOD_PACK'] == "true") { echo '<a href="'.$_Theme_['mod']['URL_MOD_PACK'].'" class="neo-button neo-gray" style="width:90%;height:50px;font-size:20px;margin-top:15px  "><i style="font-size:35px;vertical-align:middle;vertical-align:-5px;" class="fas fa-file"></i> Mod pack</a><br/>'; } ?>
								
								  </div>
								 <?php } ?>
							</div> 
						</div><?php if($_Theme_['mod']['-CONFIG_LAUNCHER'] == 'true') { ?>
						<hr>
						<h2 class="neo-center-simple">Configuration requise</h2>
						<div class="neo-row-padding" style="margin-top:25px;">
						<?php if($_Theme_['mod']['-CONFIG_MIN_OS'] == "true" OR $_Theme_['mod']['-CONFIG_MIN_CPU'] == "true" OR $_Theme_['mod']['-CONFIG_MIN_GPU'] == "true" OR $_Theme_['mod']['-CONFIG_MIN_RAM'] == "true") { ?>
							<div class="neo-half">
								<h5>MINIMALE :</h5>
								<ul class="neo-ul " style="list-style-type: circle;">
								
								
									<?php if($_Theme_['mod']['-CONFIG_MIN_OS'] == "true") { echo '<li class="neo-hover-grey">Système d"exploitation : '.$_Theme_['mod']['CONFIG_MIN_OS'].'</li>'; } ?>
									<?php if($_Theme_['mod']['-CONFIG_MIN_CPU'] == "true") { echo '<li class="neo-hover-grey">Processeur : '.$_Theme_['mod']['CONFIG_MIN_CPU'].'</li>'; } ?>
									<?php if($_Theme_['mod']['-CONFIG_MIN_RAM'] == "true") { echo '<li class="neo-hover-grey">Mémoire vive : '.$_Theme_['mod']['CONFIG_MIN_RAM'].'</li>'; }?>
									<?php if($_Theme_['mod']['-CONFIG_MIN_GPU'] == "true") { echo '<li class="neo-hover-grey">Graphiques : '.$_Theme_['mod']['CONFIG_MIN_GPU'].'</li>'; } ?>
									<?php if($_Theme_['mod']['-CONFIG_MIN_JAVA'] == "true") { echo '<li class="neo-hover-grey">JAVA : '.$_Theme_['mod']['CONFIG_MIN_JAVA'].'</li>'; } ?>
									<?php if($_Theme_['mod']['-CONFIG_MIN_WIFI'] == "true") { echo '<li class="neo-hover-grey">Réseau : '.$_Theme_['mod']['CONFIG_MIN_WIFI'].'</li>'; } ?>
									<?php if($_Theme_['mod']['-CONFIG_MIN_CD'] == "true") { echo '<li class="neo-hover-grey">Espace disque : '.$_Theme_['mod']['CONFIG_MIN_CD'].'</li>'; } ?>
								
									
								</ul>
							</div>
						<?php } ?>
						<?php if($_Theme_['mod']['-CONFIG_RECO_OS'] == "true" OR $_Theme_['mod']['-CONFIG_RECO_CPU'] == "true" OR $_Theme_['mod']['-CONFIG_RECO_GPU'] == "true" OR $_Theme_['mod']['-CONFIG_RECO_RAM'] == "true") { ?>
							<div class="neo-half">
								<h5>RECOMMANDÉE :</h5>
								<ul class="neo-ul " style="width:100%;list-style-type: circle;">
								
								
									<?php if($_Theme_['mod']['-CONFIG_RECO_OS'] == "true") { echo '<li class="neo-hover-grey">Système d"exploitation : '.$_Theme_['mod']['CONFIG_RECO_OS'].'</li>'; } ?>
									<?php if($_Theme_['mod']['-CONFIG_RECO_CPU'] == "true") { echo '<li class="neo-hover-grey">Processeur : '.$_Theme_['mod']['CONFIG_RECO_CPU'].'</li>'; } ?>
									<?php if($_Theme_['mod']['-CONFIG_RECO_RAM'] == "true") { echo '<li class="neo-hover-grey">Mémoire vive : '.$_Theme_['mod']['CONFIG_RECO_RAM'].'</li>'; }?>
									<?php if($_Theme_['mod']['-CONFIG_RECO_GPU'] == "true") { echo '<li class="neo-hover-grey">Graphiques : '.$_Theme_['mod']['CONFIG_RECO_GPU'].'</li>'; } ?>
									<?php if($_Theme_['mod']['-CONFIG_RECO_JAVA'] == "true") { echo '<li class="neo-hover-grey">JAVA : '.$_Theme_['mod']['CONFIG_RECO_JAVA'].'</li>'; } ?>
									<?php if($_Theme_['mod']['-CONFIG_RECO_WIFI'] == "true") { echo '<li class="neo-hover-grey">Réseau : '.$_Theme_['mod']['CONFIG_RECO_WIFI'].'</li>'; } ?>
									<?php if($_Theme_['mod']['-CONFIG_RECO_CD'] == "true") { echo '<li class="neo-hover-grey">Espace disque : '.$_Theme_['mod']['CONFIG_RECO_CD'].'</li>'; } ?>
								
									
								</ul>
							</div>
						<?php } ?>
						</div>
							
							 <?php } ?>
						</ul>
						</p>
						</form>
					</div>
				</div>	 
			</div>
		</div>
</div>

<?php } ?>

<?php
if(isset($_GET['page']) && $_GET['page'] == "messagerie")
{
	?>
<div class="modal fade" id="modalRep" tabindex="-1" role="dialog" aria-labelledby="ModalRepLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalRepLabel">Nouveau message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="?action=sendMessage" method="POST">
      <div class="modal-body">
          <div class="form-group">
            <label for="destinataire" class="col-form-label">Destinataire:</label>
            <input type="text" class="form-control" name="destinataire" id="destinataire" required maxlength="20">
          </div>
          <div class="form-group">
          	<?php 
				$smileys = getDonnees($bddConnection);
				for($i = 0; $i < count($smileys['symbole']); $i++)
				{
					echo '<a href="javascript:insertAtCaret(\'message\',\' '.$smileys['symbole'][$i].' \')"><img src="'.$smileys['image'][$i].'" alt="'.$smileys['symbole'][$i].'" title="'.$smileys['symbole'][$i].'" /></a>';
				}
			?>
			<a href="javascript:ajout_text('message', 'Ecrivez ici ce que vous voulez mettre en gras', 'ce texte sera en gras', 'b')" style="text-decoration: none;" title="gras"><i class="fas fa-bold" aria-hidden="true"></i></a>
			<a href="javascript:ajout_text('message', 'Ecrivez ici ce que vous voulez mettre en italique', 'ce texte sera en italique', 'i')" style="text-decoration: none;" title="italique"><i class="fas fa-italic"></i></a>
			<a href="javascript:ajout_text('message', 'Ecrivez ici ce que vous voulez mettre en souligné', 'ce texte sera en souligné', 'u')" style="text-decoration: none;" title="souligné"><i class="fas fa-underline"></i></a>
			<a href="javascript:ajout_text('message', 'Ecrivez ici ce que vous voulez mettre en barré', 'ce texte sera barré', 's')" style="text-decoration: none;" title="barré"><i class="fas fa-strikethrough"></i></a>
			<a href="javascript:ajout_text('message', 'Ecrivez ici ce que vous voulez mettre en aligné à gauche', 'ce texte sera aligné à gauche', 'left')" style="text-decoration: none" title="aligné à gauche"><i class="fas fa-align-left"></i></a>
			<a href="javascript:ajout_text('message', 'Ecrivez ici ce que vous voulez mettre en centré', 'ce texte sera centré', 'center')" style="text-decoration: none" title="centré"><i class="fas fa-align-center"></i></a>
			<a href="javascript:ajout_text('message', 'Ecrivez ici ce que vous voulez mettre en aligné à droite', 'ce texte sera aligné à droite', 'right')" style="text-decoration: none" title="aligné à droite"><i class="fas fa-align-right"></i></a>
			<a href="javascript:ajout_text('message', 'Ecrivez ici ce que vous voulez mettre en justifié', 'ce texte sera justifié', 'justify')" style="text-decoration: none" title="justifié"><i class="fas fa-align-justify"></i></a>
			<a href="javascript:ajout_text_complement('message', 'Ecrivez ici l\'adresse de votre lien', 'https://craftmywebsite.fr/forum', 'url', 'Entrez le titre de votre lien', 'CraftMyWebsite')" style="text-decoration: none" title="lien"><i class="fas fa-link"></i></a>
			<a href="javascript:ajout_text_complement('message', 'Ecrivez ici l\'adresse de votre image', 'https://craftmywebsite.fr/img/cat6.png', 'img', 'Entrez ici le titre de votre image (laisser vide si vous ne voulez pas compléter', 'Titre')" style="text-decoration: none" title="image"><i class="fas fa-image"></i></a>
			<a href="javascript:ajout_text_complement('message', 'Ecrivez ici votre texte en couleur', 'Ce texte sera coloré', 'color', 'Entrer le nom de la couleur en anglais ou en hexaécimal avec le  # : http://www.code-couleur.com/', 'red ou #40A497')" style="text-decoration: none" title="couleur"><i class="fas fa-font"></i></a>
			<a href="javascript:ajout_text_complement('message', 'Ecrivez ici votre message caché', 'contenue du spoiler', 'spoiler', 'Entrer le titre du message caché (si la case est vide le titre sera \'Spoiler\'', 'Spoiler')" style="text-decoration: none" title="spoiler"><i class="fas fa-flag"></i></a>
			<div class="dropdown">
			  	<a href="#" role="button" id="font" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			   	 <i class="fas fa-text-height"></i>
			  	</a>
				<div class="dropdown-menu" aria-labelledby="font">
			   		<a class="dropdown-item" href="javascript:ajout_text('message', 'Ecrivez ici ce que vous voulez mettre en taille 2', 'ce texte sera en taille 2', 'font=2')"><span style="font-size: 2em;">2</span></a>
			   		<a class="dropdown-item" href="javascript:ajout_text('message', 'Ecrivez ici ce que vous voulez mettre en taille 5', 'ce texte sera en taille 5', 'font=5')"><span style="font-size: 5em;">5</span></a>
			  	</div>
			</div>
            <label for="message" class="col-form-label">Message:</label>
            <textarea class="form-control" rows="5" id="message" name="message" required></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary">Envoyer le message</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modalMessage" tabindex="-1" role="dialog" aria-labelledby="messageLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="messageLabel">Conversation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="?action=sendMessage" method="POST">
      		<input type="hidden" name="destinataire" class="destinataire" />
	      	<div class="modal-body">
	      		<div class="container">
			         <div id="Conversation">
			         </div>
			    </div><br/>
			    <div class="container">
			    	<h3>Répondre :</h3>
			    	<?php 
						$smileys = getDonnees($bddConnection);
						for($i = 0; $i < count($smileys['symbole']); $i++)
						{
							echo '<a href=\'javascript:insertAtCaret("contenue","'.$smileys['symbole'][$i].' ")\'><img src="'.$smileys['image'][$i].'" alt="'.$smileys['symbole'][$i].'" title="'.$smileys['symbole'][$i].'" /></a>';
						}
					?>
					<a href="javascript:ajout_text('contenue', 'Ecrivez ici ce que vous voulez mettre en gras', 'ce texte sera en gras', 'b')" style="text-decoration: none;" title="gras"><i class="fas fa-bold" aria-hidden="true"></i></a>
					<a href="javascript:ajout_text('contenue', 'Ecrivez ici ce que vous voulez mettre en italique', 'ce texte sera en italique', 'i')" style="text-decoration: none;" title="italique"><i class="fas fa-italic"></i></a>
					<a href="javascript:ajout_text('contenue', 'Ecrivez ici ce que vous voulez mettre en souligné', 'ce texte sera en souligné', 'u')" style="text-decoration: none;" title="souligné"><i class="fas fa-underline"></i></a>
					<a href="javascript:ajout_text('contenue', 'Ecrivez ici ce que vous voulez mettre en barré', 'ce texte sera barré', 's')" style="text-decoration: none;" title="barré"><i class="fas fa-strikethrough"></i></a>
					<a href="javascript:ajout_text('contenue', 'Ecrivez ici ce que vous voulez mettre en aligné à gauche', 'ce texte sera aligné à gauche', 'left')" style="text-decoration: none" title="aligné à gauche"><i class="fas fa-align-left"></i></a>
					<a href="javascript:ajout_text('contenue', 'Ecrivez ici ce que vous voulez mettre en centré', 'ce texte sera centré', 'center')" style="text-decoration: none" title="centré"><i class="fas fa-align-center"></i></a>
					<a href="javascript:ajout_text('contenue', 'Ecrivez ici ce que vous voulez mettre en aligné à droite', 'ce texte sera aligné à droite', 'right')" style="text-decoration: none" title="aligné à droite"><i class="fas fa-align-right"></i></a>
					<a href="javascript:ajout_text('contenue', 'Ecrivez ici ce que vous voulez mettre en justifié', 'ce texte sera justifié', 'justify')" style="text-decoration: none" title="justifié"><i class="fas fa-align-justify"></i></a>
					<a href="javascript:ajout_text_complement('contenue', 'Ecrivez ici l\'adresse de votre lien', 'https://craftmywebsite.fr/forum', 'url', 'Entrez le titre de votre lien', 'CraftMyWebsite')" style="text-decoration: none" title="lien"><i class="fas fa-link"></i></a>
					<a href="javascript:ajout_text_complement('contenue', 'Ecrivez ici l\'adresse de votre image', 'https://craftmywebsite.fr/img/cat6.png', 'img', 'Entrez ici le titre de votre image (laisser vide si vous ne voulez pas compléter', 'Titre')" style="text-decoration: none" title="image"><i class="fas fa-image"></i></a>
					<a href="javascript:ajout_text_complement('contenue', 'Ecrivez ici votre texte en couleur', 'Ce texte sera coloré', 'color', 'Entrer le nom de la couleur en anglais ou en hexaécimal avec le  # : http://www.code-couleur.com/', 'red ou #40A497')" style="text-decoration: none" title="couleur"><i class="fas fa-font"></i></a>
					<a href="javascript:ajout_text_complement('contenue', 'Ecrivez ici votre message caché', 'contenue du spoiler', 'spoiler', 'Entrer le titre du message caché (si la case est vide le titre sera \'Spoiler\'', 'Spoiler')" style="text-decoration: none" title="spoiler"><i class="fas fa-flag"></i></a>
					<div class="dropdown">
					  	<a href="#" role="button" id="font" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					   	 <i class="fas fa-text-height"></i>
					  	</a>
						<div class="dropdown-menu" aria-labelledby="font">
					   		<a class="dropdown-item" href="javascript:ajout_text('contenue', 'Ecrivez ici ce que vous voulez mettre en taille 2', 'ce texte sera en taille 2', 'font=2')"><span style="font-size: 2em;">2</span></a>
					   		<a class="dropdown-item" href="javascript:ajout_text('contenue', 'Ecrivez ici ce que vous voulez mettre en taille 5', 'ce texte sera en taille 5', 'font=5')"><span style="font-size: 5em;">5</span></a>
					  	</div>
					</div>
			    	<textarea rows="5" name="message" id="contenue" required class="form-control"></textarea>
			    </div>
	     	 </div>
	      	<div class="modal-footer">
		        <button type="button" class="btn btn-secondary" style="flex: 1;" data-dismiss="modal">Fermer</button>
		        <button type="submit" class="btn btn-primary" style="flex: 1;">Envoyer le message</button>
		    </div>
		</form>
    </div>
  </div>
</div>
<?php 
}
?>
