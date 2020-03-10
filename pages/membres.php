<?php 
include('theme/' .$_Serveur_['General']['theme']. '/app/membres.class.php');
$Membres = new MembresPage($bddConnection);
if(isset($_GET['page_membre']))
{
	$page = htmlentities($_GET['page_membre']);
	$membres = $Membres->getMembres($page);
}
else
{
	$page = 1;
	$membres = $Membres->getMembres();
}
?>

<div class="neo-background-cale text-center" >
	<div class="neo-center">
		<div style="width:auto;" class="neo-xbackground neo-xtransforme-2  ">
			<div class="neo-xbackground neo-xtransforme-1 " style="padding:1px;">
				<p class="neo-text-header-small  neo-xtransforme-2" style="margin-top:10px;text-transform: uppercase;"><b><i class="fa fa-shopping-cart"></i> Membres</b></p>
			</div>
		</div>
	</div>
	<div class="neo-center-small" style="margin-top:10px;">
		<div class="neo-xbackground neo-radius" style="padding:10px;">
			<p style="max-width:50%;" class="neo-text"><center><strong>
			Ici, vous pourrez consulter la liste des membres du site, voir leur profil ...
						<input type="text" id="neo-s-input" class="neo-input neo-margin-right-5 neo-margin-left-5" style="width:90%;" onkeyup="neosearch()" placeholder="Chercher un joueur">
			</strong></center></p>
		</div>
	</div>
</div>

<div class="neo-background-cale" style="margin-top:75px;">
	<div class="neo-center">
		<div class="neo-xbackground neo-radius" style="padding:10px;">
			 <table id="neo-s-index" class="neo-table neo-hoverable neo-striped neo-bordered">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Pseudo</th>
						<th scope="col">Grade Site</th>
						<th scope="col">Jetons</th>
					</tr>
				</thead>
				<tbody id="tableMembre">
					<?php
						foreach($membres as $value)
						{
							$Img = new ImgProfil($value['id']);
							?><tr>
								<td><a href="?page=profil&profil=<?=$value['pseudo'];?>" style="color: inherit;"><?=$value['id'];?></a></td>
								<td><a href="?page=profil&profil=<?=$value['pseudo'];?>" style="color: inherit;"><img src='<?=$Img->getImgToSize(32, $width, $height);?>' style='width: <?=$width;?>px; height: <?=$height;?>px;' alt='Profil' /> <?=$value["pseudo"];?></a></td>
								<td><a href="?page=profil&profil=<?=$value['pseudo'];?>" style="color: inherit;"><?=$Membres->gradeJoueur($value["pseudo"]);?></td>
								<td><a href="?page=profil&profil=<?=$value['pseudo'];?>" style="color: inherit;"><?=$value['tokens'];?></a></td>
							</tr>
							<?php
						}
					?>
				</tbody>
			</table>
		</div>					
	</div>					
</div>

<script>
function neosearch() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("neo-s-input");
  filter = input.value.toUpperCase();
  table = document.getElementById("neo-s-index");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
