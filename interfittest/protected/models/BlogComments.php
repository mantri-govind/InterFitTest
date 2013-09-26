<?php

/**
 * This is the model class for table "blog_comments".
 *
 * The followings are the available columns in table 'blog_comments':
 * @property integer $id
 * @property string $comment
 * @property string $add_date
 * @property integer $status
 * @property integer $blog_master_id
 * @property integer $user_master_user_id
 *
 * The followings are the available model relations:
 * @property BlogMaster $blogMaster
 * @property UserMaster $userMasterUser
 */
class BlogComments extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'blog_comments';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('blog_master_id, user_master_user_id', 'required'),
			array('status, blog_master_id, user_master_user_id', 'numerical', 'integerOnly'=>true),
			array('comment, add_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, comment, add_date, status, blog_master_id, user_master_user_id', 'safe', 'on'=>'search'),
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
			'blogMaster' => array(self::BELONGS_TO, 'BlogMaster', 'blog_master_id'),
			'userMasterUser' => array(self::BELONGS_TO, 'UserMaster', 'user_master_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'comment' => 'Comment',
			'add_date' => 'Add Date',
			'status' => 'Status',
			'blog_master_id' => 'Blog Master',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('add_date',$this->add_date,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('blog_master_id',$this->blog_master_id);
		$criteria->compare('user_master_user_id',$this->user_master_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BlogComments the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
