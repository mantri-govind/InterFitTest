<?php
/* @var $this CityController */
/* @var $model City */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'city-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'city_name'); ?>
		<?php echo $form->textField($model,'city_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'city_name'); ?>
	</div>

	 
	<div class="row">
			<?php echo $form->labelEx($model,'status'); ?>
			<?php echo $form->checkBox($model,'status', array('value'=>1, 'uncheckValue'=>0)); ?>
			<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country_id'); ?>
		<?php $countryList	= Country::model()->findAll();
 //CVarDumper::dump($countryList,10,1);die;
		$list = CHtml::listData($countryList, 'id', 'country_name');
		echo $form->dropDownList($model, 'country_id', $list,array('empty'=>'Select a Country')); ?>
		<?php echo $form->error($model,'country_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->