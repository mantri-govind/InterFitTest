<?php
/* @var $this GearMasterController */
/* @var $model GearMaster */

$this->breadcrumbs=array(
	'Gear Masters'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List GearMaster', 'url'=>array('index')),
	array('label'=>'Create GearMaster', 'url'=>array('create')),
	array('label'=>'Update GearMaster', 'url'=>array('update', 'id'=>$model->gear_id)),
	array('label'=>'Delete GearMaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->gear_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GearMaster', 'url'=>array('admin')),
);
?>

<h1>View GearMaster #<?php echo $model->gear_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'gear_id',
		'title',
		'description',
		'gear_url',
		'image',
		'date_time',
		'status',
	),
)); ?>
