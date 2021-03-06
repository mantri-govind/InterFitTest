<?php

/**
 * This is the model class for table "blog_master".
 *
 * The followings are the available columns in table 'blog_master':
 * @property integer $id
 * @property string $blog_title
 * @property string $content
 * @property string $image
 * @property string $add_date
 * @property integer $status
 * @property integer $is_featured
 * @property integer $user_master_user_id
 *
 * The followings are the available model relations:
 * @property BlogComments[] $blogComments
 * @property UserMaster $userMasterUser
 */
class BlogMaster extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	 public $imagePath = 'blogs/';
	public $imagePathThumb = 'blogs/thumb/';
	
	protected function beforeSave() {
								if ($this->image instanceof CUploadedFile) {
								$this->image = md5($this->image->getName()) . "." . $this->image->getExtensionName();
							}
						  return parent::beforeSave();
						}

	public function tableName()
	{
		return 'blog_master';
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
			array('status, is_featured, user_master_user_id', 'numerical', 'integerOnly'=>true),
			array('blog_title, image', 'length', 'max'=>45),
			array('content, add_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, blog_title, content, image, add_date, status, is_featured, user_master_user_id', 'safe', 'on'=>'search'),
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
			'blogComments' => array(self::HAS_MANY, 'BlogComments', 'blog_master_id'),
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
			'blog_title' => 'Blog Title',
			'content' => 'Content',
			'image' => 'Image',
			'add_date' => 'Add Date',
			'status' => 'Status',
			'is_featured' => 'Is Featured',
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
		$criteria->compare('blog_title',$this->blog_title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('add_date',$this->add_date,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('is_featured',$this->is_featured);
		$criteria->compare('user_master_user_id',$this->user_master_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BlogMaster the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
