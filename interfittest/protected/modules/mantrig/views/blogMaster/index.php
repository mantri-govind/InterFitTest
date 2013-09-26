<?php
/* @var $this BlogMasterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Blog Masters',
);

$this->menu=array(
	array('label'=>'Create BlogMaster', 'url'=>array('create')),
	array('label'=>'Manage BlogMaster', 'url'=>array('admin')),
);
?>

<h1>Blog Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
