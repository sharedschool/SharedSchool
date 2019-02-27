<h1>MutationPredict</h1>
<?php
	$rows = getQuery('SELECT * FROM mutationpredict ORDER BY oncogenicity DESC ' . $limitResults);
	$totalRows = intval(getQuery('SELECT COUNT(*) FROM abrank')[0]['COUNT(*)']);
?>
<table id="data" class="mutationpredict">
	<thead>
		<tr>
			<th>Mutation/Variant</th>
			<th>Gene of Origin</th>
			<th>Variant Class</th>
			<th>Oncogenicity Score</th>
			<th>Novel?</th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach($rows as $row){
				$score = $row['oncogenicity'];
				$bg = gradient($score);
				echo '<tr style="background-color:' . $bg . ';">';
				foreach($row as $key=>$value){
					if ($key == 'genes'){
						$value = linkGene($value);
					}
					echo '<td>' . $value . '</td>';
				}
				echo '</tr>';
			}
			if (count($rows) == 0){
				echo '<tr><td colspan="5">There are no results</td></tr>';
			}
		?>
	</tbody>
</table>