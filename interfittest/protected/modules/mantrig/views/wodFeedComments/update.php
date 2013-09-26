<?php
/* @var $this WodFeedCommentsController */
/* @var $model WodFeedComments */

$this->breadcrumbs=array(
	'Wod Feed Comments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WodFeedComments', 'url'=>array('index')),
	array('label'=>'Create WodFeedComments', 'url'=>array('create')),
	array('label'=>'View WodFeedComments', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage WodFeedComments', 'url'=>array('admin')),
);
?>

<h1>Update WodFeedComments <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>