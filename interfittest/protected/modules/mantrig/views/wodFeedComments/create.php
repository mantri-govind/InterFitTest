<?php
/* @var $this WodFeedCommentsController */
/* @var $model WodFeedComments */

$this->breadcrumbs=array(
	'Wod Feed Comments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List WodFeedComments', 'url'=>array('index')),
	array('label'=>'Manage WodFeedComments', 'url'=>array('admin')),
);
?>

<h1>Create WodFeedComments</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>