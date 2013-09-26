<?php
/* @var $this MessageController */
/* @var $model Message */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'message-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
 

	<div class="row">
		<?php echo $form->labelEx($model,'Your Message'); ?>
		<?php echo $form->textArea($model,'message',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'message'); ?>
	</div>
 

	<div class="row">
		<?php echo $form->labelEx($model,'sender_user_id'); ?>
				<?php $listemail=CHtml::listData(UserMaster::model()->findAll(), 'user_id','email');  
		  echo $form->dropDownList($model,'sender_user_id',$listemail, array('empty'=>'--Select a sender Email--'));?>
	<?php echo $form->error($model,'sender_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'res_user_id'); ?>
			<?php $listemail=CHtml::listData(UserMaster::model()->findAll(), 'user_id','email');  
		  echo $form->dropDownList($model,'res_user_id',$listemail, array('empty'=>'--Select a Reciver Email--'));?>

		<?php echo $form->error($model,'res_user_id'); ?>
	</div>

	
<div class="row">
			<?php echo $form->labelEx($model,'status'); ?>
			<?php echo $form->checkBox($model,'status', array('value'=>1, 'uncheckValue'=>0)); ?>
			<?php echo $form->error($model,'status'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->