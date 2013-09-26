<?php
/* @var $this GearMasterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gear Masters',
);

$this->menu=array(
	array('label'=>'Create GearMaster', 'url'=>array('create')),
	array('label'=>'Manage GearMaster', 'url'=>array('admin')),
);
?>

<h1>Gear Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
