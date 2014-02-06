<?php echo $this->Form->create('DietType', array('action' => 'add')); ?>

<div class="Formulario">
	<fieldset id="Menu_Detail">
			<b>Detalhamento</b><br><br>

			<?php echo $this->Form->input('DietType.nome',array('label' => 'Nome do tipo de Dieta: <br>', 'required'=>'required','id' => 'nome')); ?>
			
	</fieldset>
</div>

<?php echo $this->Form->end('Cadastrar'); ?>