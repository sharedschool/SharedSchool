<?php
	session_start();
	if (!isset($_SESSION['type'])) header('Location: /');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Portal | SharedSchool</title>
	<?php include './helper/includes.php'; ?>
</head>
<body>

<!-- Navigation bar -->
<?php include './helper/portal_navbar.php'; ?>

Portal!!!

</body>
</html>