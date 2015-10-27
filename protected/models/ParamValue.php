<?php

/**
 * This is the model class for table "param_value".
 *
 * The followings are the available columns in table 'param_value':
 * @property integer $id
 * @property integer $param_id
 * @property integer $reg_id
 * @property string $value
 *
 * The followings are the available model relations:
 * @property Param $param
 * @property Reg $reg
 */
class ParamValue extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'param_value';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('param_id, reg_id, value', 'required'),
			array('param_id, reg_id', 'numerical', 'integerOnly' => true),
			array('id, param_id, reg_id, value', 'safe', 'on' => 'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'param' => array(self::BELONGS_TO, 'Param', 'param_id'),
			'reg' => array(self::BELONGS_TO, 'Reg', 'reg_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'param_id' => 'Param',
			'reg_id' => 'Reg',
			'value' => 'Value',
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
		$criteria->compare('param_id', $this->param_id);
		$criteria->compare('reg_id', $this->reg_id);
		$criteria->compare('value', $this->value,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ParamValue the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
