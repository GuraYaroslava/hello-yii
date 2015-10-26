<?php

/**
 * This is the model class for table "param".
 *
 * The followings are the available columns in table 'param':
 * @property integer $id
 * @property string $name
 * @property integer $param_type_id
 * @property integer $form_id
 *
 * The followings are the available model relations:
 * @property ParamType $paramType
 * @property Form $form
 */
class Param extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'param';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        return array(
            array('name, param_type_id, form_id', 'required'),
            array('param_type_id, form_id', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 50),
            array('id, name, param_type_id, form_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'paramType' => array(self::BELONGS_TO, 'ParamType', 'param_type_id'),
            'form' => array(self::BELONGS_TO, 'Form', 'form_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'name' => 'Name',
            'param_type_id' => 'Param Type',
            'form_id' => 'Form',
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
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('param_type_id', $this->param_type_id);
        $criteria->compare('form_id', $this->form_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Param the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
