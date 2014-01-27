<div class='Conteudo'>
    <p><?php echo $this->Html->link("Cadastrar novo tipo de setor", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($sector_types as $sector_type): ?>
    <tr>
        <td>
            <?php echo $sector_type['SectorType']['id']; ?>
        </td>
        <td>
            <?php echo $sector_type['SectorType']['nome']; ?>
        </td>
        <td class='actions'>
            <?php echo $this->Html->link(
                        $this->Html->image("view.png", array('alt' => 'Ver')),
                        array('action' => 'view', $sector_type['SectorType']['id']),
                        array('escape'=>false, 'class'=>'link'))?>

                        <?php echo $this->Html->link($this->Html->image("edit.png",array('alt' => 'Editar')),
                        array('action' => 'edit', $sector_type['SectorType']['id']),
                        array('escape'=>false, 'class'=>'link'));
                        ?>

                        <?php echo $this->Html->link($this->Html->image("del.png",array('alt' => 'Remover')),
                        array('action' => 'delete', $sector_type['SectorType']['id']),
                        array('escape'=>false, 'class'=>'link'),
                        "Você tem certeza que deseja remover o tipo de setor ". $sector_type['SectorType']['nome'] . "?");
            ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
</div>