<?php echo $this->Form->create('MenuType', array('action' => 'add')); ?>

<div class="Formulario">
	<fieldset id="Menu_Detail">
			<b>Detalhamento</b><br><br>
			<?php echo $this->Form->input('MenuType.id', array('type' => 'hidden')); ?>
			<?php echo $this->Form->input('MenuType.nome',array('label' => 'Nome do tipo de Cardápio: <br>', 'required'=>'required','id' => 'nome')); ?>
			
	</fieldset>
</div>

<?php echo $this->Form->end('Cadastrar'); ?>