<?php
/* @var $this WodFeedController */
/* @var $model WodFeed */

$this->breadcrumbs=array(
	'Wod Feeds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List WodFeed', 'url'=>array('index')),
	array('label'=>'Manage WodFeed', 'url'=>array('admin')),
);
?>

<h1>Create WodFeed</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>