<?php
/* @var $this WodMasterController */
/* @var $model WodMaster */

$this->breadcrumbs=array(
	'Wod Masters'=>array('index'),
	$model->wod_id=>array('view','id'=>$model->wod_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WodMaster', 'url'=>array('index')),
	array('label'=>'Create WodMaster', 'url'=>array('create')),
	array('label'=>'View WodMaster', 'url'=>array('view', 'id'=>$model->wod_id)),
	array('label'=>'Manage WodMaster', 'url'=>array('admin')),
);
?>

<h1>Update WodMaster <?php echo $model->wod_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>