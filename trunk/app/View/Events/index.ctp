<div class='Conteudo'>
    <p><?php echo $this->Html->link("Cadastrar novo Evento", array('action' => 'add')); ?></p>
    <p><?php echo $this->Html->link("Visualizar no Calendário", array('action' => 'calendar')); ?></p>
<table>
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Data Inicial</th>
        <th>Local</th>
        <th>Horário Inicial</th>
        <th>Preço</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($events as $event): ?>
    <tr>
        <td>
            <?php echo $event['Event']['id']; ?>
        </td>
        <td>
            <?php echo $event['Event']['nome']; ?>
        </td>
        <td>
            <?php echo $event['Event']['datainicial']; ?>
        </td>
        <td>
            <?php echo $event['Event']['local']; ?>
        </td>
        <td>
            <?php echo $event['Event']['horarioinicial']; ?>
        </td>
        <td>
            <?php echo $event['Event']['preco']; ?>
        </td>
        <td class='actions'>
            <?php echo $this->Html->link(
                        $this->Html->image("view.png", array('alt' => 'Ver')),
                        array('action' => 'view', $event['Event']['id']),
                        array('escape'=>false, 'class'=>'link'))?>

                        <?php echo $this->Html->link($this->Html->image("edit.png",array('alt' => 'Editar')),
                        array('action' => 'edit', $event['Event']['id']),
                        array('escape'=>false, 'class'=>'link'));
                        ?>

                        <?php echo $this->Html->link($this->Html->image("del.png",array('alt' => 'Remover')),
                        array('action' => 'delete', $event['Event']['id']),
                        array('escape'=>false, 'class'=>'link'),
                        "Você tem certeza que deseja remover o evento ". $event['Event']['nome'] . "?");
            ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
</div>