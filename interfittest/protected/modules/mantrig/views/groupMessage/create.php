<?php
/* @var $this GroupMessageController */
/* @var $model GroupMessage */

$this->breadcrumbs=array(
	'Group Messages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GroupMessage', 'url'=>array('index')),
	array('label'=>'Manage GroupMessage', 'url'=>array('admin')),
);
?>

<h1>Create GroupMessage</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>