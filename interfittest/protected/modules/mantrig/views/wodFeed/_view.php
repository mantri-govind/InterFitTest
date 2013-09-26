<?php
/* @var $this WodFeedController */
/* @var $data WodFeed */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('feed_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->feed_id), array('view', 'id'=>$data->feed_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('media')); ?>:</b>
	<?php echo CHtml::encode($data->media); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_time')); ?>:</b>
	<?php echo CHtml::encode($data->date_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activity_id')); ?>:</b>
	<?php echo CHtml::encode($data->activity_id); ?>
	<br />


</div>