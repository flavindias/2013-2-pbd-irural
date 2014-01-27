`nome` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(40) NOT NULL,
  `login` VARCHAR(45) NOT NULL,
<?php echo $this->Form->create('Student', array('action' => 'add')); ?>

<div class="Formulario">
	<fieldset id="Menu_Detail">
			<b>Detalhamento</b><br><br>

			<?php echo $this->Form->input('Student.CPF',array('label' => 'CPF: <br>', 'required'=>'required','id' => 'cpf')); ?>
			<?php echo $this->Form->input('Student.RG',array('label' => 'RG: <br>', 'required'=>'required','id' => 'rg')); ?>
			

			<?php echo $this->Form->input('User.nome',array('label' => 'Nome: <br>', 'required'=>'required','id' => 'nome')); ?>
			<?php echo $this->Form->input('Student.login',array('label' => 'Usuário: <br>', 'required'=>'required','id' => 'usuario')); ?>
			<?php echo $this->Form->input('Student.senha',array('label' => 'Senha: <br>', 'required'=>'required','id' => 'senha')); ?>
			
			
			
	</fieldset>
</div>

<?php echo $this->Form->end('Cadastrar'); ?>