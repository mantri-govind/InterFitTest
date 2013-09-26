<?php
/* @var $this WodMasterController */
/* @var $data WodMaster */
?><div>

<div style="float:left; margin-left:60%; width:150px; height:150px;  overflow:hidden; position:absolute; margin-top:1%;  "><?php echo CHtml::image(ImageFly::Instance()->get($data, 'image', 150, 150));?></div>
<div class="view">

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('wod_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->wod_id), array('view', 'id'=>$data->wod_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attachment')); ?>:</b>
	<?php echo CHtml::encode($data->attachment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('topic')); ?>:</b>
	<?php echo CHtml::encode($data->topic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_time')); ?>:</b>
	<?php echo CHtml::encode($data->date_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />


</div></div>