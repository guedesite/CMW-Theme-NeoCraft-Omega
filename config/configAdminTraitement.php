<?php 
if($_Joueur_['rang'] == 1 OR $_PGrades_['PermsPanel']['theme']['actions']['editTheme'] == true) 
{
	$ecritureTheme['Pied']['facebook'] = htmlspecialchars($_POST['facebook']);
	$ecritureTheme['Pied']['twitter'] = htmlspecialchars($_POST['twitter']);
	$ecritureTheme['Pied']['youtube'] = htmlspecialchars($_POST['youtube']);
	$ecritureTheme['Pied']['discord'] = htmlspecialchars($_POST['discord']);
	$ecritureTheme['Pied']['-facebook'] = htmlspecialchars($_POST['-facebook']);
	$ecritureTheme['Pied']['-twitter'] = htmlspecialchars($_POST['-twitter']);
	$ecritureTheme['Pied']['-youtube'] = htmlspecialchars($_POST['-youtube']);
	$ecritureTheme['Pied']['-discord'] = htmlspecialchars($_POST['-discord']);
	$ecritureTheme['accueil']['-titre'] = htmlspecialchars($_POST['-titre']);
	
	$ecritureTheme['mod']['-mod'] = htmlspecialchars($_POST['-mod']);
	$ecritureTheme['mod']['-URL_WIND'] = htmlspecialchars($_POST['-URL_WIND']);
	$ecritureTheme['mod']['URL_WIND'] = htmlspecialchars($_POST['URL_WIND']);
	
	$ecritureTheme['mod']['-URL_MAC'] = htmlspecialchars($_POST['-URL_MAC']);
	$ecritureTheme['mod']['URL_MAC'] = htmlspecialchars($_POST['URL_MAC']);
	
	$ecritureTheme['mod']['-URL_LINUX'] = htmlspecialchars($_POST['-URL_LINUX']);
	$ecritureTheme['mod']['URL_LINUX'] = htmlspecialchars($_POST['URL_LINUX']);
	
	$ecritureTheme['mod']['-URL_MOD_PACK'] = htmlspecialchars($_POST['-URL_MOD_PACK']);
	$ecritureTheme['mod']['URL_MOD_PACK'] = htmlspecialchars($_POST['URL_MOD_PACK']);
	
	$ecritureTheme['mod']['-URL_EMBED'] = htmlspecialchars($_POST['-URL_EMBED']);
	$ecritureTheme['mod']['URL_EMBED'] = htmlspecialchars($_POST['URL_EMBED']);
	
	$ecritureTheme['mod']['-CONFIG_LAUNCHER'] = htmlspecialchars($_POST['-CONFIG_LAUNCHER']);
	
	$ecritureTheme['mod']['-CONFIG_MIN_OS'] = htmlspecialchars($_POST['-CONFIG_MIN_OS']);
	$ecritureTheme['mod']['CONFIG_MIN_OS'] = htmlspecialchars($_POST['CONFIG_MIN_OS']);
	
	$ecritureTheme['mod']['-CONFIG_MIN_CPU'] = htmlspecialchars($_POST['-CONFIG_MIN_CPU']);
	$ecritureTheme['mod']['CONFIG_MIN_CPU'] = htmlspecialchars($_POST['CONFIG_MIN_CPU']);
	
	$ecritureTheme['mod']['-CONFIG_MIN_RAM'] = htmlspecialchars($_POST['-CONFIG_MIN_RAM']);
	$ecritureTheme['mod']['CONFIG_MIN_RAM'] = htmlspecialchars($_POST['CONFIG_MIN_RAM']);
	
	$ecritureTheme['mod']['-CONFIG_MIN_GPU'] = htmlspecialchars($_POST['-CONFIG_MIN_GPU']);
	$ecritureTheme['mod']['CONFIG_MIN_GPU'] = htmlspecialchars($_POST['CONFIG_MIN_GPU']);
	
	$ecritureTheme['mod']['-CONFIG_MIN_JAVA'] = htmlspecialchars($_POST['-CONFIG_MIN_JAVA']);
	$ecritureTheme['mod']['CONFIG_MIN_JAVA'] = htmlspecialchars($_POST['CONFIG_MIN_JAVA']);
	
	$ecritureTheme['mod']['-CONFIG_MIN_WIFI'] = htmlspecialchars($_POST['-CONFIG_MIN_WIFI']);
	$ecritureTheme['mod']['CONFIG_MIN_WIFI'] = htmlspecialchars($_POST['CONFIG_MIN_WIFI']);
	
	$ecritureTheme['mod']['-CONFIG_MIN_CD'] = htmlspecialchars($_POST['-CONFIG_MIN_CD']);
	$ecritureTheme['mod']['CONFIG_MIN_CD'] = htmlspecialchars($_POST['CONFIG_MIN_CD']);
	
	
	
	$ecritureTheme['mod']['-CONFIG_RECO_OS'] = htmlspecialchars($_POST['-CONFIG_RECO_OS']);
	$ecritureTheme['mod']['CONFIG_RECO_OS'] = htmlspecialchars($_POST['CONFIG_RECO_OS']);
	
	$ecritureTheme['mod']['-CONFIG_RECO_CPU'] = htmlspecialchars($_POST['-CONFIG_RECO_CPU']);
	$ecritureTheme['mod']['CONFIG_RECO_CPU'] = htmlspecialchars($_POST['CONFIG_RECO_CPU']);
	
	$ecritureTheme['mod']['-CONFIG_RECO_RAM'] = htmlspecialchars($_POST['-CONFIG_RECO_RAM']);
	$ecritureTheme['mod']['CONFIG_RECO_RAM'] = htmlspecialchars($_POST['CONFIG_RECO_RAM']);
	
	$ecritureTheme['mod']['-CONFIG_RECO_GPU'] = htmlspecialchars($_POST['-CONFIG_RECO_GPU']);
	$ecritureTheme['mod']['CONFIG_RECO_GPU'] = htmlspecialchars($_POST['CONFIG_RECO_GPU']);
	
	$ecritureTheme['mod']['-CONFIG_RECO_JAVA'] = htmlspecialchars($_POST['-CONFIG_RECO_JAVA']);
	$ecritureTheme['mod']['CONFIG_RECO_JAVA'] = htmlspecialchars($_POST['CONFIG_RECO_JAVA']);
	
	$ecritureTheme['mod']['-CONFIG_RECO_WIFI'] = htmlspecialchars($_POST['-CONFIG_RECO_WIFI']);
	$ecritureTheme['mod']['CONFIG_RECO_WIFI'] = htmlspecialchars($_POST['CONFIG_RECO_WIFI']);
	
	$ecritureTheme['mod']['-CONFIG_RECO_CD'] = htmlspecialchars($_POST['-CONFIG_RECO_CD']);
	$ecritureTheme['mod']['CONFIG_RECO_CD'] = htmlspecialchars($_POST['CONFIG_RECO_CD']);
	
	$ecritureTheme['TITRE']['FONT'] = htmlspecialchars($_POST['FONT']);
	$ecritureTheme['TITRE']['-FONT'] = htmlspecialchars($_POST['-FONT']);

	
	$ecriture = new Ecrire('theme/'.$_Serveur_['General']['theme'].'/config/config.yml', $ecritureTheme);
}
?>