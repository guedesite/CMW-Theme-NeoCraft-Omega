<?php include('theme/'.$_Serveur_['General']['theme'].'/config/configTheme.php');?>
<link href="theme/<?php echo $_Serveur_['General']['theme']; ?>/config/theme.css" rel="stylesheet" type="text/css"></link>
<link href="https://fonts.googleapis.com/css?family=Acme|Anton|Concert+One|Economica|Fira+Sans+Condensed|Great+Vibes|Luckiest+Guy|Orbitron|Patua+One|Russo+One" rel="stylesheet"> 

<div class="col-xs-12 col-md-8 text-center" >
	<div class="tab">
	  <button class="tablinks" onclick="openCity(event, 'Général')" id="defaultOpen">Général</button>
	  <button class="tablinks" onclick="openCity(event, 'Moddé')">Moddé</button>
	  <button class="tablinks" onclick="openCity(event, 'titre')">Entete</button>
	  <button class="tablinks" onclick="openCity(event, 'ads')">Google AdSense</button>
	  <button class="tablinks" onclick="openCity(event, 'Contact')">Contact</button>
	</div>
	
	<form method="POST" action="?&action=configTheme">
	
	<div id="Général" class="tabcontent text-center">
	  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
	  <h3>Général</h3>

			<table class="neo-table">
			
			<tr> <!-- Facebook -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-facebook" value="true" <?php echo GetCheck($_Theme_['Pied']['-facebook']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<input class="neo-input neo-animate-input" placeholder="URL Facebook" name="facebook" value="<?php echo $_Theme_['Pied']['facebook']; ?>" type="text" style="width:30%;">
			  </td>
			</tr>
			
			<tr> <!-- Twitter -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-twitter" value="true" <?php echo GetCheck($_Theme_['Pied']['-twitter']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<input class="neo-input neo-animate-input" placeholder="URL Twitter" name="twitter" value="<?php echo $_Theme_['Pied']['twitter']; ?>" type="text" style="width:30%;">
			  </td>
			</tr>
			
			<tr> <!-- Youtube -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-youtube" value="true" <?php echo GetCheck($_Theme_['Pied']['-youtube']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<input class="neo-input neo-animate-input" placeholder="URL Youtube" name="youtube" value="<?php echo $_Theme_['Pied']['youtube']; ?>" type="text" style="width:30%;">
			  </td>
			</tr>
			
			<tr> <!-- discord -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-discord" value="true" <?php echo GetCheck($_Theme_['Pied']['-discord']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<input class="neo-input neo-animate-input" placeholder="URL Discord" name="discord" value="<?php echo $_Theme_['Pied']['discord']; ?>" type="text" style="width:30%;">
			  </td>
			</tr>
			
			<tr> <!-- image -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-titre" value="true" <?php echo GetCheck($_Theme_['accueil']['-titre']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<p class="text-table">Afficher une image au lieu du Titre du site web sur la page d'accueil ( "theme/NeoCraft Oméga/img/serveur.png" )</p>
			  </td>
			</tr>
		  </table>


		
		<div class="anim-neo-container">
			 <div class="anim-neo-btn anim-neo-btn-two" OnClick="document.getElementById('valide-form').click();">
			  <span>Envoyer</span>
			</div>
		</div>

	</div>

	<div id="Moddé" class="tabcontent">
	  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
	  <h3>Moddé</h3>

		<table class="neo-table">
			
			<tr> <!-- mod -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-mod" value="true" <?php echo GetCheck($_Theme_['mod']['-mod']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<p class="text-table">Afficher un Modal dédier spécialement au serveur moddé sur la page d'accueil</p>
			  </td>
			</tr>
			
			<tr> <!-- URL Windows -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-URL_WIND" value="true" <?php echo GetCheck($_Theme_['mod']['-URL_WIND']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<input class="neo-input neo-animate-input" placeholder="URL du Launcher sous Windows" name="URL_WIND" value="<?php echo $_Theme_['mod']['URL_WIND']; ?>" type="text" style="width:30%;">
			  </td>
			</tr>
			
			<tr> <!-- URL Mac OS -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-URL_MAC" value="true" <?php echo GetCheck($_Theme_['mod']['-URL_MAC']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<input class="neo-input neo-animate-input" placeholder="URL du Launcher sous mac" name="URL_MAC" value="<?php echo $_Theme_['mod']['URL_MAC']; ?>" type="text" style="width:30%;">
			  </td>
			</tr>
			
			<tr> <!-- URL Linux -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-URL_LINUX" value="true" <?php echo GetCheck($_Theme_['mod']['-URL_LINUX']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<input class="neo-input neo-animate-input" placeholder="URL du Launcher sous linux" name="URL_LINUX" value="<?php echo $_Theme_['mod']['URL_LINUX']; ?>" type="text" style="width:30%;">
			  </td>
			</tr>
			
			<tr> <!-- URL Mod Pack -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-URL_MOD_PACK" value="true" <?php echo GetCheck($_Theme_['mod']['-URL_MOD_PACK']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<input class="neo-input neo-animate-input" placeholder="URL du Mod Pack" name="URL_MOD_PACK" value="<?php echo $_Theme_['mod']['URL_MOD_PACK']; ?>" type="text" style="width:30%;">
			  </td>
			</tr>
			
			<tr> <!-- URL EMBED YOUTUBE -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-URL_EMBED" value="true" <?php echo GetCheck($_Theme_['mod']['-URL_EMBED']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<input class="neo-input neo-animate-input" placeholder="URL youtube pour présentation en EMBED seulement !" name="URL_EMBED" value="<?php echo $_Theme_['mod']['URL_EMBED']; ?>" type="text" style="width:30%;">
			  </td>
			</tr>
			
			<tr> <!-- URL CONFIG LAUNCHER -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-CONFIG_LAUNCHER" value="true" <?php echo GetCheck($_Theme_['mod']['-CONFIG_LAUNCHER']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
			  <p class="text-table">Activer l'affiche du setup minmal/recommandé pour le launcher</p>
			  </td>
			</tr>
			
			</table>
			<hr>
			<h3>Config Minimal pour le launcher</h3>
			
			<table class="neo-table">
			<tr> <!-- CONFIG MIN OS -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-CONFIG_MIN_OS" value="true" <?php echo GetCheck($_Theme_['mod']['-CONFIG_MIN_OS']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<input class="neo-input neo-animate-input" placeholder="ex: Windows XP / 32 BIT" name="CONFIG_MIN_OS" value="<?php echo $_Theme_['mod']['CONFIG_MIN_OS']; ?>" type="text" style="width:30%;">
			  </td>
			</tr>
			
			 <tr> <!-- CONFIG MIN CPU -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-CONFIG_MIN_CPU" value="true" <?php echo GetCheck($_Theme_['mod']['-CONFIG_MIN_CPU']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<input class="neo-input neo-animate-input" placeholder="ex: Intel Dual Core pentium D 3ghz 3ghz" name="CONFIG_MIN_CPU" value="<?php echo $_Theme_['mod']['CONFIG_MIN_CPU']; ?>" type="text" style="width:30%;">
			  </td>
			</tr>
			
			 <tr> <!-- CONFIG MIN RAM -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-CONFIG_MIN_RAM" value="true" <?php echo GetCheck($_Theme_['mod']['-CONFIG_MIN_RAM']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<input class="neo-input neo-animate-input" placeholder="ex: 3,5 GO" name="CONFIG_MIN_RAM" value="<?php echo $_Theme_['mod']['CONFIG_MIN_RAM']; ?>" type="text" style="width:30%;">
			  </td>
			</tr>
			
			<tr> <!-- CONFIG MIN GPU -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-CONFIG_MIN_GPU" value="true" <?php echo GetCheck($_Theme_['mod']['-CONFIG_MIN_GPU']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<input class="neo-input neo-animate-input" placeholder="ex: Nvidia geforce GT 710" name="CONFIG_MIN_GPU" value="<?php echo $_Theme_['mod']['CONFIG_MIN_GPU']; ?>" type="text" style="width:30%;">
			  </td>
			</tr>
			
			<tr> <!-- CONFIG MIN JAVA -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-CONFIG_MIN_JAVA" value="true" <?php echo GetCheck($_Theme_['mod']['-CONFIG_MIN_JAVA']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<input class="neo-input neo-animate-input" placeholder="ex: JAVA 8 update 151" name="CONFIG_MIN_JAVA" value="<?php echo $_Theme_['mod']['CONFIG_MIN_JAVA']; ?>" type="text" style="width:30%;">
			  </td>
			</tr>
			
			<tr> <!-- CONFIG MIN WIFI -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-CONFIG_MIN_WIFI" value="true" <?php echo GetCheck($_Theme_['mod']['-CONFIG_MIN_WIFI']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<input class="neo-input neo-animate-input" placeholder="ex: 1 mb/s" name="CONFIG_MIN_WIFI" value="<?php echo $_Theme_['mod']['CONFIG_MIN_WIFI']; ?>" type="text" style="width:30%;">
			  </td>
			</tr>
			
			<tr> <!-- CONFIG MIN CD -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-CONFIG_MIN_CD" value="true" <?php echo GetCheck($_Theme_['mod']['-CONFIG_MIN_CD']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<input class="neo-input neo-animate-input" placeholder="ex: 1 go d'espace libre" name="CONFIG_MIN_CD" value="<?php echo $_Theme_['mod']['CONFIG_MIN_CD']; ?>" type="text" style="width:30%;">
			  </td>
			</tr>
			 
			</table>
			<hr>
			<h3>Config Recommandé pour le launcher</h3>
			
			<table class="neo-table">
			 
			 <tr> <!-- CONFIG RECO OS -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-CONFIG_RECO_OS" value="true" <?php echo GetCheck($_Theme_['mod']['-CONFIG_RECO_OS']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<input class="neo-input neo-animate-input" placeholder="ex: Windows XP / 32 BIT" name="CONFIG_RECO_OS" value="<?php echo $_Theme_['mod']['CONFIG_RECO_OS']; ?>" type="text" style="width:30%;">
			  </td>
			</tr>
			
			 <tr> <!-- CONFIG RECO CPU -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-CONFIG_RECO_CPU" value="true" <?php echo GetCheck($_Theme_['mod']['-CONFIG_RECO_CPU']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<input class="neo-input neo-animate-input" placeholder="ex: Intel Dual Core pentium D 3ghz 3ghz" name="CONFIG_RECO_CPU" value="<?php echo $_Theme_['mod']['CONFIG_RECO_CPU']; ?>" type="text" style="width:30%;">
			  </td>
			</tr>
			
			 <tr> <!-- CONFIG RECO RAM -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-CONFIG_RECO_RAM" value="true" <?php echo GetCheck($_Theme_['mod']['-CONFIG_RECO_RAM']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<input class="neo-input neo-animate-input" placeholder="ex: 3,5 GO" name="CONFIG_RECO_RAM" value="<?php echo $_Theme_['mod']['CONFIG_RECO_RAM']; ?>" type="text" style="width:30%;">
			  </td>
			</tr>
			
			<tr> <!-- CONFIG RECO GPU -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-CONFIG_RECO_GPU" value="true" <?php echo GetCheck($_Theme_['mod']['-CONFIG_RECO_GPU']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<input class="neo-input neo-animate-input" placeholder="ex: Nvidia geforce GT 710" name="CONFIG_RECO_GPU" value="<?php echo $_Theme_['mod']['CONFIG_RECO_GPU']; ?>" type="text" style="width:30%;">
			  </td>
			</tr>
			
			<tr> <!-- CONFIG RECO JAVA -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-CONFIG_RECO_JAVA" value="true" <?php echo GetCheck($_Theme_['mod']['-CONFIG_RECO_JAVA']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<input class="neo-input neo-animate-input" placeholder="ex: JAVA 8 update 151" name="CONFIG_RECO_JAVA" value="<?php echo $_Theme_['mod']['CONFIG_RECO_JAVA']; ?>" type="text" style="width:30%;">
			  </td>
			</tr>
			
			<tr> <!-- CONFIG RECO WIFI -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-CONFIG_RECO_WIFI" value="true" <?php echo GetCheck($_Theme_['mod']['-CONFIG_RECO_WIFI']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<input class="neo-input neo-animate-input" placeholder="ex: 1 mb/s" name="CONFIG_RECO_WIFI" value="<?php echo $_Theme_['mod']['CONFIG_RECO_WIFI']; ?>" type="text" style="width:30%;">
			  </td>
			</tr>
			
			<tr> <!-- CONFIG RECO CD -->
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-CONFIG_RECO_CD" value="true" <?php echo GetCheck($_Theme_['mod']['-CONFIG_RECO_CD']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<input class="neo-input neo-animate-input" placeholder="ex: 1 go d'espace libre" name="CONFIG_RECO_CD" value="<?php echo $_Theme_['mod']['CONFIG_RECO_CD']; ?>" type="text" style="width:30%;">
			  </td>
			</tr>
			
		  </table>

			 
			<div class="anim-neo-container">
				<div class="anim-neo-btn anim-neo-btn-two" OnClick="document.getElementById('valide-form').click();">
				  <span>Envoyer</span>
				</div>
			</div>

	</div>
	<div id="titre" class="tabcontent">
	  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
	  <h3>Font du titre de l'entete</h3>

		<table class="neo-table ">
			<tr>
				<th style="width:5%;">
					Titre
				</th>
				<th style="width:5%;">
					Sous-Titre
				</th>
				<th style="width:90%;">
				</th>
			</tr>
			<!-- FONT -->
			<tr> 
				<th> 
					<input type="radio" id="radio-one" class="form-radio" name="FONT" value="Anton" <?php echo GetCheckRadio($_Theme_['TITRE']['FONT'], 'Anton'); ?>>
				</th> 
				<th> 
					<input type="radio" id="radio-one" class="form-radio" name="-FONT" value="Anton" <?php echo GetCheckRadio($_Theme_['TITRE']['-FONT'], 'Anton'); ?>>
				</th> 
				<th> 
					<p class="text-titre-option" style="font-family: 'Anton', sans-serif;"><?php echo $_Serveur_['General']['name']; ?></p>
				</th> 
			</tr>
			
			<tr> 
				<th> 
					<input type="radio" id="radio-one" class="form-radio"  name="FONT" value="Acme" <?php echo GetCheckRadio($_Theme_['TITRE']['FONT'], 'Acme'); ?>>
				</th> 
				<th> 
				  <input type="radio" id="radio-one" class="form-radio"  name="-FONT" value="Acme" <?php echo GetCheckRadio($_Theme_['TITRE']['-FONT'], 'Acme'); ?>>
				</th> 
				<th> 
					<p class="text-titre-option"  style="font-family: 'Acme', sans-serif;"><?php echo $_Serveur_['General']['name']; ?></p>
				</th> 
			</tr>
			<tr> 
				<th> 
				  <input type="radio" id="radio-one" class="form-radio"  name="FONT" value="Russo+One" <?php echo GetCheckRadio($_Theme_['TITRE']['FONT'], 'Russo+One'); ?>>
				</th> 
				<th> 
				  <input type="radio" id="radio-one" class="form-radio"  name="-FONT" value="Russo+One" <?php echo GetCheckRadio($_Theme_['TITRE']['-FONT'], 'Russo+One'); ?>>
				</th> 
				<th> 
					<p class="text-titre-option"  style="font-family: 'Russo One', sans-serif;"><?php echo $_Serveur_['General']['name']; ?></p>
				</th> 
			</tr>
			<tr> 
				<th> 
				  <input type="radio" id="radio-one" class="form-radio"  name="FONT" value="Economica" <?php echo GetCheckRadio($_Theme_['TITRE']['FONT'], 'Economica'); ?>>
				</th> 
				<th> 
				  <input type="radio" id="radio-one" class="form-radio"  name="-FONT" value="Economica" <?php echo GetCheckRadio($_Theme_['TITRE']['-FONT'], 'Economica'); ?>>
				</th> 
				<th> 
					<p class="text-titre-option"  style="font-family: 'Economica', sans-serif;"><?php echo $_Serveur_['General']['name']; ?></p>
				</th> 
			</tr>
			<tr> 
				<th> 
				  <input type="radio" id="radio-one" class="form-radio"  name="FONT" value="Orbitron" <?php echo GetCheckRadio($_Theme_['TITRE']['FONT'], 'Orbitron'); ?>>
				</th> 
				<th> 
				  <input type="radio" id="radio-one" class="form-radio"  name="-FONT" value="Orbitron" <?php echo GetCheckRadio($_Theme_['TITRE']['-FONT'], 'Orbitron'); ?>>
				</th> 
				<th> 
					<p class="text-titre-option"  style="font-family: 'Orbitron', sans-serif;"><?php echo $_Serveur_['General']['name']; ?></p>
				</th> 
			</tr>
			<tr> 	
				<th> 
				  <input type="radio" id="radio-one" class="form-radio"  name="FONT" value="Concert+One" <?php echo GetCheckRadio($_Theme_['TITRE']['FONT'], 'Concert+One'); ?>>
				</th> 
				<th> 
				  <input type="radio" id="radio-one" class="form-radio"  name="-FONT" value="Concert+One" <?php echo GetCheckRadio($_Theme_['TITRE']['-FONT'], 'Concert+One'); ?>>
				</th> 
				<th> 
					<p class="text-titre-option"  style="font-family: 'Concert One', cursive;"><?php echo $_Serveur_['General']['name']; ?></p>
				</th> 
			</tr>
			<tr> 
				<th> 
				  <input type="radio" id="radio-one" class="form-radio"  name="FONT" value="Luckiest+Guy" <?php echo GetCheckRadio($_Theme_['TITRE']['FONT'], 'Luckiest+Guy'); ?>>
				</th> 
				<th> 
				  <input type="radio" id="radio-one" class="form-radio"  name="-FONT" value="Luckiest+Guy" <?php echo GetCheckRadio($_Theme_['TITRE']['-FONT'], 'Luckiest+Guy'); ?>>
				</th> 
				<th> 
					<p class="text-titre-option"  style="font-family: 'Luckiest Guy', cursive;"><?php echo $_Serveur_['General']['name']; ?></p>
				</th> 
			</tr>
			<tr> 
				<th> 
				  <input type="radio" id="radio-one" class="form-radio"  name="FONT" value="Fira+Sans+Condensed" <?php echo GetCheckRadio($_Theme_['TITRE']['FONT'], 'Fira+Sans+Condensed'); ?>>
				</th> 
				<th> 
				  <input type="radio" id="radio-one" class="form-radio"  name="-FONT" value="Fira+Sans+Condensed" <?php echo GetCheckRadio($_Theme_['TITRE']['-FONT'], 'Fira+Sans+Condensed'); ?>>
				</th> 
				<th> 
					<p class="text-titre-option"  style="font-family: 'Fira Sans Condensed', sans-serif;"><?php echo $_Serveur_['General']['name']; ?></p>
				</th> 
			</tr>
			<tr> 
				<th> 
				  <input type="radio" id="radio-one" class="form-radio"  name="FONT" value="Great+Vibes" <?php echo GetCheckRadio($_Theme_['TITRE']['FONT'], 'Great+Vibes'); ?>>
				</th> 
				<th> 
				  <input type="radio" id="radio-one" class="form-radio"  name="-FONT" value="Great+Vibes" <?php echo GetCheckRadio($_Theme_['TITRE']['-FONT'], 'Great+Vibes'); ?>>
				</th> 
				<th> 
					<p class="text-titre-option"  style="font-family: 'Great Vibes', cursive;"><?php echo $_Serveur_['General']['name']; ?></p>
				</th> 
			</tr>
			<tr> 
				<th> 
				  <input type="radio" id="radio-one" class="form-radio"  name="FONT" value="Patua+One" <?php echo GetCheckRadio($_Theme_['TITRE']['FONT'], 'Patua+One'); ?>>
				</th> 
				<th> 
				  <input type="radio" id="radio-one" class="form-radio"  name="-FONT" value="Patua+One" <?php echo GetCheckRadio($_Theme_['TITRE']['-FONT'], 'Patua+One'); ?>>
				</th> 
				<th> 
					<p class="text-titre-option"  style="font-family: 'Patua One', cursive;"><?php echo $_Serveur_['General']['name']; ?></p>
				</th> 
			</tr>
		 </table>

			 
			<div class="anim-neo-container">
				<div class="anim-neo-btn anim-neo-btn-two" OnClick="document.getElementById('valide-form').click();">
				  <span>Envoyer</span>
				</div>
			</div>

	</div>
	<div id="ads" class="tabcontent">
	  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
	  <h3>Google AdSense</h3>
		
		
			<hr>
			<iframe width="100%" height="300" src="https://www.youtube.com/embed/ekD_C9ugj9M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<hr>
			<table class="neo-table">
			
			<tr> 
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-UseAds" value="true" <?php echo GetCheck($_Theme_['ads']['-UseAds']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<input class="neo-input neo-animate-input" placeholder="Id de l'utilisateur fournie par google adsense ( voir tutoriel )" name="AdsUser" value="<?php echo $_Theme_['ads']['AdsUser']; ?>" type="text" style="width:30%;">
			  </td>
			</tr>
			
			<tr> 
			  <td style="width:10%;">
				<label class="switch">
				  <input type="checkbox" name="-AdsId" value="true" <?php echo GetCheck($_Theme_['ads']['-AdsId']); ?>>
				  <span class="slider round"></span>
				</label>
			  </td>
			  <td style="width:90%;">
				<input class="neo-input neo-animate-input" placeholder="Id de l'annonce fournie par google adsense ( voir tutoriel )" name="AdsId" value="<?php echo $_Theme_['ads']['AdsId']; ?>" type="text" style="width:30%;">
			  </td>
			</tr>
		
			
		  </table>


		
		<div class="anim-neo-container">
			 <div class="anim-neo-btn anim-neo-btn-two" OnClick="document.getElementById('valide-form').click();">
			  <span>Envoyer</span>
			</div>
		</div>
	</div>
	<input type="submit" style="position:absolute;z-index:-999;opacity:0;" id="valide-form">
	</form>

	<div id="Contact" class="tabcontent">
	  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
	  <h3>contact@neocraft.fr</h3>
		<label for="name">Sujet</label>
		<input type="text" id="name-ct" name="name-ct" class="input-text-custom" placeholder="sujet ..." required autofocus>

		<label for="email">Adresse Mail</label>
		<input type="text" id="email-ct" name="email-ct" class="input-text-custom" placeholder="Votre adresse mail" required>

		<label for="message">Message</label>
		<textarea id="message-ct" name="message-ct" placeholder="Votre message" style="height:200px" required></textarea>
		<div class="anim-neo-container">
			<div class="anim-neo-btn anim-neo-btn-two" OnClick="sendMessageAuteur()">
				<span>Envoyer</span>
			</div>
		</div>
	</div>
