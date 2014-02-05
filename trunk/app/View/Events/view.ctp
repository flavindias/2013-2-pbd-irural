<h1>Detalhamento do Evento</h1>
<table>
    <tr>        
        <th>Nome</th>
        <th>Data Incial</th>
        <th>Data Final</th>        
        <th>Local</th>
        <th>Horario Inicial</th>
        <th>Horario Final</th>
        <th>Preço</th>
    </tr>

    <tr>        
        <td><?php echo $event['Event']['nome']; ?></td>
        <td><?php echo $event['Event']['datainicial']; ?></td>
        <td><?php echo $event['Event']['datafinal']; ?></td>
        <td><?php echo $event['Event']['local']; ?></td>
        <td><?php echo $event['Event']['horarioinicial']; ?></td>
        <td><?php echo $event['Event']['horariofinal']; ?></td>
        <td><?php echo $event['Event']['preco']; ?></td>
    </tr>       
</table>
<p>Descrição: <?php echo $event['Event']['descricao']; ?></p>
<?php echo $this->Html->link('Voltar', array('action' => 'index')); ?>
