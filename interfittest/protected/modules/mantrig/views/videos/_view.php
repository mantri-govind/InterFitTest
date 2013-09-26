<?php
/* @var $this VideosController */
/* @var $data Videos */
?>
<div>

<div style="float:left; margin-left:60%; width:150px; height:150px;  overflow:hidden; position:absolute; margin-top:1%;  "> <?php echo CHtml::image(Yii::app()->baseUrl.'/images/'.$data->url, 'image'); ?></div>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('video_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->video_id), array('view', 'id'=>$data->video_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('add_date')); ?>:</b>
	<?php echo CHtml::encode($data->add_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode(($data->type?'Image':'Video')); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode(($data->status?'Active':'Inactive')); ?>
	<br />

	  
	<b><?php echo CHtml::encode('Uploaded By:'); ?>:</b>
	<?php
		$name=Profile::model()->findByAttributes(array('user_master_user_id'=>$data->user_master_user_id));
	 echo CHtml::encode($name->first_name); ?>
	<br />

	

</div>
</div>