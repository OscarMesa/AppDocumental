<?php

/**
 * This is the model class for table "informacion_general".
 *
 * The followings are the available columns in table 'informacion_general':
 * @property integer $idInformacionGeneral
 * @property integer $idPresupuestoReconstruccion
 * @property string $personaEntrevistada
 * @property string $telefono
 * @property string $personaEncargadaAdministracion
 * @property string $cargo
 * @property string $ciudad
 */
class InformacionGeneral extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'informacion_general';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('idPresupuestoReconstruccion', 'required'),
			array('idPresupuestoReconstruccion, telefono', 'numerical', 'integerOnly'=>true),
			array('personaEntrevistada, personaEncargadaAdministracion, cargo, ciudad', 'length', 'max'=>250),
			array('telefono', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idInformacionGeneral, idPresupuestoReconstruccion, personaEntrevistada, telefono, personaEncargadaAdministracion, cargo, ciudad', 'safe', 'on'=>'search'),
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
			'idInformacionGeneral' => 'Id Información General',
			'idPresupuestoReconstruccion' => 'Id Presupuesto Reconstrucción',
			'personaEntrevistada' => 'Persona Entrevistada',
			'telefono' => 'Teléfono',
			'personaEncargadaAdministracion' => 'Persona encargada de la Administración',
			'cargo' => 'Cargo',
			'ciudad' => 'Ciudad',
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

		$criteria->compare('idInformacionGeneral',$this->idInformacionGeneral);
		$criteria->compare('idPresupuestoReconstruccion',$this->idPresupuestoReconstruccion);
		$criteria->compare('personaEntrevistada',$this->personaEntrevistada,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('personaEncargadaAdministracion',$this->personaEncargadaAdministracion,true);
		$criteria->compare('cargo',$this->cargo,true);
		$criteria->compare('ciudad',$this->ciudad,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InformacionGeneral the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
