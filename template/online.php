<!DOCTYPE html>
<html>

<body>
	<?php include('module/_header.php'); ?>

	<?php

	if (!empty($_GET['module'])) {

		$module = $_GET['module'];
		include('module/' . $module . '.php');
	} else {

		include('module/_index.php');
	}

	?>

	<?php include('module/_footer.php'); ?>
</body>

</html>
