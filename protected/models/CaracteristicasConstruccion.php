<?php

/**
 * This is the model class for table "caracteristicas_construccion".
 *
 * The followings are the available columns in table 'caracteristicas_construccion':
 * @property integer $idCaracteristicasConstruccion
 * @property integer $idPresupuestoReconstruccion
 * @property integer $NPisos
 * @property integer $NSotanos
 * @property string $existeMezanine
 * @property string $pisoRiesgo
 * @property double $areaRiesgo
 * @property string $mamposteriaReforzada
 * @property string $mamposteriaConfinada
 * @property string $sistemaReticularCelulado
 * @property string $SistemaPorticoConcreto
 * @property string $unaDireccionC
 * @property string $dosDireccionesC
 * @property string $sistemaPorticoAcero
 * @property string $unaDireccionA
 * @property string $dosDireccionesA
 * @property string $sistemaDualConcreto
 * @property string $sistemaMurosEstructurales
 * @property string $maderaTejaBarro
 * @property string $cerchaMetalicaTejaLiviana
 * @property string $losaConcreto
 * @property string $otro
 * @property string $cual
 * @property string $deterioro
 * @property string $observaciones
 */
class CaracteristicasConstruccion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'caracteristicas_construccion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NPisos, NSotanos, existeMezanine, pisoRiesgo, areaRiesgo, mamposteriaReforzada, mamposteriaConfinada, sistemaReticularCelulado, SistemaPorticoConcreto, unaDireccionC, dosDireccionesC, sistemaPorticoAcero, unaDireccionA, dosDireccionesA, sistemaDualConcreto, sistemaMurosEstructurales, maderaTejaBarro, cerchaMetalicaTejaLiviana, losaConcreto, otro, deterioro', 'required'),
			array('idCaracteristicasConstruccion, idPresupuestoReconstruccion, NPisos, NSotanos', 'numerical', 'integerOnly'=>true),
			array('areaRiesgo', 'numerical'),
			array('existeMezanine, mamposteriaReforzada, mamposteriaConfinada, sistemaReticularCelulado, SistemaPorticoConcreto, unaDireccionC, dosDireccionesC, sistemaPorticoAcero, unaDireccionA, dosDireccionesA, sistemaDualConcreto, sistemaMurosEstructurales, maderaTejaBarro, cerchaMetalicaTejaLiviana, losaConcreto, otro, deterioro', 'length', 'max'=>5),
			array('pisoRiesgo', 'length', 'max'=>25),
			array('cual', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idCaracteristicasConstruccion, idPresupuestoReconstruccion, NPisos, NSotanos, existeMezanine, pisoRiesgo, areaRiesgo, mamposteriaReforzada, mamposteriaConfinada, sistemaReticularCelulado, SistemaPorticoConcreto, unaDireccionC, dosDireccionesC, sistemaPorticoAcero, unaDireccionA, dosDireccionesA, sistemaDualConcreto, sistemaMurosEstructurales, maderaTejaBarro, cerchaMetalicaTejaLiviana, losaConcreto, otro, cual, deterioro, observaciones', 'safe', 'on'=>'search'),
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
			'idCaracteristicasConstruccion' => 'Id Caracteristicas Construccion',
			'idPresupuestoReconstruccion' => 'Id Presupuesto Reconstruccion',
			'NPisos' => 'No. Pisos a partir del nivel del terreno',
			'NSotanos' => 'No. De sótanos',
			'existeMezanine' => 'Existe Mezanine',
			'pisoRiesgo' => 'Piso(s) en que se encuentra el riesgo',
			'areaRiesgo' => 'Área del riesgo (m2)',
			'mamposteriaReforzada' => 'Mampostería reforzada',
			'mamposteriaConfinada' => 'Mampostería Ccnfinada',
			'sistemaReticularCelulado' => 'Sistema reticular celulado',
			'SistemaPorticoConcreto' => 'Sistema de pórtico concreto',
			'unaDireccionC' => 'En una dirección',
			'dosDireccionesC' => 'En dos direcciones',
			'sistemaPorticoAcero' => 'Sistema de pórtico acero',
			'unaDireccionA' => 'En una dirección',
			'dosDireccionesA' => 'En dos direcciones',
			'sistemaDualConcreto' => 'Sistema dual de concreto',
			'sistemaMurosEstructurales' => 'Sistema de muros estructurales',
			'maderaTejaBarro' => 'En madera y teja de barro',
			'cerchaMetalicaTejaLiviana' => 'Cercha metálica y teja liviana',
			'losaConcreto' => 'Losa de concreto',
			'otro' => 'Otro',
			'cual' => 'Cual',
			'deterioro' => 'Deterioros por humedad, Fisuras y grietas',
			'observaciones' => 'Observaciones',
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

		$criteria->compare('idCaracteristicasConstruccion',$this->idCaracteristicasConstruccion);
		$criteria->compare('idPresupuestoReconstruccion',$this->idPresupuestoReconstruccion);
		$criteria->compare('NPisos',$this->NPisos);
		$criteria->compare('NSotanos',$this->NSotanos);
		$criteria->compare('existeMezanine',$this->existeMezanine,true);
		$criteria->compare('pisoRiesgo',$this->pisoRiesgo,true);
		$criteria->compare('areaRiesgo',$this->areaRiesgo);
		$criteria->compare('mamposteriaReforzada',$this->mamposteriaReforzada,true);
		$criteria->compare('mamposteriaConfinada',$this->mamposteriaConfinada,true);
		$criteria->compare('sistemaReticularCelulado',$this->sistemaReticularCelulado,true);
		$criteria->compare('SistemaPorticoConcreto',$this->SistemaPorticoConcreto,true);
		$criteria->compare('unaDireccionC',$this->unaDireccionC,true);
		$criteria->compare('dosDireccionesC',$this->dosDireccionesC,true);
		$criteria->compare('sistemaPorticoAcero',$this->sistemaPorticoAcero,true);
		$criteria->compare('unaDireccionA',$this->unaDireccionA,true);
		$criteria->compare('dosDireccionesA',$this->dosDireccionesA,true);
		$criteria->compare('sistemaDualConcreto',$this->sistemaDualConcreto,true);
		$criteria->compare('sistemaMurosEstructurales',$this->sistemaMurosEstructurales,true);
		$criteria->compare('maderaTejaBarro',$this->maderaTejaBarro,true);
		$criteria->compare('cerchaMetalicaTejaLiviana',$this->cerchaMetalicaTejaLiviana,true);
		$criteria->compare('losaConcreto',$this->losaConcreto,true);
		$criteria->compare('otro',$this->otro,true);
		$criteria->compare('cual',$this->cual,true);
		$criteria->compare('deterioro',$this->deterioro,true);
		$criteria->compare('observaciones',$this->observaciones,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CaracteristicasConstruccion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
