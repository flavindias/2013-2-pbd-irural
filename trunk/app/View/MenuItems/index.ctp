<!-- <pre>
    
    <?php var_dump($menuitems) ?>
</pre>
<pre>
    <?php var_dump($menuitems) ?>

</pre>
 -->


<div class='Conteudo'>
    <p><?php echo $this->Html->link("Cadastrar novo item de cardápio", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($menuitems as $menuitem): ?>
    <tr>
        <td>
            <?php echo $menuitem['MenuItem']['id']; ?>
        </td>
        <td>
            <?php echo $menuitem['MenuItem']['nome']; ?>
        </td>
        <td class='actions'>
            <?php echo $this->Html->link(
                        $this->Html->image("view.png", array('alt' => 'Ver')),
                        array('action' => 'view', $menuitem['MenuItem']['id']),
                        array('escape'=>false, 'class'=>'link'))?>

                        <?php echo $this->Html->link($this->Html->image("edit.png",array('alt' => 'Editar')),
                        array('action' => 'edit', $menuitem['MenuItem']['id']),
                        array('escape'=>false, 'class'=>'link'));
                        ?>

                        <?php echo $this->Html->link($this->Html->image("del.png",array('alt' => 'Remover')),
                        array('action' => 'delete', $menuitem['MenuItem']['id']),
                        array('escape'=>false, 'class'=>'link'),
                        "Você tem certeza que deseja remover o tipo de setor ". $menuitem['MenuItem']['nome'] . "?");
            ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
</div>