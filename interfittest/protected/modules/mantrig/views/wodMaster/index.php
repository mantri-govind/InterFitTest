<?php
/* @var $this WodMasterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Wod Masters',
);

$this->menu=array(
	array('label'=>'Create WodMaster', 'url'=>array('create')),
	array('label'=>'Manage WodMaster', 'url'=>array('admin')),
);
?>

<h1>Wod Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
