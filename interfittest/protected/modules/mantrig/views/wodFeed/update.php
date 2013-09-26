<?php
/* @var $this WodFeedController */
/* @var $model WodFeed */

$this->breadcrumbs=array(
	'Wod Feeds'=>array('index'),
	$model->feed_id=>array('view','id'=>$model->feed_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WodFeed', 'url'=>array('index')),
	array('label'=>'Create WodFeed', 'url'=>array('create')),
	array('label'=>'View WodFeed', 'url'=>array('view', 'id'=>$model->feed_id)),
	array('label'=>'Manage WodFeed', 'url'=>array('admin')),
);
?>

<h1>Update WodFeed <?php echo $model->feed_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>