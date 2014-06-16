<?php

/**
 * This is the model class for table "indicadores".
 *
 * The followings are the available columns in table 'indicadores':
 * @property integer $id_ind
 * @property string $nombre_ind
 * @property string $valor
 */
class Indicadores extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'indicadores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_ind, valor', 'required'),
			array('nombre_ind', 'length', 'max'=>50),
			array('valor', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_ind, nombre_ind, valor', 'safe', 'on'=>'search'),
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
			'id_ind' => 'Id',
			'nombre_ind' => 'Nombre',
			'valor' => 'Valor',
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

		$criteria= new CDbCriteria();

		$criteria->compare('id_ind',$this->id_ind,true);
//		$criteria->addCondition('nombre_ind LIKE"%?%"');
		$criteria->compare('nombre_ind',$this->nombre_ind,true);
		$criteria->compare('valor',$this->valor,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Indicadores the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
