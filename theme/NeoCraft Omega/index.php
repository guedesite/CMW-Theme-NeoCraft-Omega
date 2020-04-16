<?php
require('theme/'. $_Serveur_['General']['theme'] . '/preload.php'); 
require('include/version.php');
require('theme/'. $_Serveur_['General']['theme'] . '/config/configTheme.php');
$versionS = file_get_contents('http://www.neocraft.fr/version/NO/version.txt');
$versionT = file_get_contents('theme/'.$_Serveur_['General']['theme'].'/version.txt'); ?>
<!DOCTYPE html>
<html>
<head lang="fr_FR">
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
	.neo-text-header-big
	{
		font-family: '<?php echo str_replace('+', ' ', $_Theme_['TITRE']['FONT']); ?>', <?php if($_Theme_['TITRE']['FONT'] == 'Patua+One' OR $_Theme_['TITRE']['FONT'] == 'Great+Vibes' OR $_Theme_['TITRE']['FONT'] == 'Luckiest+Guy' OR $_Theme_['TITRE']['FONT'] == 'Concert+One') { echo 'cursive'; } else { echo 'sans-serif'; } ?>;
	}
	.neo-text-header-small
	{
		font-family: '<?php echo str_replace('+', ' ', $_Theme_['TITRE']['-FONT']); ?>', <?php if($_Theme_['TITRE']['-FONT'] == 'Patua+One' OR  $_Theme_['TITRE']['-FONT'] == 'Great+Vibes' OR $_Theme_['TITRE']['-FONT'] == 'Luckiest+Guy' OR $_Theme_['TITRE']['-FONT'] == 'Concert+One') { echo 'cursive'; } else { echo 'sans-serif'; } ?>;
	}
	:root {
		--color-main: <?=$_Serveur_["color"]["theme"]["main"]?>; 
		--color-hover: <?=$_Serveur_["color"]["theme"]["hover"]?>; 
		--color-focus: <?=$_Serveur_["color"]["theme"]["focus"]?>; 
	}
	</style>
	<meta name="theme-color" content="<?=$configFile["color"]["theme"]["main"]?>"></meta>
	<meta name="msapplication-navbutton-color" content="<?=$configFile["color"]["theme"]["main"]?>"></meta>
	<meta name="apple-mobile-web-app-statut-bar-style" content="<?=$configFile["color"]["theme"]["main"]?>"></meta>
    <meta name="apple-mobile-web-app-capable" content="<?=$configFile["color"]["theme"]["main"]?>"></meta>
	<meta property="og:title" content="<?=$_Serveur_['General']['name']?>"></meta>
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://<?=$_SERVER["SERVER_NAME"]?>"></meta>
	<meta property="og:image" content="https://<?=$_SERVER["SERVER_NAME"]?>/favicon.ico"></meta>
	<meta property="og:image:alt" content="<?=$_Serveur_['General']['description']?>"></meta>
	<meta property="og:description" content="<?=$_Serveur_['General']['description']?>"></meta>
	<meta property="og:site_name" content="<?=$_Serveur_['General']['name']?>" />
	<meta name="twitter:title" content="<?=$_Serveur_['General']['name']?>"></meta>
	<meta name="twitter:description" content="<?=$_Serveur_['General']['description']?>"></meta>
	<meta name="twitter:image" content="https://<?=$_SERVER["SERVER_NAME"]?>/favicon.ico"></meta>
	<meta name="autor" content="CraftMyWebsite , TheTueurCiTy, <?php echo $_Serveur_['General']['name']; ?>" /></meta>
	<link href="theme/<?php echo $_Serveur_['General']['theme']; ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"></link>
	<link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet"></link>
	<link href="theme/<?php echo $_Serveur_['General']['theme']; ?>/css/ionicons.min.css" rel="stylesheet" type="text/css"></link>
	<link href="https://fonts.googleapis.com/css?family=<?php echo $_Theme_['TITRE']['FONT']; ?>|<?php echo $_Theme_['TITRE']['-FONT']; ?>" rel="stylesheet"> </link>
	<link href="theme/<?php echo $_Serveur_['General']['theme']; ?>/css/animate.css" rel="stylesheet" type="text/css"></link>
	<link href="theme/<?php echo $_Serveur_['General']['theme']; ?>/css/hover.min.css" rel="stylesheet" type="text/css"></link>
	<link href="theme/<?php echo $_Serveur_['General']['theme']; ?>/css/custom.css" rel="stylesheet" type="text/css"></link>
	<link href="theme/<?php echo $_Serveur_['General']['theme']; ?>/css/theme.css" rel="stylesheet" type="text/css"></link>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"></link>
	<link rel="stylesheet" href="theme/<?php echo $_Serveur_['General']['theme']; ?>/css/toastr.css"></link>
	<link rel="stylesheet" href="theme/<?php echo $_Serveur_['General']['theme']; ?>/css/snarl.min.css"></link>
	<link rel="stylesheet" href="theme/<?php echo $_Serveur_['General']['theme']; ?>/css/forum.css"></link>
	<script src="theme/<?php echo $_Serveur_['General']['theme']; ?>/js/form.js"></script>
	<?php if(file_exists('favicon.ico')) { echo '<link rel="icon" type="image/x-icon" href="favicon.ico"></link>'; } ?>
	<title><?php echo $_Serveur_['General']['description'] ?></title>
