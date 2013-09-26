<?php
/* @var $this WodFeedController */
/* @var $model WodFeed */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'wod-feed-wodfeed-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'feed_id'); ?>
		<?php echo $form->textField($model,'feed_id'); ?>
		<?php echo $form->error($model,'feed_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activity_id'); ?>
		<?php echo $form->textField($model,'activity_id'); ?>
		<?php echo $form->error($model,'activity_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'media'); ?>
		<?php echo $form->textField($model,'media'); ?>
		<?php echo $form->error($model,'media'); ?>
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