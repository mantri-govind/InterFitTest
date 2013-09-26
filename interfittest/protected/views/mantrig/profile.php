<?php
/* @var $this ProfileController */
/* @var $model Profile */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profile-profile-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_master_user_id'); ?>
		<?php echo $form->textField($model,'user_master_user_id'); ?>
		<?php echo $form->error($model,'user_master_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city_id'); ?>
		<?php echo $form->textField($model,'city_id'); ?>
		<?php echo $form->error($model,'city_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'height'); ?>
		<?php echo $form->textField($model,'height'); ?>
		<?php echo $form->error($model,'height'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postcode'); ?>
		<?php echo $form->textField($model,'postcode'); ?>
		<?php echo $form->error($model,'postcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name'); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name'); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->textField($model,'image'); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'basic_info'); ?>
		<?php echo $form->textField($model,'basic_info'); ?>
		<?php echo $form->error($model,'basic_info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hobbies'); ?>
		<?php echo $form->textField($model,'hobbies'); ?>
		<?php echo $form->error($model,'hobbies'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'strengths'); ?>
		<?php echo $form->textField($model,'strengths'); ?>
		<?php echo $form->error($model,'strengths'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'blog_url'); ?>
		<?php echo $form->textField($model,'blog_url'); ?>
		<?php echo $form->error($model,'blog_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'waist_line'); ?>
		<?php echo $form->textField($model,'waist_line'); ?>
		<?php echo $form->error($model,'waist_line'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description'); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_time'); ?>
		<?php echo $form->textField($model,'date_time'); ?>
		<?php echo $form->error($model,'date_time'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->