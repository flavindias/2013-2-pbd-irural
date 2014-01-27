<div class='Conteudo'>
    <p><?php echo $this->Html->link("Cadastrar novo tipo de usuário", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($management_types as $management_type): ?>
    <tr>
        <td>
            <?php echo $management_type['ManagementType']['id']; ?>
        </td>
        <td>
            <?php echo $management_type['ManagementType']['nome']; ?>
        </td>
        <td class='actions'>
            <?php echo $this->Html->link(
                        $this->Html->image("view.png", array('alt' => 'Ver')),
                        array('action' => 'view', $management_type['ManagementType']['id']),
                        array('escape'=>false, 'class'=>'link'))?>

                        <?php echo $this->Html->link($this->Html->image("edit.png",array('alt' => 'Editar')),
                        array('action' => 'edit', $management_type['ManagementType']['id']),
                        array('escape'=>false, 'class'=>'link'));
                        ?>

                        <?php echo $this->Html->link($this->Html->image("del.png",array('alt' => 'Remover')),
                        array('action' => 'delete', $management_type['ManagementType']['id']),
                        array('escape'=>false, 'class'=>'link'),
                        "Você tem certeza que deseja remover o tipo de usuário ". $management_type['ManagementType']['nome'] . "?");
            ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
</div>