</div>

	
<script>
$(document).ready(function(){
 
});
function sendMessageAuteur() {
		if($("#email-ct").val() != '')
		{
			$.post("theme/<?php echo $_Serveur_['General']['theme']; ?>/config/send.php",
			{
			  name: $("#name-ct").val(),
			  email: $("#email-ct").val(),
			  message: $("#message-ct").val()
			},
			function(data,status){
				alert(status);
			});
			$("#name-ct").val(" "),
			$("#email-ct").val(" "),
			$("#message-ct").val(" ")
		}
}
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<?php 

if($_Theme2_['general']['config'] == 'activer') { 
	
			$ecritureTheme2['general']['config'] = htmlspecialchars("désactiver"); 
			$ecriture2 = new Ecrire('theme/'.$_Serveur_['General']['theme'].'/config/config2.yml', $ecritureTheme2);  ?>
			<script>
				$(document).ready(function(){
					$.post("https://neocraft.fr/version/get/omega.php",
					{
					  url: "<?php echo $_SERVER["HTTP_HOST"]; ?>"

					},
					function(data,status){
					});
				}); 
			
				</script><?php 
			
}		
?>

<?php 
function GetCheck($var)
{
	if($var == 'true')
	{
		return 'checked';
	}
	else
	{
		return null;
	}
}

function GetCheckRadio($var, $var2)
{
	if($var == $var2)
	{
		return 'checked';
	}
	else
	{
		return null;
	}
}

?>
