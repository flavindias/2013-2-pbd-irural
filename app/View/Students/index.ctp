<div class='Conteudo'>
    <p><?php echo $this->Html->link("Cadastrar novo estudante", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>CPF</th>
        <th>RG</th>
        <th>Usuário</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($students as $student): ?>
    <tr>
        <td>
            <?php echo $student['Student']['CPF']; ?>
        </td>
        <td>
            <?php echo $student['Student']['RG']; ?>
        </td>
        <td>
            <?php echo $student['Student']['usuario_id']; ?>
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
                        "Você tem certeza que deseja remover o tipo de usuário ". $student['Student']['CPF'] . "?");
            ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
</div>