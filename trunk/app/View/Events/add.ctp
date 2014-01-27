<?php echo $this->Form->create('Event', array('action' => 'add')); ?>

<div class="Formulario">
	<fieldset id="Menu_Detail">
			<b>Detalhamento</b><br><br>

			<?php echo $this->Form->input('Event.nome',array('label' => 'Nome do Evento: <br>', 'required'=>'required','id' => 'nome')); ?>
			<?php 
				$hasType = array();
				foreach ($sectors as $sector) {
					$k = $sector['Sector']['id'];
					$v = $sector['Sector']['nome'];
					$hasType[$k] = $v;
				 	# code...
				 };
				echo $this->Form->input('Event.setor_id', array('label'=> 'Setor Responsável: <br>', 'required'=>'required', 'options' => $hasType, 'class'=>' form-inline form-control')); ?>
			<?php echo $this->Form->input('Event.data',array('label' => 'Data: <br>','id' => 'data')); ?>
			<?php echo $this->Form->input('Event.local',array('label' => 'Local: <br>','id' => 'local')); ?>
			<?php echo $this->Form->input('Event.horario',array('label' => 'Horário: <br>','id' => 'horario')); ?>
			<?php echo $this->Form->input('Event.preco',array('label' => 'Preço: <br>','id' => 'preco')); ?>
	</fieldset>
</div>

<?php echo $this->Form->end('Cadastrar'); ?>