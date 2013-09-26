<?php
/* @var $this WodMasterController */
/* @var $model WodMaster */

$this->breadcrumbs=array(
	'Wod Masters'=>array('index'),
	$model->wod_id,
);

$this->menu=array(
	array('label'=>'List WodMaster', 'url'=>array('index')),
	array('label'=>'Create WodMaster', 'url'=>array('create')),
	array('label'=>'Update WodMaster', 'url'=>array('update', 'id'=>$model->wod_id)),
	array('label'=>'Delete WodMaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->wod_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WodMaster', 'url'=>array('admin')),
);
?>

<h1>View WodMaster #<?php echo $model->wod_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'wod_id',
		'attachment',
		'topic',
		'date_time',
		'description',
		'status',
		'user_id',
	),
)); ?>
