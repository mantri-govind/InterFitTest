<?php
/* @var $this UserMasterController */
/* @var $model UserMaster */

$this->breadcrumbs=array(
	'User Masters'=>array('index'),
	$model->user_id,
);

$this->menu=array(
	array('label'=>'List UserMaster', 'url'=>array('index')),
	array('label'=>'Create UserMaster', 'url'=>array('create')),
	array('label'=>'Update UserMaster', 'url'=>array('update', 'id'=>$model->user_id)),
	array('label'=>'Delete UserMaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->user_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserMaster', 'url'=>array('admin')),
);
?>

<h1>View UserMaster #<?php echo $model->user_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_id',
		'email',
		'password',
		'date_of_birth',
		'status',
		'date_time',
		'roles_id',
	),
)); ?>
