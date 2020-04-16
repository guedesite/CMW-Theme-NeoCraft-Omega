<?php
$req = $bddConnection->query('SELECT * FROM cmw_ban_config');
$data = $req->fetch(PDO::FETCH_ASSOC);
require('include/version.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="autor" content="CraftMyWebsite , TheTueurCiTy, guedesite, <?php echo $_Serveur_['General']['name']; ?>" />
		<link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">
		<link href="theme/<?php echo $_Serveur_['General']['theme']; ?>/css/ionicons.min.css" rel="stylesheet" type="text/css">
		<link href="theme/<?php echo $_Serveur_['General']['theme']; ?>/css/maintenance.css" rel="stylesheet" type="text/css">
		<link href="theme/<?php echo $_Serveur_['General']['theme']; ?>/css/animate.css" rel="stylesheet" type="text/css">
		<link href="theme/<?php echo $_Serveur_['General']['theme']; ?>/css/theme.css" rel="stylesheet" type="text/css">
		<link href="theme/<?php echo $_Serveur_['General']['theme']; ?>/css/hover.min.css" rel="stylesheet" type="text/css">
		<link href="theme/<?php echo $_Serveur_['General']['theme']; ?>/css/custom.css" rel="stylesheet" type="text/css">

		<?php
		if(file_exists('favicon.ico'))
				echo '<link rel="icon" type="image/x-icon" href="favicon.ico"></link>';
		?>
		<title>Maintenance <?php echo $_Serveur_['General']['description'] ?></title>
		<style>
				html,
				body {
				  height: 100%;
				  width: 100%;
				  margin: 0;
				  padding: 0;
				  overflow: hidden;
				}

				#particle-canvas {
				  width: 100%;
				  height: 100%;
				}
		</style>
	</head>
	<body class="neo-background-image">
		<div id="particle-canvas"></div>
		<div class="neo-margin-top-15 neo-margin-bottom-15 neo-margin-left-25 neo-margin-right-25" style="z-index:99;position:absolute;">
			<div class="neo-center-small neo-padding-16">
				<h2 class="neo-center-simple neo-text"><i class="fa fa-cog fa-spin"></i> <?=$data['titre'];?> <i class="fa fa-cog fa-spin"></i></h2>
				<h4 class="neo-center-simple neo-text"><?=$data['texte'];?></h4>
			</div>
			
			<div class="neo-center neo-radius neo-padding-16" style="margin-top:20px;">
				<div class="neo-center-simple">
					<h5 class="neo-text"> Tous droits réservés, site créé pour le serveur <?php echo $_Serveur_['General']['name']; ?> avec <a href="http://craftmywebsite.fr">CraftMyWebsite.fr#<?php echo $versioncms; ?></a> </h5>
				</div>

			</div>
		</div>



	<div class="neo-modal" id="Connection-mtn" style="z-index:100;">
		<div class="neo-modal-content neo-animate-zoom"  style="background-color: rgba(51, 51, 51, 0.5);color:#FFF;">
			<div class="neo-container">
				<span  onclick="document.getElementById('Connection-mtn').style.display='none'" class="neo-button neo-display-topright">&times;</span>
												
					<div class="neo-panel ">
						<h2 style="text-align:center;;">  S'indentifier </h2>
							<div class="neo-container"  >
							<p>
							<ul class="neo-ul" style="width:100%;">
						
								   <div class="neo-center-simple" style="margin-top:25px;">
								   <form class="form-signin" role="form" method="post" action="?&action=connection">
										<h3 style="neo-text"> <?php echo $donnees['maintenanceMsgAdmin']; ?> </h3>
										
										<label class="neo-text">Pseudo</label>
										<input class="neo-input neo-border " name="pseudo" id="PseudoConectionForm" type="text" style="width:100%" placeholder="Votre pseudo" required autofocus>
										
										<label style="margin-top:15px;" class="neo-text">Mot de passe <a href="#" style="color:#333;font-size:15px;"  onclick="document.getElementById('Connection').style.display='none'; document.getElementById('passrecover').style.display='block'"><small> oublié ?</small> </a></label>
										<input class="neo-input neo-border " type="password" name="mdp"  id="MdpConnectionForm" style="width:100%" placeholder="Votre mot de passe" required >
										<div class="neo-row-padding" style="margin-top:15px;">
											<div class="neo-third">
												<input class="form-check-input" name="reconnexion" type="checkbox" autochecked> Se souvenir de moi
											</div>
											<div class="neo-third">
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
	<script src="theme/<?php echo $_Serveur_['General']['theme']; ?>/maintenance/js/maintenance.js"></script>
	<script src="theme/<?php echo $_Serveur_['General']['theme']; ?>/js/jquery.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
    <script src="theme/<?php echo $_Serveur_['General']['theme']; ?>/js/popper.min.js"></script>
    <script src="theme/<?php echo $_Serveur_['General']['theme']; ?>/js/bootstrap.min.js"></script>
    <script src="theme/<?php echo $_Serveur_['General']['theme']; ?>/js/wow.min.js"></script>
    <script src="theme/<?php echo $_Serveur_['General']['theme']; ?>/js/custom.js"></script>
    <script src="theme/<?php echo $_Serveur_['General']['theme']; ?>/js/snarl.min.js"></script>
	<script type="text/javascript">
		function getTimeRemaining(endtime) {
		  var t = Date.parse(endtime) - Date.parse(new Date());
		  var seconds = Math.floor((t / 1000) % 60);
		  var minutes = Math.floor((t / 1000 / 60) % 60);
		  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
		  var days = Math.floor(t / (1000 * 60 * 60 * 24));
		  if(days == 0 && hours == 0 && minutes == 0 && seconds == 0)
			  window.location.replace("/");
		  return {
			'total': t,
			'days': days,
			'hours': hours,
			'minutes': minutes,
			'seconds': seconds
		  };
		}

		function initializeClock(id, endtime) {
		  var clock = document.getElementById(id);
		  var daysSpan = clock.querySelector('.days');
		  var hoursSpan = clock.querySelector('.hours');
		  var minutesSpan = clock.querySelector('.minutes');
		  var secondsSpan = clock.querySelector('.seconds');

		  function updateClock() {
			var t = getTimeRemaining(endtime);

			daysSpan.innerHTML = t.days;
			hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
			minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
			secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

			if (t.total <= 0) {
			  clearInterval(timeinterval);
			}
		  }

		  updateClock();
		  var timeinterval = setInterval(updateClock, 1000);
		}

		var deadline = new Date(Date.parse(new Date()) + <?=($donnees["dateFin"] - time())?> * 1000);
		initializeClock('clockdiv', deadline);
	</script>
	</body>
</html>