</head>
<?php if(!isset($_GET['page'])) { ?>
<div id="loader-wrapper">
	<div id="loader"></div>
	<div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<?php } ?>
<body id="content" class="neo-background-image" style="width:100%;">
	<div id="particle-canvas" style="position:absolute;width:100%;height:100%;z-index:-1;" ></div>
	<div style="position:absolute;width:100%;height:100%;z-index:1;">
	<?php if(isset($_Joueur_)) { setcookie('pseudo', $_Joueur_['pseudo'], time() + 86400, null, null, false, true);  }
	include('theme/' .$_Serveur_['General']['theme']. '/entete.php');
	tempMess();
	
	$check_installation_dossier = "installation";
	if (is_dir($check_installation_dossier)) { ?>
		<header class="heading-pagination">
			<div class="container-fluid">
				<h1 class="text-uppercase wow fadeInRight" style="color:white;">Vérification d'installation</h1>
			</div>
		</header>
		<section id="page" class="layout">
			<div class="container">
			<br>
			<div class="alert alert-danger text-center">
				<strong>Erreur :</strong> Vous devez absolument effacer le dossier "installation" à la racine de votre site pour commencer à utiliser votre site.<br>
					Rafraîchissez la page ou appuyez sur le bouton ci-dessous pour revérifier.
			</div>
			<center><a href="index.php" class="btn btn-warning btn-lg btn-block">Refaire une vérification</a></center>
				<br>
			<br>
		</div></section>
		
	
<?php } else { echo '<div id="content-under">'; include('controleur/page.php'); echo '</div>';} 
include('theme/' .$_Serveur_['General']['theme']. '/pied.php'); ?>
<?php include('theme/' .$_Serveur_['General']['theme']. '/formulaires.php'); 
if($versionS > $versionT AND $_Joueur_['rang'] == 1) { ?>
<div class="neo-modal" id="MajModal" style="z-index:53;">
	<div class="neo-modal-content neo-animate-zoom"  style="background-color: rgba(51, 51, 51, 0.5);color:#FFF;width:40%">
		<div class="neo-container">
			<span onclick="document.getElementById('MajModal').style.display='none'" class="neo-button neo-display-topright">&times;</span>
											
				<div class="neo-panel ">
					<h2 style="text-align:center;;">  <i class="fa fa-cog fa-spin"></i> Mise à jour ! <i class="fa fa-cog fa-spin"></i> </h2>
						<div class="neo-container"  >
						<p>
						<ul class="neo-ul" style="width:100%;">
						<label class="neo-center-simple">Une nouvelle version du theme NeoCraft Oméga est disponible ! ( seul les administrateur peuvent voire ce message )</label>
						<a href="https://file.neocraft.fr/index.php?file=13&tabs=3" target="_blank" class="neo-center-simple">	<button class="neo-button neo-gray hvr-bounce-in" >Télécharger</button>	</a>
						</ul>
						</p>
					</div>
				</div>	 
			</div>
		</div>
</div>
<script>document.getElementById('MajModal').style.display='block'</script>
<?php } 
function ModDecode($text)
{
	return str_replace('[b]', '<b>', str_replace('[/b]', '</b>', str_replace('[JUMP]', '</li><li class="neo-hover-grey">', str_replace('[u]', '<u>', str_replace('[/u]', '</u>', str_replace('[i]', '<i>', str_replace('[/i]', '</i>', str_replace('[u]', '<u>', str_replace('[/u]', '</u>', $text)))))))));
}
?>
<div id="divScroll" class="neo-button neo-gray neo-animate-bottom" style="z-index:999;"onclick="goToTop()"><i class="fa fa-arrow-up" aria-hidden="true"></i></div>
<script src="theme/<?php echo $_Serveur_['General']['theme']; ?>/js/jquery.min.js"></script>
<script src="theme/<?php echo $_Serveur_['General']['theme']; ?>/js/popper.min.js"></script>
<script src="theme/<?php echo $_Serveur_['General']['theme']; ?>/js/bootstrap.min.js"></script>
<script src="theme/<?php echo $_Serveur_['General']['theme']; ?>/js/wow.min.js"></script>
<script src="theme/<?php echo $_Serveur_['General']['theme']; ?>/js/custom.js"></script>
<script src="theme/<?php echo $_Serveur_['General']['theme']; ?>/js/theme.js"></script>
<script src="theme/<?php echo $_Serveur_['General']['theme']; ?>/js/toastr.min.js"></script>
<script src="theme/<?php echo $_Serveur_['General']['theme']; ?>/js/snarl.min.js"></script>
<script src="theme/<?=$_Serveur_['General']['theme'];?>/js/messagerie.js"></script>
<?php if($_Serveur_['Payement']['dedipass'] == true) { ?> <script src="//api.dedipass.com/v1/pay.js"></script><?php } ?>
<?php include('theme/'.$_Serveur_['General']['theme'].'/js/forum.php'); ?>
<script src="theme/<?php echo $_Serveur_['General']['theme']; ?>/js/zxcvbn.js"></script><!-- <3 à eux -->
<script>
window.onscroll = function() {divScroll()};

