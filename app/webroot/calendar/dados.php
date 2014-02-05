<?php 

$conexao = mysql_connect('localhost', 'root', 'queroficarrico') or die ('Nao conectou');
mysql_select_db('iruraldb', $conexao) or die ('Nao achou');
$eventos = 'select * from eventos where 1';
$dados = mysql_query($eventos, $conexao);


echo '
<script type="text/javascript">
$(document).ready(function() {    

    $("#calendar").fullCalendar({
    events: [';

while ($escrever = mysql_fetch_array($dados)){
    
    echo '{title  : "'.$escrever['nome'].'", start  : "'.$escrever['datainicial'].' '.$escrever['horarioinicial'].'", end    : "'.$escrever['datafinal'].' '.$escrever['horariofinal'].'", allDay : false, url: "http://localhost/irural/events/view/'.$escrever['id'].'"},';

}



echo  '], 

	eventClick: function(event){
		if (event.url){
			window.open(event.url);
			return false;
		}
	}



});

});;


</script>'; ?>