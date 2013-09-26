<?php
/* @var $this WodFeedController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Wod Feeds',
);

$this->menu=array(
	array('label'=>'Create WodFeed', 'url'=>array('create')),
	array('label'=>'Manage WodFeed', 'url'=>array('admin')),
);
?>

<h1>Wod Feeds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
