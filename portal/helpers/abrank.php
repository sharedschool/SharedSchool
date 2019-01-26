<h1>AbRank</h1>
<?php
	$rows = getQuery('SELECT * FROM abrank ORDER BY relscore DESC ' . $limitResults);
	$totalRows = intval(getQuery('SELECT COUNT(*) FROM abrank')[0]['COUNT(*)']);
?>
<table id="data" class="abrank">
	<thead>
		<tr>
			<th>Article</th>
			<th>PMID</th>
			<th>Relevance Score</th>
			<th>Gene of Origin</th>
			<th>Extracted Variants</th>
			<th>KeyScore</th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach($rows as $row){
				$score = $row['relscore'];
				$bg = gradient($score);
				echo '<tr style="background-color:' . $bg . ';">';
				foreach($row as $key=>$value){
					if (/*$key == 'articles' ||*/ $key == 'pmids'){
						$value = '<a href="https://www.ncbi.nlm.nih.gov/pubmed/' . $row['pmids'] . '" target="_blank">' . $value . '</a>';
					} else if ($key == 'genes'){
						$value = linkGene($value);
					}
					echo '<td>' . $value . '</td>';
				}
				echo '<td><button class="brightblue keyscoreBtn">Add Rating</button></td>';
				echo '</tr>';
			}
			if (count($rows) == 0){
				echo '<tr><td colspan="6">There are no results</td></tr>';
			}
		?>
	</tbody>
</table>