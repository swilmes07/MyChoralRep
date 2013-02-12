<?php

/**
 * This is the model class for table "members".
 *
 * The followings are the available columns in table 'members':
 * @property integer $ID
 * @property string $FirstName
 * @property string $LastName
 * @property string $UserID
 * @property string $Pass
 * @property string $SkillLevel
 * @property string $imagelocation
 */
class Members extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Members the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'members';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FirstName, LastName, UserID, Pass, SkillLevel, imagelocation', 'required'),
			array('FirstName, LastName, Pass', 'length', 'max'=>30),
			array('UserID', 'length', 'max'=>50),
			array('SkillLevel', 'length', 'max'=>20),
			array('imagelocation', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, FirstName, LastName, UserID, Pass, SkillLevel, imagelocation', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'FirstName' => 'First Name',
			'LastName' => 'Last Name',
			'UserID' => 'User',
			'Pass' => 'Pass',
			'SkillLevel' => 'Skill Level',
			'imagelocation' => 'Imagelocation',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID',$this->ID);
		$criteria->compare('FirstName',$this->FirstName,true);
		$criteria->compare('LastName',$this->LastName,true);
		$criteria->compare('UserID',$this->UserID,true);
		$criteria->compare('Pass',$this->Pass,true);
		$criteria->compare('SkillLevel',$this->SkillLevel,true);
		$criteria->compare('imagelocation',$this->imagelocation,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}