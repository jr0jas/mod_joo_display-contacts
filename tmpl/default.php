<?php
/**
 * @copyright	Copyright (c) 2016 Escuela de Relaciones Internacionales - UNA (http://www.ri.una.ac.cr/). All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;

?>
<ul class="list-unstyled list-inline">
<?php


foreach ($contacts as $contact) {

	/*
	<?php echo $contact->id.'<br />';?>
	<?php echo $contact->name.'<br />';?>
	<?php echo $contact->alias.'<br />';?>
	<?php echo $contact->con_position.'<br />';?>
	<?php echo $contact->address.'<br />';?>
	<?php echo $contact->telephone.'<br />';?>
	<?php echo $contact->image.'<br />';?>
	<?php echo $contact->email_to.'<br />';?>
	<?php echo $contact->user_id.'<br />';?>
	<?php echo $contact->mobile.'<br />';?>
	*/

?>
	<li>
		<img src="<?php echo JURI::base()  . '/' . htmlspecialchars($contact->image);?>" alt="<?php echo $contact->name;?>" class="img-circle" style="width:140px; height:140px; border: 2px #337ab7 solid;">
		<p class="text-center"><?php echo $contact->name;?></p>
		<p class="text-center"><small><?php echo $contact->con_position;?></small></p>
		<p><a href="tel:<?php echo $contact->mobile;?>" target="_blank"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> <?php echo $contact->mobile;?></a></p>
		<p><a href="mailto:<?php echo $contact->email_to;?>" target="_blank"><span class="glyphicon glyphicon glyphicon-envelope" aria-hidden="true"></span> <?php echo $contact->email_to;?></a></p>
	</li>
<?php

}

?>

</ul>

?>






