
<div id="accordion">
		<div>
			<h3> <a href="#">Auction Listing Preview</a></h3>
				<div style="overflow-x: hidden; overflow-y:auto;">
					<div style="width:830px; height: 540px; background:#FFFFFF;" align="center" class="ui-corner-all">
									<?php
									$templateName = $_POST['templateName'];
										if ($templateName == "card") {
											include('partsOut/preCards.php');
										}
										if ($templateName == "default") {
											include('partsOut/preD.php');
										}
										if ($templateName == "blue") {
											include('partsOut/preB.php');
										}
										if ($templateName == "orange") {
											include('partsOut/preO.php');
										}
										if ($templateName == "yellow") {
											include('partsOut/preY.php');
										}	
										if ($templateName == "soldier") {
											include('partsOut/preS.php');
										}		
										if ($templateName == "trains") {
											include('partsOut/preTrains.php');
										}		
									?>
					</div>
				</div>
			</div>
		<div>
			<h3> <a href="#">Empty Container</a></h3>
				<div style="overflow-x: hidden; overflow-y:auto;">
					<div style="width:830px; height: 540px; background:#FFFFFF;" align="center" class="ui-corner-all">
									<?php
//											include('partsOut/copyPaste.php');
									?>
					</div>
				</div>
			</div>
		<div>
			<h3><a href="#">Code Blocks</a></h3>
				<div style="padding-left:4px; overflow-x: hidden; overflow-y:auto;">
					<div style="float:left;">
						<?php include('partsOut/copyPaste.php'); ?>
					</div>
				</div>
		</div>

</div>


