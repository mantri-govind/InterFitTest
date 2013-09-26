<?php
/* @var $this GearMasterController */
/* @var $model GearMaster */

$this->breadcrumbs=array(
	'Gear Masters'=>array('index'),
	$model->title=>array('view','id'=>$model->gear_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GearMaster', 'url'=>array('index')),
	array('label'=>'Create GearMaster', 'url'=>array('create')),
	array('label'=>'View GearMaster', 'url'=>array('view', 'id'=>$model->gear_id)),
	array('label'=>'Manage GearMaster', 'url'=>array('admin')),
);
?>

<h1>Update GearMaster <?php echo $model->gear_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>