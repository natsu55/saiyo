<?php
/**
 * Template part for displaying an FAQ item.
 *
 * This template part is called by the FAQ.php template.
 *
 *
 * @package WordPress
 * @subpackage Saiyo
 * 
 * By: Hugh
 * Since: 2018/03/02
 */

$index = $index + 1;

if($index > 1){
?>

<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $index ?>" aria-expanded="false">質問 <?php echo (sprintf('%02d', $index) . ' ' . $item->post_title); ?></a> </h4>
	</div>

	<div id="collapse<?php echo $index?>" class="panel-collapse collapse" aria-expanded="false">
		<div class="panel-body"><?php echo $item->post_content; ?></div>
	</div>
</div>

<?php
}

else{
?>

<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $index ?>" aria-expanded="true">質問 <?php echo (sprintf('%02d', $index) . ' ' . $item->post_title); ?></a> </h4>
	</div>

	<div id="collapse<?php echo $index?>" class="panel-collapse collapse in" aria-expanded="true" style="">
		<div class="panel-body"><?php echo $item->post_content; ?></div>
	</div>
</div>

<?php } ?>