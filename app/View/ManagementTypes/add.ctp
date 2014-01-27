<?php echo $this->Form->create('ManagementType', array('action' => 'add')); ?>

<div class="Formulario">
	<fieldset id="Menu_Detail">
			<b>Detalhamento</b><br><br>

			<?php echo $this->Form->input('ManagementType.nome',array('label' => 'Nome do tipo de Administrador: <br>', 'required'=>'required','id' => 'nome')); ?>
			
	</fieldset>
</div>

<?php echo $this->Form->end('Cadastrar'); ?>