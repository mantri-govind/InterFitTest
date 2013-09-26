<?php
/* @var $this BlogMasterController */
/* @var $data BlogMaster */
?><div>

<div style="float:left; margin-left:60%; width:150px; height:150px;  overflow:hidden; position:absolute; margin-top:1%;  "><?php echo CHtml::image(ImageFly::Instance()->get($data, 'image', 150, 150));?></div>
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blog_title')); ?>:</b>
	<?php echo CHtml::encode($data->blog_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('add_date')); ?>:</b>
	<?php echo CHtml::encode($data->add_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_featured')); ?>:</b>
	<?php echo CHtml::encode($data->is_featured); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_master_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_master_user_id); ?>
	<br />

	*/ ?>
</div>
</div>