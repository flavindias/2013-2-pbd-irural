<div class='Conteudo'>
    <p><?php echo $this->Html->link("Cadastrar novo tipo de cardápio", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($menu_types as $menu_type): ?>
    <tr>
        <td>
            <?php echo $menu_type['MenuType']['id']; ?>
        </td>
        <td>
            <?php echo $menu_type['MenuType']['nome']; ?>
        </td>
        <td class='actions'>
            <?php echo $this->Html->link(
                        $this->Html->image("view.png", array('alt' => 'Ver')),
                        array('action' => 'view', $menu_type['MenuType']['id']),
                        array('escape'=>false, 'class'=>'link'))?>

                        <?php echo $this->Html->link($this->Html->image("edit.png",array('alt' => 'Editar')),
                        array('action' => 'edit', $menu_type['MenuType']['id']),
                        array('escape'=>false, 'class'=>'link'));
                        ?>

                        <?php echo $this->Html->link($this->Html->image("del.png",array('alt' => 'Remover')),
                        array('action' => 'delete', $menu_type['MenuType']['id']),
                        array('escape'=>false, 'class'=>'link'),
                        "Você tem certeza que deseja remover o tipo de usuário ". $menu_type['MenuType']['nome'] . "?");
            ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
</div>