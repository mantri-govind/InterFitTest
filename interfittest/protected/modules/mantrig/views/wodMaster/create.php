<?php
/* @var $this WodMasterController */
/* @var $model WodMaster */

$this->breadcrumbs=array(
	'Wod Masters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List WodMaster', 'url'=>array('index')),
	array('label'=>'Manage WodMaster', 'url'=>array('admin')),
);
?>

<h1>Create WodMaster</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>