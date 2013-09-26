<?php
/* @var $this GroupMasterController */
/* @var $model GroupMaster */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'group-master-form',
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'group_name'); ?>
		<?php echo $form->textField($model,'group_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'group_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model,'image'); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

 
<div class="row">
			<?php echo $form->labelEx($model,'status'); ?>
			<?php echo $form->checkBox($model,'status', array('value'=>1, 'uncheckValue'=>0)); ?>
			<?php echo $form->error($model,'status'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'Group_Category_id'); ?>
		<?php  $listcategory=$listcategory=CHtml::listData(CategoryMaster::model()->findAll(), 'id','category_name');
		//CVarDumper::dump($listcategory,10,1);die;
				echo $form->dropDownList($model,'category_master_id',$listcategory,array('empty'=>'--Select a category--'));
				 ?>
		<?php echo $form->error($model,'category_master_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->