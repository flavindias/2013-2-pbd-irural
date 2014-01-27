<div class='Conteudo'>
    <p><?php echo $this->Html->link("Cadastrar novo serviço", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($services as $service): ?>
    <tr>
        <td>
            <?php echo $service['Service']['id']; ?>
        </td>
        <td>
            <?php echo $service['Service']['nome']; ?>
        </td>
        <td class='actions'>
            <?php echo $this->Html->link(
                        $this->Html->image("view.png", array('alt' => 'Ver')),
                        array('action' => 'view', $service['Service']['id']),
                        array('escape'=>false, 'class'=>'link'))?>

                        <?php echo $this->Html->link($this->Html->image("edit.png",array('alt' => 'Editar')),
                        array('action' => 'edit', $service['Service']['id']),
                        array('escape'=>false, 'class'=>'link'));
                        ?>

                        <?php echo $this->Html->link($this->Html->image("del.png",array('alt' => 'Remover')),
                        array('action' => 'delete', $service['Service']['id']),
                        array('escape'=>false, 'class'=>'link'),
                        "Você tem certeza que deseja remover o tipo de setor ". $service['Service']['nome'] . "?");
            ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
</div>