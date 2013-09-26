<?php
/* @var $this GearMasterController */
/* @var $data GearMaster */
?>
<div>
<?php //$data=GearMaster::model()->findByAttributes(array("gear_id"=>'3'));?>
<div style="float:left; margin-left:60%; width:150px; height:150px;  overflow:hidden; position:absolute; margin-top:1%;  ">
<?php echo CHtml::image(ImageFly::Instance()->get($data, 'image', 150, 150));?></div>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('gear_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->gear_id), array('view', 'id'=>$data->gear_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gear_url')); ?>:</b>
	
	<a href="<?php echo CHtml::encode($data->gear_url); ?>" target="_blank"><?php echo CHtml::encode($data->gear_url); ?></a>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_time')); ?>:</b>
	<?php echo CHtml::encode($data->date_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div></div>