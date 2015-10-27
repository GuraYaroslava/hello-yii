<?php

/**
 * This is the model class for table "reg".
 *
 * The followings are the available columns in table 'reg':
 * @property integer $id
 * @property integer $event_id
 * @property integer $user_id
 *
 * The followings are the available model relations:
 * @property Event $event
 * @property User $user
 * @property ParamValue[] $paramValues
 */
class Reg extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'reg';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('event_id, user_id', 'required'),
            array('event_id, user_id', 'numerical', 'integerOnly' => true),
            array('id, event_id, user_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'event' => array(self::BELONGS_TO, 'Event', 'event_id'),
            'user' => array(self::BELONGS_TO, 'User', 'user_id'),
            'paramValues' => array(self::HAS_MANY, 'ParamValue', 'reg_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'event_id' => 'Event',
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
        $criteria=new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('event_id', $this->event_id);
        $criteria->compare('user_id', $this->user_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Reg the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
