<b>Detalhamento</b><br><br>
	<p><span>Código: </span><?php echo $sector['Sector']['id']; ?></p>
	<p><span>Nome: </span><?php echo $sector['Sector']['nome']; ?></p>
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
	<p><span>Latitude: </span><?php echo $sector['Sector']['latitude']; ?></p>
	<p><span>Longitude: </span><?php echo $sector['Sector']['longitude']; ?></p>
	<?php $latitude = $sector['Sector']['latitude']; ?>
	<?php $longitude =  $sector['Sector']['longitude']; ?>

<?php $latlong = $latitude."_".$longitude; ?>

<td><?php echo $this->Html->link($sector['Sector']['nome'],
array('controller' => 'sectors', 'action' => 'route', $latlong)); ?></td>