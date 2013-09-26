<?php
/* @var $this BlogMasterController */
/* @var $model BlogMaster */

$this->breadcrumbs=array(
	'Blog Masters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BlogMaster', 'url'=>array('index')),
	array('label'=>'Manage BlogMaster', 'url'=>array('admin')),
);
?>

<h1>Create BlogMaster</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>