<?php
/* @var $this BlogMasterController */
/* @var $model BlogMaster */

$this->breadcrumbs=array(
	'Blog Masters'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BlogMaster', 'url'=>array('index')),
	array('label'=>'Create BlogMaster', 'url'=>array('create')),
	array('label'=>'View BlogMaster', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BlogMaster', 'url'=>array('admin')),
);
?>

<h1>Update BlogMaster <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>