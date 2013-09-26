<?php
/* @var $this GroupMasterController */
/* @var $model GroupMaster */

$this->breadcrumbs=array(
	'Group Masters'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List GroupMaster', 'url'=>array('index')),
	array('label'=>'Create GroupMaster', 'url'=>array('create')),
	array('label'=>'Update GroupMaster', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GroupMaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GroupMaster', 'url'=>array('admin')),
);
?>

<h1>View GroupMaster #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'group_name',
		'description',
		'image',
		'user_id',
		'date_time',
		'status',
		'category_master_id',
	),
)); ?>
