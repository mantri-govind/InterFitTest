<?php
/* @var $this GearMasterController */
/* @var $model GearMaster */

$this->breadcrumbs=array(
	'Gear Masters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GearMaster', 'url'=>array('index')),
	array('label'=>'Manage GearMaster', 'url'=>array('admin')),
);
?>

<h1>Create GearMaster</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>