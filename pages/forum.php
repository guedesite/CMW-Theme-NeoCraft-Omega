
<div class="neo-background-cale text-center" >
	<div class="neo-center">
		<div style="width:auto;" class="neo-xbackground neo-xtransforme-2  ">
			<div class="neo-xbackground neo-xtransforme-1 " style="padding:1px;">
				<p class="neo-text-header-small  neo-xtransforme-2" style="margin-top:10px;text-transform: uppercase;"><b>Forum</b></p>
			</div>
		</div>
	</div>
	<div class="neo-center-small" style="margin-top:10px;">
		<div class="neo-xbackground neo-radius" style="padding:10px;">
			<p style="max-width:50%;" class="neo-text"><center><strong>
			Bienvenue sur le forum de <?php echo $_Serveur_['General']['name']; ?>,
				Ici vous pourrez échanger et partager avec toute la communauté du serveur !
				<?php if($_Joueur_['rang'] == 1 OR $_PGrades_['PermsForum']['general']['modeJoueur'] == true){?>
 				<br><a href="?action=mode_joueur" class="neo-button neo-gray">Passer en mode visuel <?php echo ($_SESSION['mode']) ? "Administrateur" : "Joueur"; ?></a>
				
				<?php } ?>
			</strong></center></p>
		</div>
	</div>
</div>
<div class="neo-background-cale" >
	<div class="neo-center">

