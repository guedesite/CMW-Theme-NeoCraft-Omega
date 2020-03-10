
<div class="neo-background-cale text-center" >
	<div class="neo-center">
		<div style="width:auto;" class="neo-xbackground neo-xtransforme-2  ">
			<div class="neo-xbackground neo-xtransforme-1 " style="padding:1px;">
				<p class="neo-text-header-small  neo-xtransforme-2" style="margin-top:10px;text-transform: uppercase;"><b>Ban-List</b></p>
			</div>
		</div>
	</div>

</div>

<div class="neo-background-cale" style="margin-top:75px;">
	<div class="neo-center">
		<div class="tabbable">
				<?php if(count($jsonCon) > 0) {
				require('modele/app/chat.class.php');
				$Chat = new Chat($jsonCon);?>
				<div class="neo-xbackground neo-radius">
					<div class="neo-row-padding" style="padding:10px;">
					<?php for($i = 0; $i < count($jsonCon); $i++) {?>
						 <a href="javascript:void(0)" onclick="openShop(event, 'categorie-<?php echo $i; ?>');">
							<div class="hvr-backward neo-col <?php if($i == 0) { echo 'neo-border-gray'; } ?> tablink neo-bottombar neo-hover-light-grey neo-padding" style="<?php if(count($jsonCon) == 1) { echo 'width:100%'; } elseif(count($jsonCon) == 2) { echo 'width:50%'; } elseif(count($jsonCon) == 3) { echo 'width:33.33%'; } elseif(count($jsonCon) == 4) { echo 'width:25%'; } elseif(count($jsonCon) == 5) { echo 'width:20%'; } elseif(count($jsonCon) == 6) { echo 'width:16.66%'; } elseif(count($jsonCon) == 7) { echo 'width:14.28%'; } elseif(count($jsonCon) == 8) { echo 'width:12.5%'; } elseif(count($jsonCon) == 9) { echo 'width:11.11%'; } elseif(count($jsonCon) == 10) { echo 'width:100%'; } ?>"><?php echo $lecture['Json'][$i]['nom']; ?></div>
						 </a>
					<?php }?>
					</div>
				</div>
				<div class="neo-xbackground neo-radius" style="padding:10;px;margin-top:20px;">	
				<div class="tab-content">
					<?php for($i=0; $i < count($jsonCon); $i++) {?>
					<div id="categorie-<?php echo $i; ?>" class="neo-animate-opacity neo-tabs" style="display:none;">
						<table class="neo-table neo-striped neo-bordered neo-hoverable">
							<thead>
								<tr class="neo-light-grey">
									<th>Pseudo</th>
									<th>Date</th>
									<th>Source</th>
									<th>Durée</th>
									<th>Raison</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								foreach($banlist[$i] as $element) {?>
								<tr class="neo-white">
									<td title="<?= $element->uuid?>"><?= $element->name?></td>
									<td><?= $element->created ?></td>
									<td><?= $Chat->formattage($element->source); ?></td>
									<td><?= $element->expires ?></td>
									<td><?= $element->reason ?></td>
								</tr>
							<?php }?>
							</tbody>
						</table>
					</div>
					<?php }?>
				</div>
				</div>
			<?php }
				else
				{ ?>
			<h3 class="text-center">Veuilliez relier votre serveur.</h3>
			<?php } ?>
			</div>
		</div>
	</div>
</div>