function divScroll() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("divScroll").style.display = "block";
    } else {
        document.getElementById("divScroll").style.display = "none";
    }
}

function goToTop() {
	$('html, body').animate({
		scrollTop: 0
	}, 1000);
}

function securPass()
{
	$("#progress").removeClass("d-none");
	result = zxcvbn($("#MdpInscriptionForm").val());
	if (result['score'] == 0)
	{
		$("#progressbar").addClass("bg-danger");
		$("#progressbar").css('width', '0%');
		$("#progressbar").attr('aria-valuenow', '0');
	}
	else if (result['score'] == 1)
	{
		if ($("#progressbar").hasClass("bg-warning"))
			$("#progressbar").removeClass("bg-warning");
		else if ($("#progressbar").hasClass("bg-success"))
			$("#progressbar").removeClass("bg-success");
		$("#progressbar").addClass("bg-danger");
		$("#progressbar").css("width", "25%");
		$("#progressbar").attr("aria-valuenow", "25");
	}
	else if (result['score'] == 2)
	{
		if ($("#progressbar").hasClass("bg-success"))
			$("#progressbar").removeClass("bg-success");
		else if ($("#progressbar").hasClass("bg-danger"))
			$("#progressbar").removeClass("bg-danger");
		$("#progressbar").addClass("bg-warning");
		$("#progressbar").css("width", "50%");
		$("#progressbar").attr("aria-valuenow", "50");
	}
	else if (result['score'] == 3)
	{
		if ($("#progressbar").hasClass("bg-warning"))
			$("#progressbar").removeClass("bg-warning");
		else if ($("#progressbar").hasClass("bg-danger"))
			$("#progressbar").removeClass("bg-danger");
		$("#progressbar").addClass("bg-success");
		$("#progressbar").css("width", "75%");
		$("#progressbar").attr("aria-valuenow", "75");
	}
	else if (result['score'] == 4)
	{
		if ($("#progressbar").hasClass("bg-warning"))
			$("#progressbar").removeClass("bg-warning");
		else if ($("#progressbar").hasClass("bg-danger"))
			$("#progressbar").removeClass("bg-danger");
		$("#progressbar").addClass("bg-success");
		$("#progressbar").css("width", "100%");
		$("#progressbar").attr("aria-valuenow", "100");
	}
	if($("#MdpInscriptionForm").val() != '' && $("#MdpConfirmInscriptionForm").val() != '')
	{
		if($("#MdpInscriptionForm").val() == $("#MdpConfirmInscriptionForm").val())
		{
			$("#correspondance").addClass("text-success");
			if($("#correspondance").hasClass("text-danger"))
				$("#correspondance").removeClass("text-danger");
			$("#correspondance").html("Les mots de passes rentrés correspondent !!!");
			$("#InscriptionBtn").removeAttr("disabled");
		}
		else
		{
			$("#correspondance").addClass("text-danger");
			if($("#correspondance").hasClass("text-success"))
				$("#correspondance").removeClass("text-success");
			$("#correspondance").html("Les mots de passes rentrés ne correspondent pas !!!");
		}
		if($("#MdpInscriptionForm").val() != $("#MdpConfirmInscriptionForm").val())
		{
			$("#InscriptionBtn").attr("disabled", true);
		}
	}
	else
	{
		$("#InscriptionBtn").attr("disabled", true);
		$("#correspondance").html("");
	}
}

