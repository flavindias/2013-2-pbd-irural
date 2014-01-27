<?php echo $this->Form->create('Service', array('action' => 'add')); ?>

<div class="Formulario">
	<fieldset id="Menu_Detail">
			<b>Detalhamento</b><br><br>

			<?php echo $this->Form->input('Service.nome',array('label' => 'Nome do Serviço: <br>', 'required'=>'required','id' => 'nome')); ?>
			<?php 
				$hasType = array();
				foreach ($sectors as $sector) {
					$k = $sector['Sector']['id'];
					$v = $sector['Sector']['nome'];
					$hasType[$k] = $v;
				 	# code...
				 };
				echo $this->Form->input('Service.setor_id', array('label'=> 'Setor Responsável: <br>', 'required'=>'required', 'options' => $hasType, 'class'=>' form-inline form-control')); ?>
			<?php echo $this->Form->input('Service.preco',array('label' => 'Preço: <br>','id' => 'preco')); ?>
	</fieldset>
</div>

<?php echo $this->Form->end('Cadastrar'); ?>