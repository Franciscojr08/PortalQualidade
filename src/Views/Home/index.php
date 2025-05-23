<?php

use PortalQualidade\Core\Functions;

?>

<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Portal da Qualidade</title>
	<?php
		Functions::addFavicon();
		Functions::addStyleSheet(["css/style.css"]);
	?>
</head>
<body>
<?php Functions::renderMenu(); ?>
<br>
<!--Implementar home-->
<br>
<?php Functions::renderFooter(); ?>
<?php Functions::addScript(["js/Sistema/sistema.js"]); ?>
</body>
</html>