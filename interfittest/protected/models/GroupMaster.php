<?php

/**
 * This is the model class for table "group_master".
 *
 * The followings are the available columns in table 'group_master':
 * @property integer $id
 * @property string $group_name
 * @property string $description
 * @property string $image
 * @property integer $user_id
 * @property string $date_time
 * @property integer $status
 * @property integer $category_master_id
 *
 * The followings are the available model relations:
 * @property CategoryMaster $categoryMaster
 * @property UserMaster $user
 * @property UserMaster[] $userMasters
 * @property GroupMessage[] $groupMessages
 */
class GroupMaster extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	  public $imagePath = 'group/';
	public $imagePathThumb = 'group/thumb/';
	
	protected function beforeSave() {
								if ($this->image instanceof CUploadedFile) {
								$this->image = md5($this->image->getName()) . "." . $this->image->getExtensionName();
							}
						  return parent::beforeSave();
						}

	public function tableName()
	{
		return 'group_master';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('group_name, category_master_id', 'required'),
			array('user_id, status, category_master_id', 'numerical', 'integerOnly'=>true),
			array('group_name, image', 'length', 'max'=>45),
			array('description, date_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, group_name, description, image, user_id, date_time, status, category_master_id', 'safe', 'on'=>'search'),
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
			'categoryMaster' => array(self::BELONGS_TO, 'CategoryMaster', 'category_master_id'),
			'user' => array(self::BELONGS_TO, 'UserMaster', 'user_id'),
			'userMasters' => array(self::MANY_MANY, 'UserMaster', 'group_master_has_user_master(group_master_id, user_master_user_id)'),
			'groupMessages' => array(self::HAS_MANY, 'GroupMessage', 'group_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'group_name' => 'Group Name',
			'description' => 'Description',
			'image' => 'Image',
			'user_id' => 'User',
			'date_time' => 'Date Time',
			'status' => 'Status',
			'category_master_id' => 'Category Master',
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
		$criteria->compare('group_name',$this->group_name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('date_time',$this->date_time,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('category_master_id',$this->category_master_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GroupMaster the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
