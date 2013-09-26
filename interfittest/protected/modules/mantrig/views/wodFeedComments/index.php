<?php
/* @var $this WodFeedCommentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Wod Feed Comments',
);

$this->menu=array(
	array('label'=>'Create WodFeedComments', 'url'=>array('create')),
	array('label'=>'Manage WodFeedComments', 'url'=>array('admin')),
);
?>

<h1>Wod Feed Comments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
