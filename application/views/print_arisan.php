<!DOCTYPE html>
<html>
<head>
	<title>Print Data Join Arisan</title>
</head>
<body>
	<table>
		<tr>
			<th>NO</th>
			<th>NAMA</th>
		</tr>

		<?php 
		$no=1;
		foreach ($arisan = $ars) :
		?>

		<tr>
			<td><?php echo $no++?></td>
			<td><?php echo $ars['nama_arisan']?></td>
		</tr>
	<?php endforeach; ?>
	</table>

	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>