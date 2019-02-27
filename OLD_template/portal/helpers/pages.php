<?php
	$page = 'abrank';
	$section = 'section1';
	if (isset($_GET['data'])){
		if($_GET['data'] == 'mutationpredict'){
			$page = 'mutationpredict';
			$section = 'section2';
		} else if ($_GET['data'] == 'keyscore'){
			$page = 'keyscore';
			$section = 'section3';
		}
	}
	$results = 25;
	if (isset($_GET['results'])) $results = intval($_GET['results']);
	$pageNum = 1;
	if (isset($_GET['page'])) $pageNum = intval($_GET['page']);
	$limitResults = 'LIMIT ' . $results . ' OFFSET ' . (($pageNum - 1) * $results);
	
	function gradient($rel){
		$score = ($rel > 0.5) ? $rel : (0.9 - $rel);
		$opacity = round(pow($score, 5) * 1000) / 1000;
		$color = ($rel > 0.5) ? '127, 227, 209' : '255, 140, 154';
		return 'rgba(' . $color . ', ' . $opacity . ')';
	}
	function linkGene($gene){
		return '<a href="https://www.ncbi.nlm.nih.gov/gene/?term=' . $gene . '" target="_blank">' . $gene . '</a>';
	}
?>