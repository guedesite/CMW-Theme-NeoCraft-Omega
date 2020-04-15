<?php if(isset($_Joueur_))
{ ?><!--Vérif si le joueur est co -->
	<div class="neo-background-cale neo-center-simple" >
	<div class="neo-row-padding">
		<div class="neo-col neo-margin-right-20 neo-margin-left-20" style="width:60%;">
			<div  style="width:100%;" class="neo-hover-opacity hvr-float-shadow  ">		
				<div style="width:auto;" class="neo-xbackground neo-xtransforme-2  ">
					<div class="neo-xbackground neo-xtransforme-1 " style="padding:1px;">
						<p class="neo-text neo-xtransforme-2" style="margin-top:10px;font-size:30px;text-transform: uppercase;"><b>Vos alertes</b></p>
					</div>
				</div>
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
						<caption>Tableau récapitulatif de vos alertes </caption>
						<tr class="neo-light-grey">
							<th>Topic suivie</th>
							<th>Type d'alerte</th>
							<th>Auteur de l'alerte</th>
						</tr>
					</thead><?php
						$req_answer = $_JoueurForum_->get_like_dislike();
						while($answer_liked = $req_answer->fetch())
						{
							if($answer_liked['vu'] == '0')
							{
								$a = $bddConnection->prepare('SELECT * FROM cmw_forum_answer WHERE id_topic = :id');
								$a->execute(array(
									'id' => $answer_liked['id_topic']
								));
								$da = $a->fetchAll();
								foreach($da as $key => $value)
								{
									if($da[$key]['id'] == $answer_liked['id_answer'])
									{
										$ligne = $key;
									}
								}
								$ligne++;
								unset($page);
								unset($d);
								$tour = 1;
								while($d == FALSE)
								{
									$nb = 20 * $tour;
									if($ligne <= $nb)
									{
										$page = $tour;
										$d = TRUE;
									}
									else
									{
										$tour++;
									}
								}
								?><tr class="neo-white">
									<td><?php $topic = $bddConnection->prepare('SELECT * FROM cmw_forum_post WHERE id = :id'); 
									$topic->execute(array(
										'id' => $answer_liked['id_topic']
									));
									$topicd = $topic->fetch();
									echo $topicd['nom'];
									?></td>
									<td><?php if($answer_liked['Appreciation'] == 1)
									{
										?>Quelqu'un a aimé votre réponse <?php
									}
									else
									{
										?>Quelqu'un n'a pas aimé votre réponse<?php 
									}
									?></td>
									<td><a href="index.php?action=alerts_vu&page=post&id=<?php echo $answer_liked['id_topic']; ?>&page_post=<?php echo $page; ?>&id_answer=<?php echo $answer_liked['id_answer']; ?>&likeur=<?php echo $answer_liked['pseudo_likeur']; ?>#<?php echo $answer_liked['id_answer']; ?>"> <?php echo $answer_liked['pseudo_likeur']; ?></a></td>
								</tr><?php 
							}
						}
						$req_topic = $_JoueurForum_->get_new_answer();
						while($donnees_new = $req_topic->fetch())
						{
							if($donnees_new['pseudo'] != $donnees_new['last_answer_pseudo'] AND $donnees_new['last_answer_pseudo'] != NULL AND $donnees_new['vu'] == 0)
							{
								$b = $bddConnection->prepare('SELECT * FROM cmw_forum_answer WHERE id_topic = :id');
								$b->execute(array(
									'id' => $donnees_new['id_topic']
								));
								$bd = $b->fetchAll();
								foreach($bd as $key => $value)
								{
									if($bd[$key]['id'] == $donnees_new['last_answer_int'])
									{
										$reponse = $key + 1;
										$ligne = $key + 1;
									}
								}
								$ligne++;
								unset($page);
								unset($d);
								$tour = 1;
								while($d != TRUE)
								{
									$nb = 20 * $tour;
									if($ligne <= $nb)
									{
										$page = $tour;
										$d = TRUE;
									}
									else
									{
										$tour++;
									}
								}
								?><tr class="neo-white">
									<td><?php
									echo str_replace('[NOPE]', ' ', $donnees_new['nom']); ?></td>
									<td>Une nouvelle réponse est apparue ! </td>
									<td><a href="index.php?action=alerts_rep&page=post&id=<?php echo $donnees_new['id_topic']; ?>&page_post=<?php echo $page; ?>&answer=<?php echo $bd[$reponse]['id']; ?>">Réponse de <?php echo $donnees_new['last_answer_pseudo']; ?></a></td>
								</tr>
								<?php
							}
						}
						?>
				</table>
			</div>
	</div>
</div><?php
}
else
	header('Location: index.php');
