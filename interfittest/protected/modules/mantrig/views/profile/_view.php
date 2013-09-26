<?php
/* @var $this ProfileController */
/* @var $data Profile */
?>
<div>

<div style="float:left; margin-left:60%; width:150px; height:150px;  overflow:hidden; position:absolute; margin-top:1%;  "><?php echo CHtml::image(ImageFly::Instance()->get($data, 'image', 150, 150));?></div>
<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_of_birth')); ?>:</b>
	<?php echo CHtml::encode($data->date_of_birth); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('city_id')); ?>:</b>
	<?php 
		$city=city::model()->findByAttributes(array('id'=>$data->city_id));
	echo CHtml::encode($city->city_name); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('country_id')); ?>:</b>
	<?php 
		$country=country::model()->findByAttributes(array('id'=>$data->country_id));
		//CVarDumper::dump($country,10,true);
			// die;
		echo CHtml::encode($country->country_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('height')); ?>:</b>
	<?php echo CHtml::encode($data->height); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weight')); ?>:</b>
	<?php echo CHtml::encode($data->weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waist_line')); ?>:</b>
	<?php echo CHtml::encode($data->waist_line); ?>
	<br />
 	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php //echo CHtml::encode($data->getAttributeLabel('image')); ?></b>
	<!--<div style="margin-left:80%;width:150px;"> <?php // echo CHtml::image(Yii::app()->baseUrl.'/images/'.$data->image, 'image'); ?>
	<br /></div>
-->
	<b><?php echo CHtml::encode($data->getAttributeLabel('postcode')); ?>:</b>
	<?php echo CHtml::encode($data->postcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('basic_info')); ?>:</b>
	<?php echo CHtml::encode($data->basic_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hobbies')); ?>:</b>
	<?php echo CHtml::encode($data->hobbies); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('strengths')); ?>:</b>
	<?php echo CHtml::encode($data->strengths); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blog_url')); ?>:</b>
	<?php echo CHtml::encode($data->blog_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_time')); ?>:</b>
	<?php echo CHtml::encode($data->date_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UserID')); ?>:</b>
	<?php echo CHtml::encode($data->user_master_user_id); ?>
	<br />



</div>
</div>