<?php

/**
 * This is the model class for table "wod_feed".
 *
 * The followings are the available columns in table 'wod_feed':
 * @property integer $feed_id
 * @property string $media
 * @property string $date_time
 * @property integer $status
 * @property integer $user_id
 * @property integer $activity_id
 *
 * The followings are the available model relations:
 * @property Activity $activity
 * @property UserMaster $user
 * @property WodFeedComments[] $wodFeedComments
 */
class WodFeed extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'wod_feed';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('activity_id', 'required'),
			array('status, user_id, activity_id', 'numerical', 'integerOnly'=>true),
			array('media', 'length', 'max'=>45),
			array('date_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('feed_id, media, date_time, status, user_id, activity_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'activity' => array(self::BELONGS_TO, 'Activity', 'activity_id'),
			'user' => array(self::BELONGS_TO, 'UserMaster', 'user_id'),
			'wodFeedComments' => array(self::HAS_MANY, 'WodFeedComments', 'feed_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'feed_id' => 'Feed',
			'media' => 'Media',
			'date_time' => 'Date Time',
			'status' => 'Status',
			'user_id' => 'User',
			'activity_id' => 'Activity',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('feed_id',$this->feed_id);
		$criteria->compare('media',$this->media,true);
		$criteria->compare('date_time',$this->date_time,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('activity_id',$this->activity_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return WodFeed the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