</script>
<script>
function insertAtCaret (textarea, icon)
{ 
	if (document.getElementById(textarea).createTextRange && document.getElementById(textarea).caretPos)
	{ 
		var caretPos = document.getElementById(textarea).caretPos; 
		selectedtext = caretPos.text; 
		caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == '' ? icon + '' : icon; 
		caretPos.text = caretPos.text + selectedtext;
	}
	else if (document.getElementById(textarea).textLength > 0)
	{
		Deb = document.getElementById(textarea).value.substring( 0 , document.getElementById(textarea).selectionStart );
		Fin = document.getElementById(textarea).value.substring( document.getElementById(textarea).selectionEnd , document.getElementById(textarea).textLength );
		document.getElementById(textarea).value = Deb + icon + Fin;
	}
	else
	{
		document.getElementById(textarea).value = document.getElementById(textarea).value + icon;
	}
	
	document.getElementById(textarea).focus(); 
}


function ajout_text(textarea, entertext, tapetext, balise)
{
	if (document.selection && document.selection.createRange().text != '')
	{
		document.getElementById(textarea).focus();
		VarTxt = document.selection.createRange().text;
		document.selection.createRange().text = '['+balise+']'+VarTxt+'[/'+balise+']';
	}
	else if (document.getElementById(textarea).selectionEnd && (document.getElementById(textarea).selectionEnd - document.getElementById(textarea).selectionStart > 0))
	{
		valeurDeb = document.getElementById(textarea).value.substring( 0 , document.getElementById(textarea).selectionStart );
		valeurFin = document.getElementById(textarea).value.substring( document.getElementById(textarea).selectionEnd , document.getElementById(textarea).textLength );
		objectSelected = document.getElementById(textarea).value.substring( document.getElementById(textarea).selectionStart , document.getElementById(textarea).selectionEnd );
		document.getElementById(textarea).value = valeurDeb+'['+balise+']'+objectSelected+'[/'+balise+']'+valeurFin;
	}
	else
	{
		VarTxt = window.prompt(entertext,tapetext);
		if ((VarTxt != null) && (VarTxt != '')) insertAtCaret(textarea, '['+balise+']'+VarTxt+'[/'+balise+']');
	}
}

