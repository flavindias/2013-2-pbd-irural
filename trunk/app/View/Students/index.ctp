<pre>
    <?php var_dump($students) ?>

</pre>

`id` INT(11) NOT NULL AUTO_INCREMENT,
  `CPF` CHAR(11) NOT NULL,
  `RG` VARCHAR(20) NOT NULL,
  `usuario_id` INT(11) NOT NULL,

<div class='Conteudo'>
    <p><?php echo $this->Html->link("Cadastrar novo estudante", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>CPF</th>
        <th>RG</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($students as $student): ?>
    <tr>
        <td>
            <?php echo $student['Student']['cpf']; ?>
        </td>
        <td>
            <?php echo $student['Student']['rg']; ?>
        </td>
        <td class='actions'>
            <?php echo $this->Html->link(
                        $this->Html->image("view.png", array('alt' => 'Ver')),
                        array('action' => 'view', $student['Student']['id']),
                        array('escape'=>false, 'class'=>'link'))?>

                        <?php echo $this->Html->link($this->Html->image("edit.png",array('alt' => 'Editar')),
                        array('action' => 'edit', $student['Student']['id']),
                        array('escape'=>false, 'class'=>'link'));
                        ?>

                        <?php echo $this->Html->link($this->Html->image("del.png",array('alt' => 'Remover')),
                        array('action' => 'delete', $student['Student']['id']),
                        array('escape'=>false, 'class'=>'link'),
                        "Você tem certeza que deseja remover o tipo de usuário ". $student['Student']['cpf'] . "?");
            ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
</div>