<?php
/* @var $this WodFeedCommentsController */
/* @var $model WodFeedComments */

$this->breadcrumbs=array(
	'Wod Feed Comments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List WodFeedComments', 'url'=>array('index')),
	array('label'=>'Create WodFeedComments', 'url'=>array('create')),
	array('label'=>'Update WodFeedComments', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete WodFeedComments', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WodFeedComments', 'url'=>array('admin')),
);
?>

<h1>View WodFeedComments #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'feed_id',
		'user_id',
		'comment',
		'add_date',
		'status',
	),
)); ?>
