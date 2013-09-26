<?php
/* @var $this WodFeedController */
/* @var $model WodFeed */

$this->breadcrumbs=array(
	'Wod Feeds'=>array('index'),
	$model->feed_id,
);

$this->menu=array(
	array('label'=>'List WodFeed', 'url'=>array('index')),
	array('label'=>'Create WodFeed', 'url'=>array('create')),
	array('label'=>'Update WodFeed', 'url'=>array('update', 'id'=>$model->feed_id)),
	array('label'=>'Delete WodFeed', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->feed_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WodFeed', 'url'=>array('admin')),
);
?>

<h1>View WodFeed #<?php echo $model->feed_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'feed_id',
		'media',
		'date_time',
		'status',
		'user_id',
		'activity_id',
	),
)); ?>
