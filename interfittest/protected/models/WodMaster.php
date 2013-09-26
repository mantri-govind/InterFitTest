<?php

/**
 * This is the model class for table "wod_master".
 *
 * The followings are the available columns in table 'wod_master':
 * @property integer $wod_id
 * @property string $attachment
 * @property string $topic
 * @property string $date_time
 * @property string $description
 * @property integer $status
 * @property integer $user_id
 *
 * The followings are the available model relations:
 * @property Activity[] $activities
 * @property UserMaster $user
 */
class WodMaster extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	  public $imagePath = 'wod/';
	public $imagePathThumb = 'wod/thumb/';
	
	protected function beforeSave() {
								if ($this->image instanceof CUploadedFile) {
								$this->image = md5($this->image->getName()) . "." . $this->image->getExtensionName();
							}
						  return parent::beforeSave();
						}


	public function tableName()
	{
		return 'wod_master';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status, user_id', 'numerical', 'integerOnly'=>true),
			array('attachment, topic', 'length', 'max'=>45),
			array('date_time, description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('wod_id, attachment, topic, date_time, description, status, user_id', 'safe', 'on'=>'search'),
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
			'activities' => array(self::HAS_MANY, 'Activity', 'wod_master_wod_id'),
			'user' => array(self::BELONGS_TO, 'UserMaster', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'wod_id' => 'Wod',
			'attachment' => 'Attachment',
			'topic' => 'Topic',
			'date_time' => 'Date Time',
			'description' => 'Description',
			'status' => 'Status',
			'user_id' => 'User',
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

		$criteria->compare('wod_id',$this->wod_id);
		$criteria->compare('attachment',$this->attachment,true);
		$criteria->compare('topic',$this->topic,true);
		$criteria->compare('date_time',$this->date_time,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return WodMaster the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
