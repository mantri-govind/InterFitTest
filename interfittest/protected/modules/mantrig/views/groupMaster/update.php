<?php
/* @var $this GroupMasterController */
/* @var $model GroupMaster */

$this->breadcrumbs=array(
	'Group Masters'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GroupMaster', 'url'=>array('index')),
	array('label'=>'Create GroupMaster', 'url'=>array('create')),
	array('label'=>'View GroupMaster', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GroupMaster', 'url'=>array('admin')),
);
?>

<h1>Update GroupMaster <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>