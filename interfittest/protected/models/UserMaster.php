<?php

/**
 * This is the model class for table "user_master".
 *
 * The followings are the available columns in table 'user_master':
 * @property integer $user_id
 * @property string $email
 * @property string $password 
 * @property integer $status
 * @property string $date_time
 * @property integer $roles_id
 *
 * The followings are the available model relations:
 * @property BlogComments[] $blogComments
 * @property BlogMaster[] $blogMasters
 * @property CategoryMaster[] $categoryMasters
 * @property CategoryMaster[] $categoryMasters1
 * @property GearMaster[] $gearMasters
 * @property GroupMaster[] $groupMasters
 * @property GroupMaster[] $groupMasters1
 * @property GroupMessage[] $groupMessages
 * @property Message[] $messages
 * @property Message[] $messages1
 * @property Profile[] $profiles
 * @property Roles $roles
 * @property Videos[] $videoses
 * @property WodFeed[] $wodFeeds
 * @property WodFeedComments[] $wodFeedComments
 * @property WodMaster[] $wodMasters
 */
class UserMaster extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_master';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('roles_id', 'required'),
			array('status, roles_id', 'numerical', 'integerOnly'=>true),
			array('email, password', 'length', 'max'=>45),
			array('date_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, email, password, status, date_time, roles_id', 'safe', 'on'=>'search'),
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
			'blogComments' => array(self::HAS_MANY, 'BlogComments', 'user_master_user_id'),
			'blogMasters' => array(self::HAS_MANY, 'BlogMaster', 'user_master_user_id'),
			'categoryMasters' => array(self::HAS_MANY, 'CategoryMaster', 'user_master_user_id'),
			'categoryMasters1' => array(self::MANY_MANY, 'CategoryMaster', 'category_master_has_user_master(user_master_user_id, category_master_category_id)'),
			'gearMasters' => array(self::MANY_MANY, 'GearMaster', 'gear_master_has_user_master(user_master_user_id, gear_master_gear_id)'),
			'groupMasters' => array(self::HAS_MANY, 'GroupMaster', 'user_id'),
			'groupMasters1' => array(self::MANY_MANY, 'GroupMaster', 'group_master_has_user_master(user_master_user_id, group_master_id)'),
			'groupMessages' => array(self::HAS_MANY, 'GroupMessage', 'user_master_user_id'),
			'messages' => array(self::HAS_MANY, 'Message', 'sender_user_id'),
			'messages1' => array(self::HAS_MANY, 'Message', 'res_user_id'),
			'profiles' => array(self::HAS_MANY, 'Profile', 'user_master_user_id'),
			'roles' => array(self::BELONGS_TO, 'Roles', 'roles_id'),
			'videoses' => array(self::HAS_MANY, 'Videos', 'user_master_user_id'),
			'wodFeeds' => array(self::HAS_MANY, 'WodFeed', 'user_id'),
			'wodFeedComments' => array(self::HAS_MANY, 'WodFeedComments', 'user_id'),
			'wodMasters' => array(self::HAS_MANY, 'WodMaster', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => 'User',
			'email' => 'Email',
			'password' => 'Password',
 			'status' => 'Status',
			'date_time' => 'Date Time',
			'roles_id' => 'Roles',
			 
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		 $criteria->compare('status',$this->status);
		$criteria->compare('date_time',$this->date_time,true);
		$criteria->compare('roles_id',$this->roles_id);
		 
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserMaster the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
