<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css"> 
        * {  margin: 0px; padding: 0px }
        form input{
             
        }
    </style>



	<?php echo $this->Html->css('fullcalendar'); ?>
    <?php echo $this->Html->script('jquery.min'); ?>
    <?php echo $this->Html->script('moment.min'); ?>
    <?php echo $this->Html->script('fullcalendar'); ?>
    <?php echo $this->Html->css('shadowbox'); ?>
    
    <script type="text/javascript">
		Shadowbox.init();
	</script>	

	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	
	
</head>

<body>
				<div id="container">
			<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		
	</div></body>
</html>