<b>Detalhamento</b><br><br>
	<p><span>Código: </span><?php echo $sector['Sector']['id']; ?></p>
	<p><span>Tipo: </span><?php echo $sector['Sector']['tipo_id']; ?></p>




		<p><span>Tipo de Setor: </span>
	<?php 
				$hasType = array();
				foreach ($sector_types as $type) {
					$k = $type['SectorType']['id'];
					$v = $type['SectorType']['nome'];
					$hasType[$k] = $v;
				 	# code...
				 };
echo($hasType[$sector['Sector']['tipo_id']]);


				 ?>
	<p><span>Tipo: </span><?php echo $sector['Sector']['latitude']; ?></p>
	<p><span>Tipo: </span><?php echo $sector['Sector']['longitude']; ?></p>
