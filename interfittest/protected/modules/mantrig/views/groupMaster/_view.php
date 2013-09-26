<?php
/* @var $this GroupMasterController */
/* @var $data GroupMaster */
?>
<div>

<div style="float:left; margin-left:60%; width:150px; height:150px;  overflow:hidden; position:absolute; margin-top:1%;  "><?php echo CHtml::image(ImageFly::Instance()->get($data, 'image', 150, 150));?></div>
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_name')); ?>:</b>
	<?php echo CHtml::encode($data->group_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	<b><?php echo CHtml::encode('Admin ID'); ?>:</b>
	<?php 
	
	echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_time')); ?>:</b>
	<?php echo CHtml::encode($data->date_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode(($data->status?'Active':'Inactive')); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('category_master_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_master_id); ?>
	<br />

	*/ ?>

</div>
</div>