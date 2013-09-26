<?php

/**
 * This is the model class for table "group_message".
 *
 * The followings are the available columns in table 'group_message':
 * @property integer $message_id
 * @property integer $group_id
 * @property string $message
 * @property string $sent_time
 * @property integer $status
 * @property integer $user_master_user_id
 *
 * The followings are the available model relations:
 * @property UserMaster $userMasterUser
 * @property GroupMaster $group
 */
class GroupMessage extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'group_message';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_master_user_id', 'required'),
			array('group_id, status, user_master_user_id', 'numerical', 'integerOnly'=>true),
			array('message, sent_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('message_id, group_id, message, sent_time, status, user_master_user_id', 'safe', 'on'=>'search'),
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
			'group' => array(self::BELONGS_TO, 'GroupMaster', 'group_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'message_id' => 'Message',
			'group_id' => 'Group',
			'message' => 'Message',
			'sent_time' => 'Sent Time',
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

		$criteria->compare('message_id',$this->message_id);
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('message',$this->message,true);
		$criteria->compare('sent_time',$this->sent_time,true);
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
	 * @return GroupMessage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
