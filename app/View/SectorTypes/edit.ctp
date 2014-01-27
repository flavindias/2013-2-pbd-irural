
<?php echo $this->Form->create('SectorType', array('action' => 'edit')); ?>

<div class="Formulario">
	<fieldset id="Menu_Detail">
			<b>Detalhamento</b><br><br>
			<?php echo $this->Form->input('SectorType.id', array('type' => 'hidden')); ?>
			<?php echo $this->Form->input('SectorType.nome',array('label' => 'Nome do tipo de Setor: <br>', 'required'=>'required','id' => 'nome')); ?>
			
	</fieldset>
</div>

<?php echo $this->Form->end('Cadastrar'); ?>