<?php
/* @var $this BlogMasterController */
/* @var $model BlogMaster */

$this->breadcrumbs=array(
	'Blog Masters'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BlogMaster', 'url'=>array('index')),
	array('label'=>'Create BlogMaster', 'url'=>array('create')),
	array('label'=>'Update BlogMaster', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BlogMaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BlogMaster', 'url'=>array('admin')),
);
?>

<h1>View BlogMaster #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'blog_title',
		'content',
		'image',
		'add_date',
		'status',
		'is_featured',
		'user_master_user_id',
	),
)); ?>
