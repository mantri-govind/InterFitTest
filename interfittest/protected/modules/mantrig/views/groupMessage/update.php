<?php
/* @var $this GroupMessageController */
/* @var $model GroupMessage */

$this->breadcrumbs=array(
	'Group Messages'=>array('index'),
	$model->message_id=>array('view','id'=>$model->message_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GroupMessage', 'url'=>array('index')),
	array('label'=>'Create GroupMessage', 'url'=>array('create')),
	array('label'=>'View GroupMessage', 'url'=>array('view', 'id'=>$model->message_id)),
	array('label'=>'Manage GroupMessage', 'url'=>array('admin')),
);
?>

<h1>Update GroupMessage <?php echo $model->message_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>