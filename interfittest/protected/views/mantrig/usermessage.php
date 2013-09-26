<?php
/* @var $this MessageController */
/* @var $model Message */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'message-usermessage-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'message_id'); ?>
		<?php echo $form->textField($model,'message_id'); ?>
		<?php echo $form->error($model,'message_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sender_user_id'); ?>
		<?php echo $form->textField($model,'sender_user_id'); ?>
		<?php echo $form->error($model,'sender_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'res_user_id'); ?>
		<?php echo $form->textField($model,'res_user_id'); ?>
		<?php echo $form->error($model,'res_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'message'); ?>
		<?php echo $form->textField($model,'message'); ?>
		<?php echo $form->error($model,'message'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sent_time'); ?>
		<?php echo $form->textField($model,'sent_time'); ?>
		<?php echo $form->error($model,'sent_time'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->