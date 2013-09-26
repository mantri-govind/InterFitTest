<?php

/**
 * This is the model class for table "videos".
 *
 * The followings are the available columns in table 'videos':
 * @property integer $video_id
 * @property string $title
 * @property string $description
 * @property string $add_date
 * @property integer $type
 * @property string $url
 * @property integer $status
 * @property integer $user_master_user_id
 *
 * The followings are the available model relations:
 * @property UserMaster $userMasterUser
 */
class Videos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'videos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_master_user_id,type', 'required'),
			array('type, status, user_master_user_id', 'numerical', 'integerOnly'=>true),
			array('title, url', 'length', 'max'=>45),
			array('description, add_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('video_id, title, description, add_date, type, url, status, user_master_user_id', 'safe', 'on'=>'search'),
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
			'userMasterUser' => array(self::BELONGS_TO, 'UserMaster', 'user_master_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'video_id' => 'Video',
			'title' => 'Title',
			'description' => 'Description',
			'add_date' => 'Add Date',
			'type' => 'Type',
			'url' => 'Url',
			'status' => 'Status',
			'user_master_user_id' => 'User Master User',
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

		$criteria->compare('video_id',$this->video_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('add_date',$this->add_date,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('user_master_user_id',$this->user_master_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Videos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
