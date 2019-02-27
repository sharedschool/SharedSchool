<?php
	include('./helpers/sql.php');
	include('./helpers/pages.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portal | OncoCurate</title>
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/portal.css">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<!--<link rel="stylesheet" href="/https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">-->
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="/js/portal.js"></script>
	<?php
		if ($page == 'mutationpredict'){
			echo '<script type="text/javascript" src="/js/mutationpredict.js"></script>';
		} else {
			echo '<script type="text/javascript" src="/js/abrank.js"></script>';
		}
	?>
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-md navbar-dark darkblue">
		<div class="navbar-brand icon">
			<a class="" href="/">
				<img src="/img/icon_light.png" width="30" height="30">
				&nbsp;&nbsp;
				OncoCurate
			</a>
			<span style="color:#0FCDAF">Portal</span>
		</div>
		<button class="navbar-toggler collapsed hidden-sm-up float-xs-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icon-bar top-bar"></span>
			<span class="icon-bar middle-bar"></span>
			<span class="icon-bar bottom-bar"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item one <?php if ($page == 'abrank') echo 'active'; ?>">
					<a class="nav-link" href="?data=abrank">AbRank</a>
				</li>
				<li class="nav-item two <?php if ($page == 'mutationpredict') echo 'active'; ?>">
					<a class="nav-link " href="?data=mutationpredict">MutationPredict</a>
				</li>
				<li class="nav-item three <?php if ($page == 'keyscore') echo 'active'; ?>">
					<a class="nav-link " href="?data=keyscore">KeyScore</a>
				</li>
				<hr class="slide <?php echo $section; ?>">
			</ul>
		</div>
	</nav>
	<div class="container-fluid">
		<div style="height:4em"></div>
		<?php
			if ($page == 'mutationpredict'){
				include('./helpers/mutationpredict.php');
			} else if ($page == 'keyscore'){
				include('./helpers/keyscore.php');
			} else {
				include('./helpers/abrank.php');
			}
			if ($page == 'mutationpredict' || $page == 'abrank'){
				echo '<p>';
				$thisPage = '?data=' . $page . '&results=' . $results . '&page=';
				$soFar = ($pageNum - 1) * $results + count($rows);
				$prevPage = ($pageNum > 1);
				$nextPage = ($soFar < $totalRows);
				$pages = ceil($totalRows / $results);
				$gap = '&nbsp;&nbsp;|&nbsp;&nbsp;';
				if ($pages > 1) echo 'Page ' . $pageNum . $gap;
				if ($prevPage) echo '<a href="' . $thisPage . ($pageNum - 1) . '">Previous Page</a>' . $gap;
				if ($nextPage) echo '<a href="' . $thisPage . ($pageNum + 1) . '">Next Page</a>' . $gap;
				echo 'Results per page: ';
				for($i = 25; $i <= 100; $i += 25){
					if ($i == $results){
						echo '<a href="" style="color:gray">' . $i . '</a>';
					} else {
						echo '<a href="?data=' . $page . '&results=' . $i . '">' . $i . '</a>';
					}
					if ($i < 100) echo '&nbsp;&nbsp;';
				}
				echo '</p>';
			}
		?>
		</p>
		<?php include('../helpers/footer.php'); ?>
	</div>
</body>
</html>