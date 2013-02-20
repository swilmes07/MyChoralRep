<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $ID
 * @property string $LastName
 * @property string $FirstName
 * @property string $Email
 * @property string $SchoolEmployed
 * @property string $Position
 * @property string $TeachingLevel
 * @property string $ImageUrl
 * @property string $Password
 *
 * The followings are the available model relations:
 * @property Programs[] $programs
 */
class Users extends CActiveRecord {

    var $confirm_password;

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Users the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'users';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('LastName, FirstName, Email, Password, confirm_password', 'required'),
            array('LastName, FirstName, Email, SchoolEmployed, Position, Password, confirm_password', 'length', 'max' => 45),
            array('TeachingLevel', 'length', 'max' => 25),
            array('ImageUrl', 'length', 'max' => 128),
            array('confirm_password', 'compare', 'compareAttribute' => 'Password'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('LastName, FirstName, Email, SchoolEmployed, Position, TeachingLevel', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'programs' => array(self::HAS_MANY, 'Programs', 'Users_ID'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'ID' => 'ID',
            'LastName' => 'Last Name',
            'FirstName' => 'First Name',
            'Email' => 'Email',
            'SchoolEmployed' => 'School Employed',
            'Position' => 'Position',
            'TeachingLevel' => 'Teaching Level',
            'ImageUrl' => 'Image Url',
            'Password' => 'Password',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('ID', $this->ID);
        $criteria->compare('LastName', $this->LastName, true);
        $criteria->compare('FirstName', $this->FirstName, true);
        $criteria->compare('Email', $this->Email, true);
        $criteria->compare('SchoolEmployed', $this->SchoolEmployed, true);
        $criteria->compare('Position', $this->Position, true);
        $criteria->compare('TeachingLevel', $this->TeachingLevel, true);
        $criteria->compare('ImageUrl', $this->ImageUrl, true);
        $criteria->compare('Password', $this->Password, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    public function beforeSave() {

        if (parent::beforeSave() && $this->isNewRecord) {
            $this->Password = $this->hashPassword($this->Password);
        }
        return true;
    }

    public function validatePassword($password) {
        // return crypt($password,$this->Password)===$this->Password;
        return $password === $this->Password;
    }

    public function hashPassword($password) {
        //return crypt($password, $this->generateSalt());
        return $password;
    }

}