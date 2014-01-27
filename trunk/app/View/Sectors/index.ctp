<!-- <pre>
    
    <?php var_dump($sectors) ?>
</pre>
<pre>
    <?php var_dump($sectors) ?>

</pre>
 -->


<div class='Conteudo'>
    <p><?php echo $this->Html->link("Cadastrar novo tipo de setor", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($sectors as $sector): ?>
    <tr>
        <td>
            <?php echo $sector['Sector']['id']; ?>
        </td>
        <td>
            <?php echo $sector['Sector']['nome']; ?>
        </td>
        <td class='actions'>
            <?php echo $this->Html->link(
                        $this->Html->image("view.png", array('alt' => 'Ver')),
                        array('action' => 'view', $sector['Sector']['id']),
                        array('escape'=>false, 'class'=>'link'))?>

                        <?php echo $this->Html->link($this->Html->image("edit.png",array('alt' => 'Editar')),
                        array('action' => 'edit', $sector['Sector']['id']),
                        array('escape'=>false, 'class'=>'link'));
                        ?>

                        <?php echo $this->Html->link($this->Html->image("del.png",array('alt' => 'Remover')),
                        array('action' => 'delete', $sector['Sector']['id']),
                        array('escape'=>false, 'class'=>'link'),
                        "Você tem certeza que deseja remover o tipo de setor ". $sector['Sector']['nome'] . "?");
            ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
</div>