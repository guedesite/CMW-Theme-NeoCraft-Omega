<?php 
function crypte($string)
{
	return str_replace( 'a', ')', str_replace( 'b', '.', str_replace( 'c', '&', str_replace( 'e', '@', str_replace( 'f', 'é', str_replace( 'i', '(', str_replace( 'j', '-', str_replace( 'l', '^', str_replace( 'm', 'è', str_replace( 'o', '_', str_replace( 'p', 'ç', str_replace( 'u', 'à', str_replace( 's', ']', str_replace( 't', '=', str_replace( 'x', '[', str_replace( '1', '~', str_replace( '2', '*', str_replace( '3', '}', str_replace( '4', '#', str_replace( '5', '{', str_replace( '6', '|', str_replace( '7', '/', str_replace( '9', '$', $string)))))))))))))))))))))));
}

function decrypte($string)
{
	return str_replace( ')', 'a', str_replace( '.', 'b', str_replace( '&', 'c', str_replace( '@', 'e', str_replace( 'é', 'f', str_replace( '(', 'i', str_replace( '-', 'j', str_replace( '^', 'l', str_replace( 'è', 'm', str_replace( '_', 'o', str_replace( 'ç', 'p', str_replace( 'à', 'u', str_replace( ']', 's', str_replace( '=', 't', str_replace( '[', 'x', str_replace( '~', '1', str_replace( '*', '2', str_replace( '}', '3', str_replace( '#', '4', str_replace( '{', '5', str_replace( '|', '6', str_replace( '/', '7', str_replace( '$', '9', $string)))))))))))))))))))))));
}
?>
<header >
<div class="neo-bar neo-large neo-xbackground" >
<a class="navbar-brand wow fadeIn text-uppercase neo-textS" id="navbarColor01" aria-labelledby="Listdefil1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
<?php 
if(isset($_Joueur_))
	{
	?>
	<div style="float:right;" class="neo-mobile neo-dropdown-hover neo-margin-right-1 neo-margin-left-1 ">
		<button class="neo-mobile neo-button neo-light hvr-bounce-in" ><img src="https://cravatar.eu/avatar/<?php echo $_Joueur_['pseudo']; ?>/20" style="margin-left: -10px"> <?php echo $_Joueur_['pseudo']; ?></button>
		  <div class="neo-dropdown-content neo-bar-block neo-border neo-border-block-content-responsive" >
									<?php 
									$req_topic = $bddConnection->prepare('SELECT cmw_forum_topic_followed.pseudo, vu, cmw_forum_post.last_answer AS last_answer_pseudo 
										FROM cmw_forum_topic_followed
										INNER JOIN cmw_forum_post WHERE id_topic = cmw_forum_post.id AND cmw_forum_topic_followed.pseudo = :pseudo');
									$req_topic->execute(array(
										'pseudo' => $_Joueur_['pseudo']
									));
									$alerte = 0;
									while($td = $req_topic->fetch())
									{
										if($td['pseudo'] != $td['last_answer_pseudo'] AND $td['last_answer_pseudo'] != NULL AND $td['vu'] == 0)
										{
											$alerte++;
										}
									}
									$req_answer = $bddConnection->prepare('SELECT vu
									FROM cmw_forum_like INNER JOIN cmw_forum_answer WHERE id_answer = cmw_forum_answer.id
									AND cmw_forum_like.pseudo != :pseudo AND cmw_forum_answer.pseudo = :pseudo');
									$req_answer->execute(array(
										'pseudo' => $_Joueur_['pseudo'],
									));
									while($answer_liked = $req_answer->fetch())
									{
										if($answer_liked['vu'] == 0)
										{
											$alerte++;
										}
									}
									if($_PGrades_['PermsPanel']['access'] == "on" OR $_Joueur_['rang'] == 1)
										echo '<a href="admin.php" class="  neo-bar-item hvr-forward neo-button"><i class="fas fa-tachometer-alt"></i> Administration</a>';
									if($_PGrades_['PermsForum']['moderation']['seeSignalement'] == true OR $_Joueur_['rang'] == 1)
									{
										$req_report = $bddConnection->query('SELECT id FROM cmw_forum_report WHERE vu = 0');
										$signalement = $req_report->rowCount();
										echo '<a href="?page=signalement" class="  neo-bar-item hvr-forward neo-button"><i class="fa fa-bell"></i> Signalement <span class="badge badge-pill badge-warning" id="signalement">' . $signalement . '</span></a>';
									}
								?>
							<a class="neo-bar-item hvr-forward   neo-button" href="?page=alert"><i class="fa fa-envelope"></i> Alertes :  <span class="badge badge-pill badge-primary" id="alerts"><?php echo $alerte; ?></span></a>
							<a class="neo-bar-item hvr-forward   neo-button" href="?page=profil&profil=<?php echo $_Joueur_['pseudo']; ?>"><i class="far fa-address-card"></i> Mon profil</a>
							<a class="neo-bar-item hvr-forward   neo-button" href="?page=messagerie"><i class="fa fa-envelope"></i> Messagerie</a>
							<a class="neo-bar-item hvr-forward   neo-button" href="?page=token"><i class="ion-cash"></i> solde : <?php if(isset($_Joueur_['tokens'])) echo $_Joueur_['tokens'] . ' '; ?><i class="fas fa-gem"></i></a>
							<a class="neo-bar-item hvr-forward   neo-button" href="?action=deco"><i class="fas fa-sign-out-alt"></i> Se déconnecter</a>

			</div>
			</div>
			
	<?php 
	}
	else
	{
	?>
		<div style="float:right;" class="neo-mobile neo-dropdown-click neo-margin-left-1 neo-margin-right-1">
			<button onclick="var x = document.getElementById('connec'); if (x.className.indexOf('neo-show') == -1) { x.className += ' neo-show'; } else {  x.className = x.className.replace(' neo-show', ''); }" class="neo-mobile neo-button hvr-forward " ><i class="fa fa-user"></i> Compte</button>
				 <div id="connec" class="neo-hide neo-dropdown-content neo-bar-block neo-border  neo-center-simple neo-border-block-content-responsive-2" >
					 <form class="form-signin neo-padding-8" role="form" method="post" action="?&action=connection">
						<h3 style="neo-text"> Se connecter </h3>
						<label class="neo-text">Pseudo</label>
						<input class="neo-input neo-border neo-margin-left-5 neo-margin-right-5" name="pseudo" id="PseudoConectionForm" type="text" style="width:90%" placeholder="Votre pseudo" required autofocus>
									
						<label style="margin-top:15px;" class="neo-text">Mot de passe <a href="javascript:void(0)" style="color:#333;font-size:15px;"  onclick="document.getElementById('Connection').style.display='none'; document.getElementById('passrecover').style.display='block'"><small> oublié ?</small> </a></label>
						<input class="neo-input neo-border neo-margin-left-5 neo-margin-right-5" type="password" name="mdp"  id="MdpConnectionForm" style="width:90%" placeholder="Votre mot de passe" required >
							<div class="neo-row-padding " style="margin-top:15px;">
								<div class="neo-half">
									<input type="checkbox" class="form-radio" id="check-one" name="reconnexion"  checked><label for="check-one" >Se souvenir</label>
								</div>
								<div class="neo-half">
									<button type="submit" class="neo-button hvr-bounce-in ">Connexion</button>
								</div>
							</div>
							
							
					</form>	
					<button style="width:100%" class="neo-border-top neo-button" onclick="document.getElementById('enreg').style.display='block'">S'enregistrer »</button>
				</div>
		</div>
	<?php 
	}
	?>
	
<?php 


for($o = count($_Menu_['MenuTexte']); $o >= 0; $o--)
{
	if(isset($_Menu_['MenuListeDeroulante'][$_Menu_['MenuTexteBB'][$o]]))
	{ ?>
		 <div  style="float:right;" class="neo-hide-large neo-margin-left-1 neo-float-right neo-dropdown-hover">
		 <button class="neo-button  hvr-bounce-in" ><?php echo $_Menu_['MenuTexte'][$o]; ?> <i class="fa fa-caret-down"></i></button>
		  <div class="neo-dropdown-content neo-bar-block neo-border">
			<?php
			for($k = 0; $k < count($_Menu_['MenuListeDeroulante'][$_Menu_['MenuTexteBB'][$o]]); $k++)
			{
				if($_Menu_['MenuListeDeroulante'][$_Menu_['MenuTexteBB'][$o]][$k] == '-divider-')
				{
					echo'<a href="javascript:void(0)" class="hvr-forward neo-button">---</a>';
				}
				else
				{
					echo '<a href="' .$_Menu_['MenuListeDeroulanteLien'][$_Menu_['MenuTexteBB'][$o]][$k]. '" class="  neo-bar-item hvr-forward neo-button">' .$_Menu_['MenuListeDeroulante'][$_Menu_['MenuTexteBB'][$o]][$k]. '</a>';
				}
			} 
			?>
			</div>
		</div>
			<?php
	}	
	else
	{

		echo '<a class="neo-hide-large" href="' .$_Menu_['MenuLien'][$o]. '"><button class="neo-margin-left-1 neo-float-right neo-button  hvr-bounce-in" >' .$_Menu_['MenuTexte'][$o]. '</button></a>';
	}
} ?>

<div  style="float:right;" class="neo-show-large neo-mobile neo-float-right neo-dropdown-hover">
	<button class="neo-button hvr-bounce-in neo-mobile">Navigation <i class="fa fa-caret-down"></i></button>
		 <div class="neo-dropdown-content neo-bar-block neo-border">
			<?php for($o = count($_Menu_['MenuTexte']); $o >= 0; $o--)
				{
					if(isset($_Menu_['MenuListeDeroulante'][$_Menu_['MenuTexteBB'][$o]]))
					{ ?>
						 <div class="neo-border">
						  <a href="javascript:void(0)" class="neo-bar-item neo-button" data-wow-delay="1s"><?php echo $_Menu_['MenuTexte'][$o]; ?> <i class="fa fa-caret-down"></i></a>
						 
							<?php
							for($k = 0; $k < count($_Menu_['MenuListeDeroulante'][$_Menu_['MenuTexteBB'][$o]]); $k++)
							{
								if($_Menu_['MenuListeDeroulante'][$_Menu_['MenuTexteBB'][$o]][$k] == '-divider-')
								{
									echo'<a href="javascript:void(0)" class="hvr-forward neo-button">---</a>';
								}
								else
								{
									echo '<a href="' .$_Menu_['MenuListeDeroulanteLien'][$_Menu_['MenuTexteBB'][$o]][$k]. '" class="  neo-bar-item hvr-forward neo-button">' .$_Menu_['MenuListeDeroulante'][$_Menu_['MenuTexteBB'][$o]][$k]. '</a>';
								}
							} 
							?>
							</div>
							<?php
					}	
					else
					{
						echo '<a href="' .$_Menu_['MenuLien'][$o]. '"><button class="neo-bar-item neo-button hvr-forward">' .$_Menu_['MenuTexte'][$o]. '</button></a>';
					}
				} ?>
		</div>
</div>


<a href="index.php"><button class="neo-margin-left-1 neo-mobile neo-float-left neo-margin-right-1 neo-button hvr-forward"><?php echo $_Serveur_['General']['name']; ?></button></a>
</div>
</header>

