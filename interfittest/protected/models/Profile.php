<?php

/**
 * This is the model class for table "profile".
 *
 * The followings are the available columns in table 'profile':
 * @property integer $id
 * @property string $first_name
 @property string $date_of_birth
 * @property string $last_name
 * @property integer $city_id
 * @property integer $height
 * @property integer $weight
 * @property string $waist_line
 * @property string $description
 * @property string $image
 * @property integer $postcode
 * @property string $basic_info
 * @property string $hobbies
 * @property string $strengths
 * @property string $blog_url
 * @property integer $status
 * @property string $date_time
 * @property integer $user_master_user_id
 *
 * The followings are the available model relations:
 * @property City $city
 * @property UserMaster $userMasterUser
 */
class Profile extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 
	 */
	  public $imagePath = 'profile/';
	public $imagePathThumb = 'profile/thumb/';
	
	protected function beforeSave() {
								if ($this->image instanceof CUploadedFile) {
								$this->image = md5($this->image->getName()) . "." . $this->image->getExtensionName();
							}
						  return parent::beforeSave();
						}

	public function tableName()
	{
		return 'profile';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_master_user_id,date_of_birth', 'required'),
			array('user_master_user_id', 'unique'),
			array('city_id,height, weight, postcode, status, user_master_user_id', 'numerical', 'integerOnly'=>true),
			array('first_name, country_id, last_name, image, basic_info, hobbies, strengths, blog_url', 'length', 'max'=>45),
			array('waist_line', 'length', 'max'=>10),
			array('description, date_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, first_name, last_name, date_of_birth, city_id, country_id, height, weight, waist_line, description, image, postcode, basic_info, hobbies, strengths, blog_url, status, date_time, user_master_user_id', 'safe', 'on'=>'search'),
			array('image', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true),
			 
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
			'city' => array(self::BELONGS_TO, 'City', 'city_id'),
			'country' => array(self::BELONGS_TO, 'City', 'country_id'),
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
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'date_of_birth'=>'DOB',
			'city_id' => 'City',
			'country_id' => 'Country',
			'height' => 'Height',
			'weight' => 'Weight',
			'waist_line' => 'Waist Line',
			'description' => 'Description',
			'image' => 'Image',
			'postcode' => 'Postcode',
			'basic_info' => 'Basic Info',
			'hobbies' => 'Hobbies',
			'strengths' => 'Strengths',
			'blog_url' => 'Blog Url',
			'status' => 'Status',
			'date_time' => 'Date Time',
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
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('date_of_birth',$this->date_of_birth,true);
		$criteria->compare('city_id',$this->city_id);
		$criteria->compare('country_id',$this->country_id);
		$criteria->compare('height',$this->height);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('waist_line',$this->waist_line,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('postcode',$this->postcode);
		$criteria->compare('basic_info',$this->basic_info,true);
		$criteria->compare('hobbies',$this->hobbies,true);
		$criteria->compare('strengths',$this->strengths,true);
		$criteria->compare('blog_url',$this->blog_url,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('date_time',$this->date_time,true);
		$criteria->compare('user_master_user_id',$this->user_master_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Profile the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	/*public function beforeSave()
	{
		if ($file = CUploadedFile::getInstance($this, 'image'))
		{
			
			$this->image = file_get_contents($file->tempName);
			$file->saveAs( Yii::app()->basePath.'/images');
		}
	
		return parent::beforeSave();
	}*/
}
