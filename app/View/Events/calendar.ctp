<?php echo '
<script type="text/javascript">
$(document).ready(function() {    

    $("#calendar").fullCalendar({
    events: [';



        foreach ($events as $escrever) {
    
      echo '{title  : "'.$escrever['Event']['nome'].'", start  : "'.$escrever['Event']['datainicial'].' '.$escrever['Event']['horarioinicial'].'", end    : "'.$escrever['Event']['datafinal'].' '.$escrever['Event']['horariofinal'].'", allDay : false, url: "http://localhost/irural/events/view/'.$escrever['Event']['id'].'"},';

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

</script>

<div id='LOLOL'>
 	<div id='calendar'></div>
</div>
