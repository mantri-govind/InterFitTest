<?php
/* @var $this GroupMessageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Group Messages',
);

$this->menu=array(
	array('label'=>'Create GroupMessage', 'url'=>array('create')),
	array('label'=>'Manage GroupMessage', 'url'=>array('admin')),
);
?>

<h1>Group Messages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
