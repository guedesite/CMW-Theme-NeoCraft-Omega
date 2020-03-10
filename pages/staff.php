<?php $Grade = Array('Administrateur', 'Administrateur', 'JUMP', 'Modérateur', 'Modérateur', 'Modérateur'); 
	  $Staff = Array('guedesite', 'NoobeYCraft', 'JUMP', 'YFox', 'Gareechi', 'Yazzukimo'); ?>


<div class="neo-background-cale text-center" >
	<div class="neo-center">
		<div style="width:auto;" class="neo-xbackground neo-xtransforme-2  ">
			<div class="neo-xbackground neo-xtransforme-1 " style="padding:1px;">
				<p class="neo-text-header-small  neo-xtransforme-2" style="margin-top:10px;text-transform: uppercase;"><b>Staff</b></p>
			</div>
		</div>
	</div>
</div>

<div class="neo-background-cale" style="margin-top:75px;">
	<div class="neo-center">
			<div class="staff">
				<div class="staff-team">
					<?php 
					if(count($Grade) != count($Staff))
					{
						echo 'ERREUR ARRAY';
					}
					else
					{
						for($i = 0; $i <= count($Staff) - 1; $i++) { 
							if($Grade[$i] == 'JUMP')
							{
								echo '</div><div class="staff-team">';
							}
							else
							{
								unset($Img);
								$Img = new ImgProfil($Staff[$i], 'pseudo');
								echo '
								<div>
									<h3 class="neo-text-header-small" style="font-size:24px;">'.$Staff[$i].'</h3>
									<div class="'.$Grade[$i].'">'.$Grade[$i].'</div>

									<img class="hvr-bounce-in cursor" src="'.$Img->getImgToSize(64, $width, $height).'">
								</div>
								';
							}
						}
					}
					?>
				</div>
			</div>
		</div>										
</div>