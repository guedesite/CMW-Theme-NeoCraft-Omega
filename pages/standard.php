    <?php if($pages['titre'] == "" && $pageContenu[$j][0] == ""){ ?>
    <style>
    .error-template {padding: 40px 15px;text-align: center;}
    .error-actions {margin-top:15px;margin-bottom:15px;}
    .error-actions .btn { margin-right:10px; }
    </style>
    <div class="container">
    <div class="neo-xbackground neo-radius" style="padding:15px;margin:5%;">
        <div class="row">
            <div class="col-md-12">
                <div class="error-template">
                    <h1>
                        Oups!</h1>
                    <h2>
                        Erreur 404</h2>
                    <div class="error-details">
                        Désolé mais la page demandé est introuvable ! :(
                    </div>
                    <div class="error-actions">
                        <a href="index.php" class="neo-button neo-gray">
                            Retourner sur l'accueil</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <?php } else { ?>
			<div class="neo-background-cale text-center" >
				<div class="neo-center">
					<div style="width:auto;" class="neo-xbackground neo-xtransforme-2  ">
						<div class="neo-xbackground neo-xtransforme-1 " style="padding:1px;">
							<p class="neo-text-header-small  neo-xtransforme-2" style="margin-top:10px;text-transform: uppercase;"><b><?php echo $pages['titre']; ?></b></p>
						</div>
					</div>
				</div>
			</div>
			<div class="neo-background-cale" style="margin-top:75px;">
				<div class="neo-center">
					<div class="container neo-xbackground neo-radius" style="padding:10px;">
					<?php for($j = 0; $j < count($pages['tableauPages']); $j++) { ?>
						<h3 class="neo-center"><?php echo $pageContenu[$j][0]; ?></h3>
						<div><?php echo $pageContenu[$j][1]; ?></div>		
					<?php } ?>
					</div>
				</div>
			</div>
	<?php } ?>