<?php 
$fofo = $_Forum_->affichageForum();
for($i = 0; $i < count($fofo); $i++)
{ ?>
	<div class="neo-xbackground neo-radius" style="padding:15px;margin-top:25px;"><?php 
	if($_PGrades_['PermsDefault']['forum']['perms'] >= $fofo[$i]['perms'] OR ($_Joueur_['rang'] == 1 AND !$_SESSION['mode']) OR $fofo[$i]['perms'] == 0)
	{
	?>
			<?php if(isset($_Joueur_) AND ($_PGrades_['PermsForum']['general']['deleteForum'] == true OR $_Joueur_['rang'] == 1) AND !$_SESSION['mode']){ ?>
				<div class="row ">
						<div class="col-ms-3 col-3">
							<div class="neo-dropdown-click " style="width:100%;">
								<button onclick="var x = document.getElementById('modif-ordre'); if (x.className.indexOf('neo-show') == -1) { x.className += ' neo-show'; } else {  x.className = x.className.replace(' neo-show', ''); }" class="neo-button neo-green" style="width:100%;" >Modifier l'ordre</button>
								<div id="modif-ordre" class="neo-hide neo-dropdown-content neo-bar-block neo-border neo-center-simple" style="margin-left:-5%;">
									<a class="neo-bar-item neo-button hvr-forward" href="?action=ordreForum&ordre=<?=$fofo[$i]['ordre']; ?>&id=<?=$fofo[$i]['id']; ?>&modif=monter"><i class="fas fa-arrow-up"></i> Monter d'un cran</a>
									<a class="neo-bar-item neo-button hvr-forward" href="?action=ordreForum&ordre=<?=$fofo[$i]['ordre']; ?>&id=<?=$fofo[$i]['id']; ?>&modif=descendre"><i class="fas fa-arrow-down"></i> Descendre d'un cran</a>
								</div>
							</div>
						</div>
						
						<div class="col-ms-3 col-3">
							<div class="neo-dropdown-click" style="width:100%;">
								<button onclick="var x = document.getElementById('modif-perm'); if (x.className.indexOf('neo-show') == -1) { x.className += ' neo-show'; } else {  x.className = x.className.replace(' neo-show', ''); }" style="width:100%;" class="neo-button neo-green"  >Modifier les permissions</button>
								<div id="modif-perm" class="neo-hide neo-dropdown-content neo-bar-block neo-border neo-center-simple" style="margin-left:-5%;">
									<input type="hidden" name="id" value="<?=$fofo[$i]['id'];?>" />
									  <a class="neo-bar-item neo-button"><input type="number" name="perms" value="<?=$fofo[$i]['perms'];?>" class="form-control"></a>
									  <button type="submit" class="neo-bar-item neo-button hvr-forward">Modifier</button>
								</div>
							</div>
						</div>

					  <a href="?action=remove_forum&id=<?php echo $fofo[$i]['id']; ?>" class="neo-button neo-red col-ms-3 col-3">Supprimer</a>
						  
				  </div>
				 <?php } 
	}?>
		<div style="overflow-x:auto;">
		<table class="neo-table neo-striped neo-bordered">
		
		<thead>
			<tr>
				<th colspan="5" style="width: <?=(($_Joueur_['rang'] == 1 OR $_PGrades_['PermsForum']['general']['deleteCategorie'] == true) AND !$_SESSION['mode']) ? '75%' : '100%';?>;"><h2 class="text-center"><?php echo $fofo[$i]['nom']; ?></h2></th>
			</tr>
		</thead>
<?php
$categorie = $_Forum_->infosForum($fofo[$i]['id']);
?>
    <tbody>
<?php   for($j = 0; $j < count($categorie); $j++) { 
			
			$derniereReponse = $_Forum_->derniereReponseForum($categorie[$j]['id']);
			if(($_Joueur_['rang'] == 1 AND !$_SESSION['mode']) OR $_PGrades_['Permsdefault']['forum']['perms'] >= $categorie[$j]['perms'] OR $categorie[$j]['perms'] == 0)
			{
			?>
            <tr>

				<td style="width: 3%;"><?php if($categorie[$j]['img'] == NULL) { ?><a href="?&page=forum_categorie&id=<?php echo $categorie[$j]['id']; ?>"><i class="material-icons">chat</i></a><?php }
					else { ?><a href="?page=forum_categorie&id=<?php echo $categorie[$j]['id']; ?>"><i class="material-icons"><?php echo $categorie[$j]['img']; ?></i></a><?php }?></td>
				<td style="width: 32%;"><a href="?&page=forum_categorie&id=<?php echo $categorie[$j]['id']; ?>"><?php echo $categorie[$j]['nom']; ?></a>
				<?php 	if($_Joueur_['rang'] == 1 AND !$_SESSION['mode'])
							$perms = 100;
						elseif($_PGrades_['PermsDefault']['forum']['perms'] > 0)
							$perms = $_PGrades_['PermsDefault']['forum']['perms'];
						else
							$perms = 0;

				$sousforum = $bddConnection->prepare('SELECT * FROM cmw_forum_sous_forum WHERE id_categorie = :id_categorie AND perms <= :perms');
							$sousforum->execute(array(
								'id_categorie' => $categorie[$j]['id'],
								'perms' => $perms
							));
							$sousforum = $sousforum->fetchAll(); 
							if(count($sousforum) != 0)
							{ ?><br/><small>
						<div class="dropdown">
						<a class="dropdown-toggle" href="sous-forum<?php echo $categorie[$j]['id']; ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="width: 99.5%;">
						Sous-forum  :<?php echo count($sousforum); ?>
						</a>
						<?php if(count($sousforum) != "0") { ?>
						<div class="dropdown-menu" aria-labelledby="sous-forum<?php echo $categorie[$j]['id']; ?>">
							<?php for($s = 0; $s < count($sousforum); $s++) {
								?><a class="dropdown-item neo-button hvr-forward" href="?&page=forum_categorie&id=<?php echo $categorie[$j]['id']; ?>&id_sous_forum=<?php echo $sousforum[$s]['id']; ?>"><?php echo $sousforum[$s]['nom']; ?></a>
							<?php } ?>
						</div>
						<?php } ?>
						</div></small>
				<?php } ?>
				</td>
			<td class="text-center"><a href="?&page=forum_categorie&id=<?php echo $categorie[$j]['id']; ?>"><?php echo $CountTopics = $_Forum_->compteTopicsForum($categorie[$j]['id']); ?><br/><span class="text-uppercase">Discussions</span></a></td>
			<td class="text-center"><a href="?page=forum_categorie&id=<?=$categorie[$j]['id']; ?>"><?=$_Forum_->compteMessages($categorie[$j]['id']) + $CountTopics; ?><br/><span class="text-uppercase">Messages</span></a></td>
			<td class="text-center"><?php if($derniereReponse) { ?> 
					<a href="?page=post&id=<?php echo $derniereReponse['id']; ?>" title="<?=$derniereReponse['titre'];?>">Dernier: <?php $taille = strlen($derniereReponse['titre']);
					echo substr(str_replace('[NOPE]', ' ', $derniereReponse['titre']), 0, 15);
					if(strlen($taille > 15)){ echo '...'; } ?><br/><?=$derniereReponse['pseudo'];?>, Le <?php $date = explode('-', $derniereReponse['date_post']); echo '' .$date[2]. '/' .$date[1]. '/' .$date[0]. ''; ?></a>
			<?php
				}
				else { ?><p> Il n'y a pas de sujet dans ce forum </p> <?php } 
				?></td>
			<?php
				if(isset($_Joueur_) AND ($_Joueur_['rang'] == 1 OR $_PGrades_['PermsForum']['general']['deleteCategorie'] == true) AND !$_SESSION['mode'])
				{
					?><td><a href="?action=remove_cat&id=<?php echo $categorie[$j]['id']; ?>" style="text-align: left;"><i class="fas fa-trash-alt"></i></a>
					<div class="dropdown" style="display: inline; text-align: center;">
						<button type="button" class="btn btn-success dropdown-toggle" id="Perms<?=$categorie[$j]['id'];?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-edit"></i>
						</button>
						<div class="dropdown-menu">
							<form action="?action=modifPermsCategorie" method="POST">
								<input type="hidden" name="id" value="<?=$categorie[$j]['id'];?>" />
								<a class="dropdown-item neo-button"><input type="number" name="perms" value="<?=$categorie[$j]['perms'];?>" class="form-control"></a>
								<button type="submit" class="dropdown-item text-center neo-button hvr-forward">Modifier</button>
							</form>
						</div>
					</div>
				
					<div class="dropdown" style="display: inline; text-align: center;">
						<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-list"></i>
						</button>
						<div class="dropdown-menu">
						    <a class="dropdown-item neo-button hvr-forward" href="?action=ordreCat&ordre=<?=$categorie[$j]['ordre']; ?>&id=<?=$categorie[$j]['id']; ?>&forum=<?=$categorie[$j]['forum'];?>&modif=monter"><i class="fas fa-arrow-up"></i> Monter d'un cran</a>
						    <a class="dropdown-item neo-button hvr-forward" href="?action=ordreCat&ordre=<?=$categorie[$j]['ordre']; ?>&id=<?=$categorie[$j]['id']; ?>&forum=<?=$categorie[$j]['forum'];?>&modif=descendre"><i class="fas fa-arrow-down"></i> Descendre d'un cran</a>
						</div>
					</div>
					<a href=<?php if($categorie[$j]['close'] == 0) { ?>"?action=lock_cat&id=<?=$categorie[$j]['id'];?>&lock=1" title="Fermer le forum"><i class="fa fa-unlock-alt"<?php } else { ?>"?action=unlock_cat&id=<?=$categorie[$j]['id'];?>&lock=0" title="Ouvrir le forum"><i class="fa fa-lock"<?php } ?> aria-hidden="true"></i></a></td><?php
				}
?>
			</tr>
			<?php }
			} ?>
	</tbody>
	
</table>
 </div>
</div>
<?php
	}
if($_PGrades_['PermsForum']['general']['addForum'] == true OR $_Joueur_['rang'] == 1 AND !$_SESSION['mode'])
{
	?>
	<a class="neo-button neo-gray neo-radius" style="width:100%;margin-top:20px;" OnClick='$("#add_forum").toggle(350);'>Ajouter une Catégorie</a>
	<div style="display:none;padding:15px;margin-top:20px;" class="neo-center neo-xbackground neo-radius" id="add_forum">
		<form action="?action=create_forum" method="post">
			<div>
				<p class="text-center"><label class="control-label" for="nomFo">Nom de la catégorie</label></p>
				<input type="text" name="nom" id="nomFo" maxlength="80" class="form-control" required>
			</div>
			<br/>
			<p class="text-right">
				<button type="submit" class="neo-button neo-green">Créer une catégorie</button>
			</p>
		</form>
	</div>
<?php
}
if(isset($_Joueur_) AND ($_Joueur_['rang'] == 1 OR $_PGrades_['PermsForum']['general']['addCategorie'] == true ) AND !$_SESSION['mode'])
{
	?>
	<a class="neo-button neo-gray neo-radius" style="width:100%;margin-top:20px;" OnClick='$("#add_categorie").toggle(350);'> Ajouter un Forum</a>
	<div style="display:none;padding:15px; margin-top:20px;" class="neo-center neo-xbackground neo-radius" id="add_categorie">
			<form action="?action=create_cat" method="post"><br>
				<div class="from-group row">
						<label class="col-md-6 col-form-label" for="nomCat">Nom du Forum : </label>
						<div class="col-md-6">
							<input type="text" name="nom" id="nomCat" maxlength="40" class="form-control" required />
						</div>
				</div><br>
				<div class="froum-group row">
						<label class="col-md-6 col-form-label" for="img">Icon disponible sur : <a href="https://design.google.com/icons/" target="_blank">https://design.google.com/icons/</a></label>
						<div class="col-md-6">
							<input type="text" name="img" id="img" maxlength="300" class="form-control" />
						</div>
				</div><br>
				<div class="form-group row">
						<label class="col-md-6 col-form-label">Catégorie : </label>
						<div class="col-md-6">
							<select name="forum" class="form-control" required>
								<?php
								for($z = 0; $z < count($fofo); $z++)
								{
									?><option value="<?php echo $fofo[$z]['id']; ?>"><?php echo $fofo[$z]['nom']; ?></option><?php
								}
								?></select>
						</div><br/>
				</div><br>
				<p class="text-right">
					<button type="submit" class="neo-button neo-green">Créer un Forum</button>
				</p>
			</form>
	</div>

<?php
}
?>
		</div>
	</div>
