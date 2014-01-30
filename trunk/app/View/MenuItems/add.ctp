<?php echo $this->Form->create('MenuItem', array('action' => 'add')); ?>

<div class="Formulario">
	<fieldset id="Menu_Detail">
			<b>Detalhamento</b><br><br>

			<?php echo $this->Form->input('MenuItem.nome',array('label' => 'Nome do Item: <br>', 'required'=>'required','id' => 'nome')); ?>
			<?php 
				$hasType = array();
				foreach ($menu_types as $type) {
					$k = $type['MenuType']['id'];
					$v = $type['MenuType']['nome'];
					$hasType[$k] = $v;
				 	# code...
				 };
				echo $this->Form->input('MenuItem.tipo_id', array('label'=> 'Tipo de Item: <br>', 'required'=>'required', 'options' => $hasType, 'class'=>' form-inline form-control')); ?>
		
	</fieldset>
</div>

<?php echo $this->Form->end('Cadastrar'); ?>