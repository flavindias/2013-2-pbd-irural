
<?php echo $this->Form->create('Sector', array('action' => 'edit')); ?>

<div class="Formulario">
	<fieldset id="Menu_Detail">
			<b>Detalhamento</b><br><br>
			<?php echo $this->Form->input('Sector.id', array('type' => 'hidden')); ?>
			<?php echo $this->Form->input('Sector.nome',array('label' => 'Nome do Setor: <br>', 'required'=>'required','id' => 'nome')); ?>
			<?php 
				$hasType = array();
				foreach ($sector_types as $type) {
					$k = $type['SectorType']['id'];
					$v = $type['SectorType']['nome'];
					$hasType[$k] = $v;
				 	# code...
				 };
				echo $this->Form->input('Sector.tipo_id', array('label'=> 'Tipo de Setor: <br>', 'required'=>'required', 'options' => $hasType, 'class'=>' form-inline form-control')); ?>
			<?php echo $this->Form->input('Sector.latitude',array('label' => 'Latitude: <br>', 'required'=>'required','id' => 'latitude')); ?>
			<?php echo $this->Form->input('Sector.longitude',array('label' => 'Longitude: <br>', 'required'=>'required','id' => 'longitude')); ?>
			
	</fieldset>
</div>

<?php echo $this->Form->end('Salvar'); ?>