<?php
/* @var $this GroupMessageController */
/* @var $model GroupMessage */

$this->breadcrumbs=array(
	'Group Messages'=>array('index'),
	$model->message_id,
);

$this->menu=array(
	array('label'=>'List GroupMessage', 'url'=>array('index')),
	array('label'=>'Create GroupMessage', 'url'=>array('create')),
	array('label'=>'Update GroupMessage', 'url'=>array('update', 'id'=>$model->message_id)),
	array('label'=>'Delete GroupMessage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->message_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GroupMessage', 'url'=>array('admin')),
);
?>

<h1>View GroupMessage #<?php echo $model->message_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'message_id',
		'group_id',
		'message',
		'sent_time',
		'status',
		'user_master_user_id',
	),
)); ?>
