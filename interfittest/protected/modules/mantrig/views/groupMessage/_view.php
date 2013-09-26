<?php
/* @var $this GroupMessageController */
/* @var $data GroupMessage */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('message_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->message_id), array('view', 'id'=>$data->message_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_id')); ?>:</b>
	<?php echo CHtml::encode($data->group_id); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_master_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_master_user_id); ?>
	<br />


</div>