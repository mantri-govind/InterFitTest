<?php
/* @var $this GroupMasterController */
/* @var $model GroupMaster */

$this->breadcrumbs=array(
	'Group Masters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GroupMaster', 'url'=>array('index')),
	array('label'=>'Manage GroupMaster', 'url'=>array('admin')),
);
?>

<h1>Create GroupMaster</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>