function ajout_text_complement(textarea, entertext, tapetext, balise, complementTxt, complementtape)
{
	if(balise == 'url')
	{	
		if (document.selection && document.selection.createRange().text != '')
		{
			complement = window.prompt(entertext, tapetext);
			document.getElementById(textarea).focus();
			VarTxt = document.selection.createRange().text;
			if(complement != null && complement != '')
				document.selection.createRange().text = '['+balise+'='+complement+']'+VarTxt+'[/'+balise+']';
			else
				document.selection.createRange().text = '['+balise+']'+VarTxt+'[/'+balise+']';
		}
		else if (document.getElementById(textarea).selectionEnd && (document.getElementById(textarea).selectionEnd - document.getElementById(textarea).selectionStart > 0))
		{
			complement = window.prompt(entertext, tapetext);
			valeurDeb = document.getElementById(textarea).value.substring( 0 , document.getElementById(textarea).selectionStart );
			valeurFin = document.getElementById(textarea).value.substring( document.getElementById(textarea).selectionEnd , document.getElementById(textarea).textLength );
			objectSelected = document.getElementById(textarea).value.substring( document.getElementById(textarea).selectionStart , document.getElementById(textarea).selectionEnd );
			if(complement != null && complement != '')
				document.getElementById(textarea).value = valeurDeb+'['+balise+'='+complement+']'+objectSelected+'[/'+balise+']'+valeurFin;
			else
				document.getElementById(textarea).value = valeurDeb+'['+balise+']'+objectSelected+'[/'+balise+']'+valeurFin;
		}
		else
		{
			VarTxt = window.prompt(complementTxt,complementtape);
			complement = window.prompt(entertext, tapetext);
			if ((VarTxt != null) && (VarTxt != '') && complement != null && complement != '') insertAtCaret(textarea, '['+balise+'='+complement+']'+VarTxt+'[/'+balise+']');
			else insertAtCaret(textarea, '['+balise+']'+VarTxt+'[/'+balise+']'); 
		}
	}
	else if(balise == 'img')
	{
		if (document.selection && document.selection.createRange().text != '')
		{
			complement = window.prompt(entertext, tapetext);
			document.getElementById(textarea).focus();
			VarTxt = document.selection.createRange().text;
			if(VarTxt != null && VarTxt != '')
				document.selection.createRange().text = '['+balise+'='+complement+']'+VarTxt+'[/'+balise+']';
			else
				document.selection.createRange().text = '['+balise+']'+complement+'[/'+balise+']';
		}
		else if (document.getElementById(textarea).selectionEnd && (document.getElementById(textarea).selectionEnd - document.getElementById(textarea).selectionStart > 0))
		{
			complement = window.prompt(entertext, tapetext);
			valeurDeb = document.getElementById(textarea).value.substring( 0 , document.getElementById(textarea).selectionStart );
			valeurFin = document.getElementById(textarea).value.substring( document.getElementById(textarea).selectionEnd , document.getElementById(textarea).textLength );
			objectSelected = document.getElementById(textarea).value.substring( document.getElementById(textarea).selectionStart , document.getElementById(textarea).selectionEnd );
			if(objectSelected != null && objectSelected != '')
				document.getElementById(textarea).value = valeurDeb+'['+balise+'='+complement+']'+objectSelected+'[/'+balise+']'+valeurFin;
			else
				document.getElementById(textarea).value = valeurDeb+'['+balise+']'+complement+'[/'+balise+']'+valeurFin;
		}
		else
		{
			VarTxt = window.prompt(complementTxt,complementtape);
			complement = window.prompt(entertext, tapetext);
			if ((VarTxt != null) && (VarTxt != '') && complement != null && complement != '') insertAtCaret(textarea, '['+balise+'='+complement+']'+VarTxt+'[/'+balise+']');
			else insertAtCaret(textarea, '['+balise+']'+complement+'[/'+balise+']'); 
		}
	}
	else
	{
		if (document.selection && document.selection.createRange().text != '')
		{
			complement = window.prompt(complementTxt, complementtape);
			document.getElementById(textarea).focus();
			VarTxt = document.selection.createRange().text;
			if(complement != null && complement != '')
				document.selection.createRange().text = '['+balise+'='+complement+']'+VarTxt+'[/'+balise+']';
			else
				document.selection.createRange().text = '['+balise+']'+VarTxt+'[/'+balise+']';
		}
		else if (document.getElementById(textarea).selectionEnd && (document.getElementById(textarea).selectionEnd - document.getElementById(textarea).selectionStart > 0))
		{
			complement = window.prompt(complementTxt, complementtape);
			valeurDeb = document.getElementById(textarea).value.substring( 0 , document.getElementById(textarea).selectionStart );
			valeurFin = document.getElementById(textarea).value.substring( document.getElementById(textarea).selectionEnd , document.getElementById(textarea).textLength );
			objectSelected = document.getElementById(textarea).value.substring( document.getElementById(textarea).selectionStart , document.getElementById(textarea).selectionEnd );
			if(complement != null && complement != '')
				document.getElementById(textarea).value = valeurDeb+'['+balise+'='+complement+']'+objectSelected+'[/'+balise+']'+valeurFin;
			else
				document.getElementById(textarea).value = valeurDeb+'['+balise+']'+objectSelected+'[/'+balise+']'+valeurFin;
		}
		else
		{
			complement = window.prompt(complementTxt,complementtape);
			VarTxt = window.prompt(entertext, tapetext);
			if ((VarTxt != null) && (VarTxt != '') && complement != null && complement != '') insertAtCaret(textarea, '['+balise+'='+complement+']'+VarTxt+'[/'+balise+']');
			else insertAtCaret(textarea, '['+balise+']'+VarTxt+'[/'+balise+']');
		}
	}
}
</script>
<?php 
include('controleur/notifications.php');
if(isset($_Joueur_))
{
	?><script>
setInterval(ajax_alerts, 10000);
function ajax_alerts(){
	var url = '?action=get_alerts';
	$.post(url, function(data){
		alerts.innerHTML = data;
		ajax_new_alerts();
});
}
function ajax_new_alerts(){
	var url = '?action=new_alert';
	$.post(url, function(donnees){
		if(donnees > 0)
		{
			var message = "Vous avez ";
			message += donnees;
			message += " nouvelles alertes";
			toastr["success"](message, "Message Système")
			toastr.options = {
			  "closeButton": true,
			  "debug": false,
			  "newestOnTop": false,
			  "progressBar": true,
			  "positionClass": "toast-bottom-left",
			  "preventDuplicates": false,
			  "onclick": null,
			  "showDuration": "1000",
			  "hideDuration": "1000",
			  "timeOut": "5000",
			  "extendedTimeOut": "1000",
			  "showEasing": "swing",
			  "hideEasing": "linear",
			  "showMethod": "fadeIn",
			  "hideMethod": "fadeOut"
			}
		}
	 });
}
</script>
<?php }
if($_PGrades_['PermsForum']['moderation']['seeSignalement'] == true OR $_Joueur_['rang'] == 1)
{
	?>
	<script>
	setInterval(ajax_signalement, 10000);
	function ajax_signalement(){
		var url = '?action=get_signalement';
		$.post(url, function(signalement){
			if(signalement > 0)
			{
				signalement.innerHTML = signalement;
				var message = "Il y'a ";
				message += signalement;
				message += ' nouveaux signalements !';
				toastr["error"](message, "Message système")
				toastr.options = {
				  "closeButton": true,
				  "debug": true,
				  "newestOnTop": false,
				  "progressBar": true,
				  "positionClass": "toast-top-left",
				  "preventDuplicates": false,
				  "onclick": null,
				  "showDuration": "1000",
				  "hideDuration": "1000",
				  "timeOut": "5000",
				  "extendedTimeOut": "1000",
				  "showEasing": "swing",
				  "hideEasing": "linear",
				  "showMethod": "fadeIn",
				  "hideMethod": "fadeOut"
				}
			}
		});
	}
	</script>
	<?php 
}
?>
<script>$('document').ready(function() {

    var checked = [];

    $("input:checkbox[name=selection]").each(function() {
        $(this).click(function() {

            checked = $("input:checkbox[name=selection]:checked");

            if (checked.length > 0) {
                $('#popover').css('display', '')
            }
            else {
                $('#popover').css('display', 'none');
            }
        })
    });

    $('#sel-form').submit(function() {
        var $form = $(this);
        checked.each(function() {
            $('<input>').attr({
                type: 'hidden',
                name: 'id[]',
                value: $(this).val()
            }).appendTo($form);
        });
    });

});
</script>
<?php 
if($_GET['page'] == "profil")
{
?><script>previewTopic($("#signature"));</script><?php
}
if(isset($_GET['setTemp']) && $_GET['setTemp'] == 1)
{
	?><script> $( document ).ready(function() { Snarl.addNotification({ title: '', text: 'Votre nouveau mot de passe vous a été envoyé par mail !', icon: '<span class=\'glyphicon glyphicon-ok\'></span>});});</script>;<?php
}
if(isset($_GET['send']))
{
	?><script>
		$(document).ready(function() {
			Snarl.addNotification({
				title: "Messagerie",
				text: "Votre message a bien été envoyé !",
				icon: '<i class="far fa-paper-plane"></i>'
			});
		});
		</script><?php
}
?></div>
</body>
</html>