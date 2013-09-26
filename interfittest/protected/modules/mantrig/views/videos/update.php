<?php
/* @var $this VideosController */
/* @var $model Videos */

$this->breadcrumbs=array(
	'Videoses'=>array('index'),
	$model->title=>array('view','id'=>$model->video_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Videos', 'url'=>array('index')),
	array('label'=>'Create Videos', 'url'=>array('create')),
	array('label'=>'View Videos', 'url'=>array('view', 'id'=>$model->video_id)),
	array('label'=>'Manage Videos', 'url'=>array('admin')),
);
?>

<h1>Update Videos <?php echo $model->video_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>