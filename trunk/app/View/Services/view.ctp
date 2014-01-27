<b>Detalhamento</b><br><br>
	<p><span>Código: </span><?php echo $service['Service']['id']; ?></p>
	<p><span>Nome: </span><?php echo $service['Service']['nome']; ?></p>
	<p><span>Preço: </span><?php echo $service['Service']['preco']; ?></p>
	<p><span>Setor: </span>
	<?php 
				$hasType = array();
				foreach ($sectors as $sector) {
					$k = $sector['Sector']['id'];
					$v = $sector['Sector']['nome'];
					$hasType[$k] = $v;
				 	# code...
				 };
echo($hasType[$service['Service']['setor_id']]);


				 ?>
</p>
