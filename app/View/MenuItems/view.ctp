<b>Detalhamento</b><br><br>
	<p><span>Código: </span><?php echo $menu_item['MenuItem']['id']; ?></p>
	<p><span>Nome: </span><?php echo $menu_item['MenuItem']['nome']; ?></p>
	<p><span>Tipo De Cardápio:



		<p><span>Tipo de Setor: </span>
	<?php 
				$hasType = array();
				foreach ($menu_types as $type) {
					$k = $type['MenuType']['id'];
					$v = $type['MenuType']['nome'];
					$hasType[$k] = $v;
				 	# code...
				 };
echo($hasType[$menu_item['Sector']['tipo_id']]);


				 ?>
