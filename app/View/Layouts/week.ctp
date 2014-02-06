<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
	<title>Calendar</title>
	<link rel='stylesheet' href='fullcalendar/fullcalendar.css' />
	<script src='lib/jquery.min.js'></script>
	<script src='lib/moment.min.js'></script>
	<script src='fullcalendar/fullcalendar.js'></script>
	<link rel="stylesheet" type="text/css" href="sb/shadowbox.css">
	<script type="text/javascript" src="sb/shadowbox.js"></script>
	<script type="text/javascript">
		Shadowbox.init();
	</script>	
</head>

<body>
				<div id="container">
			<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		
	</div></body>
</html>