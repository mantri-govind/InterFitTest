<?php
/* @var $this ProfileController */
/* @var $model Profile */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profile-form',
	 'htmlOptions' => array('enctype' => 'multipart/form-data'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	  
)); ?>


	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

 
	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'date_of_birth'); ?>

		<?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
            $this->widget('CJuiDateTimePicker',array(
                'model'=>$model, //Model object
                'attribute'=>'date_of_birth', //attribute name
                'mode'=>'date', //use "time","date" or "datetime" (default)
                'options'=>array("dateFormat"=>'yy/mm/dd'), // jquery plugin options
                'language' => ''
            ));
        ?>
		<?php echo $form->error($model,'date_of_birth'); ?>
</div>
	<div class="row">
	<?php   echo $form->labelEx($model,'country_id'); ?>
	<?php 	//$criteria = new CDbCriteria;
			//$criteria->select = 'country_name'; // select fields which you want in output
			//$countrys = country::model()->findAll($criteria);?>
	 	<?php					//	$list=CHtml::listData(country::model()->findAll(), 'country_name','country_name'); 
			 				  //CVarDumper::dump($list,10,true);
			// die;
		 // echo $form->dropDownList($model,'country_id',$list,array('empty'=>'--Select a country--','ajax' => array(
           //             'type' => 'POST',
             //           'url' => CController::createUrl('profile/dynamicCity'),
               //         'update' => "#Profile_city_id"
                 //   )));
 $countryList	= Country::model()->findAll();
 //CVarDumper::dump($countryList,10,1);die;
		$list = CHtml::listData($countryList, 'id', 'country_name');
		echo $form->dropDownList($model, 'country_id', $list,array('empty'=>'Select a Country',
                        'ajax' => array(
                        'type' => 'POST',
                        'url' => CController::createUrl('profile/dynamicCity'),
                        'update' => "#Profile_city_id"
                    ) ));
		 //echo $form->dropDownList($model,'',$list, array('empty'=>'Select Country'));?>

	<?php echo $form->error($model,'country_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city_id'); ?>
		<?php $listcity=CHtml::listData(city::model()->findAll(), 'city_name','city_name'); ?>
		<?php 
		  echo $form->dropDownList($model,'city_id',$listcity,array('empty'=>'--Select a City--'));?>
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
		<?php echo $form->labelEx($model,'waist_line'); ?>
		<?php echo $form->textField($model,'waist_line',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'waist_line'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>
	<div class="row"> 
<?php // ...
echo $form->labelEx($model, 'image');
echo $form->fileField($model, 'image');
echo $form->error($model, 'image');
// ... ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'postcode'); ?>
		<?php echo $form->textField($model,'postcode'); ?>
		<?php echo $form->error($model,'postcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'basic_info'); ?>
		<?php echo $form->textField($model,'basic_info',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'basic_info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hobbies'); ?>
		<?php echo $form->textField($model,'hobbies',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'hobbies'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'strengths'); ?>
		<?php echo $form->textField($model,'strengths',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'strengths'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'blog_url'); ?>
		<?php echo $form->textField($model,'blog_url',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'blog_url'); ?>
	</div>

<div class="row">
			<?php echo $form->labelEx($model,'status'); ?>
			<?php echo $form->checkBox($model,'status', array('value'=>1, 'uncheckValue'=>0)); ?>
			<?php echo $form->error($model,'status'); ?>
	</div>

 
	<div class="row">
		<?php echo $form->labelEx($model,'email'); //echo $form->labelEx($model,'user_id'); ?>
		<?php $listemail=CHtml::listData(UserMaster::model()->findAll(), 'user_id','email');  
		  echo $form->dropDownList($model,'user_master_user_id',$listemail, array('empty'=>'--Select a User Email--'));
		  //echo $form->textField($model,'user_master_user_id'); ?>
		<?php echo $form->error($model,'user_master_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->