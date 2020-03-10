<?php 
if(isset($_POST["name"]) AND isset($_POST["email"])){
	mail('contact@neocraft.fr', 'NeoCraft oméga contact'.htmlspecialchars($_POST["name"]).' - '.htmlspecialchars($_POST["email"]), htmlspecialchars($_POST['message']));
}
?>