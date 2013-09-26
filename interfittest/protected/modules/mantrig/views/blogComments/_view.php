<?php
/* @var $this BlogCommentsController */
/* @var $data BlogComments */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('add_date')); ?>:</b>
	<?php echo CHtml::encode($data->add_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode('Blog Title'); ?>:</b>
	<?php 
		$blog = BlogMaster::model()->findByPk($data->blog_master_id);
	echo CHtml::encode($blog->blog_title); ?>
	<br />

	<b><?php echo CHtml::encode('Comment By'); ?>:</b>
	<?php
	$user=Profile::model()->findByAttributes(array('user_master_user_id'=>$data->user_master_user_id));
	 echo CHtml::encode($user->first_name); ?>
	<br />


</div>