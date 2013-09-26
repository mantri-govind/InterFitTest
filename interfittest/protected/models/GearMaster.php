<?php

/**
 * This is the model class for table "gear_master".
 *
 * The followings are the available columns in table 'gear_master':
 * @property integer $gear_id
 * @property string $title
 * @property string $description
 * @property string $gear_url
 * @property string $image
 * @property string $date_time
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property UserMaster[] $userMasters
 */
class GearMaster extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	 public $imagePath = 'gears/';
	public $imagePathThumb = 'gears/thumb/';
	
	public function tableName()
	{
		return 'gear_master';
	}
	protected function beforeSave() {
								if ($this->image instanceof CUploadedFile) {
								$this->image = md5($this->image->getName()) . "." . $this->image->getExtensionName();
							}
						  return parent::beforeSave();
						}

	

	 	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('title, gear_url, image', 'length', 'max'=>45),
			array('description, date_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('gear_id, title, description, gear_url, image, date_time, status', 'safe', 'on'=>'search'),
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
			'userMasters' => array(self::MANY_MANY, 'UserMaster', 'gear_master_has_user_master(gear_master_gear_id, user_master_user_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'gear_id' => 'Gear',
			'title' => 'Title',
			'description' => 'Description',
			'gear_url' => 'Gear Url',
			'image' => 'Image',
			'date_time' => 'Date Time',
			'status' => 'Status',
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

		$criteria->compare('gear_id',$this->gear_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('gear_url',$this->gear_url,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('date_time',$this->date_time,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GearMaster the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
