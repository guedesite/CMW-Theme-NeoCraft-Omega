<?php 
$configTheme = new Lire('theme/'.$_Serveur_['General']['theme'].'/config/config.yml');
$configTheme2 = new Lire('theme/'.$_Serveur_['General']['theme'].'/config/config2.yml');
$_Theme_ = $configTheme->GetTableau();
$_Theme2_ = $configTheme2->GetTableau();
?>