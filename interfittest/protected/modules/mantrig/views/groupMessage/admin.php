<?php
/* @var $this GroupMessageController */
/* @var $model GroupMessage */

$this->breadcrumbs=array(
	'Group Messages'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List GroupMessage', 'url'=>array('index')),
	array('label'=>'Create GroupMessage', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#group-message-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Group Messages</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'group-message-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'message_id',
		'group_id',
		'message',
		'sent_time',
		'status',
		'user_master_user_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
