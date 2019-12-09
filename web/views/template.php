<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NuesCoop - Nos Unimos En Sueños</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include "modules/head.php"; ?>
  </head>
  <body>
		<?php

			if(isset($_GET['view']))
			{
				include 'modules/main.php';
			}
			else
			{
				include 'modules/main.php';
				// include 'modules/dashboard.php';
			}

			$mvc = new MVCcontroller();
			$mvc -> enlacesController();

			if(isset($_GET['view']))
			{
				include 'modules/footer.php';
			}
			else
			{
				include 'modules/footer.php';
			}
		?>

		<?php

			include 'modules/scripts.php';
			echo $mvc -> scriptsController();

		?>

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  </body>
</html>
