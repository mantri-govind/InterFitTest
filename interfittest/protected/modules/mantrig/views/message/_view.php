<?php
/* @var $this MessageController */
/* @var $data Message */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('message_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->message_id), array('view', 'id'=>$data->message_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('message')); ?>:</b>
	<?php echo CHtml::encode($data->message); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sent_time')); ?>:</b>
	<?php echo CHtml::encode($data->sent_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sender_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->sender_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('res_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->res_user_id); ?>
	<br />


</div>