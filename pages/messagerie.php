
<div class="neo-background-cale text-center" >
	<div class="neo-center">
		<div style="width:auto;" class="neo-xbackground neo-xtransforme-2  ">
			<div class="neo-xbackground neo-xtransforme-1 " style="padding:1px;">
				<p class="neo-text-header-small  neo-xtransforme-2" style="margin-top:10px;text-transform: uppercase;"><b><i class="fa fa-shopping-cart"></i> Messagerie</b></p>
			</div>
		</div>
	</div>

</div>
<div class="neo-background-cale" style="margin-top:75px;">	
	<div class="container neo-xbackground neo-radius" style="padding:15px;margin-bottom:10px;">	
		<div class="categories-edit">
			<ul class="nav nav-tabs" id="modifProfil">
				<li class="col-md-12"><a class="neo-button neo-green btn-block" style="margin-bottom: 15px" data-toggle="modal" data-backdrop="static" href="#modalRep"><center>Nouveau message</center></a></li>
			</ul>
		</div>
		<div class="tab-content">
			<div class="tab-pane active" style="margin-top: 10px;" id="infos">
				<?php
				$Messagerie = new Messagerie($bddConnection, $_Joueur_['pseudo']);
				$messages = $Messagerie->getConversations();
				if(!empty($messages['conv']))
				{
					?>
					<h3 class="text-center" style="margin-bottom: 15px;">Vous avez <?=$messages['nbConversations'];?> conversations</h3>
					<div id="accordion">
						<?php echo $messages['conv'];?>
						</div>
						<br>
						<nav aria-label="Pages Conversation">
						  <ul class="pagination" style="float: right;">
						  	<?php
						  	for($i = 1; $i <= $messages['nbPages']; $i++)
						  	{
						  		echo '<li class="page-item"><a class="page-link" onClick="getConversations('.$i.');">'.$i.'</a></li>';
						  	}
							?>
						  </ul>
						</nav>
					<?php 
				}
				?>
			</div>
	</div>
</div>
</div>
