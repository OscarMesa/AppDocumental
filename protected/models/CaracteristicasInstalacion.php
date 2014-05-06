<?php

/**
 * This is the model class for table "caracteristicas_instalacion".
 *
 * The followings are the available columns in table 'caracteristicas_instalacion':
 * @property integer $idCaracteristicasInstalacion
 * @property integer $idPresupuestoReconstruccion
 * @property string $acueductoPropio
 * @property string $aRedPublica
 * @property string $aCual
 * @property string $estadoRejillas
 * @property string $estadoCanales
 * @property string $estadoAlcantarillas
 * @property string $limpiezaTechos
 * @property string $estadoBajantes
 * @property string $plantaElectrica
 * @property string $pEMarca
 * @property string $pEAño
 * @property string $pEPotencia
 * @property string $pECombustible
 * @property string $pEUbicacionFisica
 * @property string $pEZonaAlimenta
 * @property string $transformadorPropio
 * @property string $tPMarca
 * @property string $tPAño
 * @property string $tPCapacidad
 * @property string $tPUbicacionFisica
 * @property string $sistemaGas
 * @property string $sGRedPublica
 * @property string $sGTanqueAlmacenamiento
 * @property string $sGCapacidadTanque
 * @property string $sGUtilizaCilindros
 * @property string $sGCapacidad
 * @property string $sistemaAireAcondicionado
 * @property string $aATipoSistema
 * @property string $aACapacidad
 * @property string $aATorreEnfriamiento
 * @property string $aATECapacidad
 * @property string $aATECantidad
 * @property string $mantenimientoInstalacionesFisicas
 * @property string $mIFPersonalACargo
 * @property string $mantenimientoPlantaElectrica
 * @property string $mPEPersonalACargo
 * @property string $mantenimientosubestaciónElectrica
 * @property string $mSEPersonalACargo
 * @property string $mantenimientoTransformadorPropio
 * @property string $mTPPersonalACargo
 * @property string $mantenimientoSistemaGas
 * @property string $mSGPersonalACargo
 * @property string $mantenimientoAscensores
 * @property string $mAPersonalACargo
 * @property string $mantenimientoDispositivosSeguridad
 * @property string $mDSPersonalACargo
 */
class CaracteristicasInstalacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'caracteristicas_instalacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('acueductoPropio, aRedPublica, estadoRejillas, estadoCanales, estadoAlcantarillas, limpiezaTechos, estadoBajantes, plantaElectrica, transformadorPropio, sistemaGas, sistemaAireAcondicionado', 'required'),
			array('idCaracteristicasInstalacion, idPresupuestoReconstruccion', 'numerical', 'integerOnly'=>true),
			array('acueductoPropio, aRedPublica, plantaElectrica, transformadorPropio, sistemaGas, sGRedPublica, sGTanqueAlmacenamiento, sGUtilizaCilindros, sistemaAireAcondicionado, aATorreEnfriamiento', 'length', 'max'=>5),
			array('aCual, pEMarca, pECombustible, pEUbicacionFisica, pEZonaAlimenta, tPMarca, tPUbicacionFisica, sGCapacidadTanque, sGCapacidad, aATipoSistema, mIFPersonalACargo, mPEPersonalACargo, mSEPersonalACargo, mTPPersonalACargo, mSGPersonalACargo, mAPersonalACargo, mDSPersonalACargo', 'length', 'max'=>250),
			array('estadoRejillas, estadoCanales, estadoAlcantarillas, limpiezaTechos, estadoBajantes', 'length', 'max'=>10),
			array('pEAño, pEPotencia, tPAño, tPCapacidad, aACapacidad, aATECapacidad, aATECantidad', 'length', 'max'=>25),
			array('mantenimientoInstalacionesFisicas, mantenimientoPlantaElectrica, mantenimientosubestaciónElectrica, mantenimientoTransformadorPropio, mantenimientoSistemaGas, mantenimientoAscensores, mantenimientoDispositivosSeguridad', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idCaracteristicasInstalacion, idPresupuestoReconstruccion, acueductoPropio, aRedPublica, aCual, estadoRejillas, estadoCanales, estadoAlcantarillas, limpiezaTechos, estadoBajantes, plantaElectrica, pEMarca, pEAño, pEPotencia, pECombustible, pEUbicacionFisica, pEZonaAlimenta, transformadorPropio, tPMarca, tPAño, tPCapacidad, tPUbicacionFisica, sistemaGas, sGRedPublica, sGTanqueAlmacenamiento, sGCapacidadTanque, sGUtilizaCilindros, sGCapacidad, sistemaAireAcondicionado, aATipoSistema, aACapacidad, aATorreEnfriamiento, aATECapacidad, aATECantidad, mantenimientoInstalacionesFisicas, mIFPersonalACargo, mantenimientoPlantaElectrica, mPEPersonalACargo, mantenimientosubestaciónElectrica, mSEPersonalACargo, mantenimientoTransformadorPropio, mTPPersonalACargo, mantenimientoSistemaGas, mSGPersonalACargo, mantenimientoAscensores, mAPersonalACargo, mantenimientoDispositivosSeguridad, mDSPersonalACargo', 'safe', 'on'=>'search'),
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
			'idCaracteristicasInstalacion' => 'Id Caracteristicas Instalacion',
			'idPresupuestoReconstruccion' => 'Id Presupuesto Reconstruccion',
			'acueductoPropio' => 'Acueducto propio',
			'aRedPublica' => 'Red publica',
			'aCual' => 'Cual',
			'estadoRejillas' => 'Estado de las rejillas',
			'estadoCanales' => 'Estado de canales',
			'estadoAlcantarillas' => 'Estado de las alcantarillas',
			'limpiezaTechos' => 'Limpieza de techos',
			'estadoBajantes' => 'Estado de los bajantes',
			'plantaElectrica' => 'Planta eléctrica',
			'pEMarca' => 'Marca',
			'pEAño' => 'Año',
			'pEPotencia' => 'Potencia',
			'pECombustible' => 'Combustible',
			'pEUbicacionFisica' => 'Ubicación física',
			'pEZonaAlimenta' => 'Área o zona que alimenta',
			'transformadorPropio' => 'Transformador propio',
			'tPMarca' => 'Marca',
			'tPAño' => 'Año de fabricación',
			'tPCapacidad' => 'Capacidad',
			'tPUbicacionFisica' => 'Ubicación física',
			'sistemaGas' => 'Sistema de gas',
			'sGRedPublica' => 'Red publica',
			'sGTanqueAlmacenamiento' => 'Tanque de almacenamiento',
			'sGCapacidadTanque' => 'Capacidad del tanque',
			'sGUtilizaCilindros' => 'Utiliza cilindros',
			'sGCapacidad' => 'Capacidad',
			'sistemaAireAcondicionado' => 'Sistema de Aire acondicionado',
			'aATipoSistema' => 'Tipo de sistema',
			'aACapacidad' => 'Capacidad',
			'aATorreEnfriamiento' => 'Torre de enfriamiento',
			'aATECapacidad' => 'Capacidad',
			'aATECantidad' => 'Cantidad',
			'mantenimientoInstalacionesFisicas' => 'Instalaciones Físicas',
			'mIFPersonalACargo' => 'Personal a cargo',
			'mantenimientoPlantaElectrica' => 'Planta Eléctrica',
			'mPEPersonalACargo' => 'Personal a cargo',
			'mantenimientosubestaciónElectrica' => 'Subestación Eléctrica',
			'mSEPersonalACargo' => 'Personal a cargo',
			'mantenimientoTransformadorPropio' => 'Transformador Propio',
			'mTPPersonalACargo' => 'Personal a cargo',
			'mantenimientoSistemaGas' => 'Sistema de Gas',
			'mSGPersonalACargo' => 'Personal a cargo',
			'mantenimientoAscensores' => 'Ascensores',
			'mAPersonalACargo' => 'Personal a cargo',
			'mantenimientoDispositivosSeguridad' => 'Dispositivos de Seguridad',
			'mDSPersonalACargo' => 'Personal a cargo',
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

		$criteria->compare('idCaracteristicasInstalacion',$this->idCaracteristicasInstalacion);
		$criteria->compare('idPresupuestoReconstruccion',$this->idPresupuestoReconstruccion);
		$criteria->compare('acueductoPropio',$this->acueductoPropio,true);
		$criteria->compare('aRedPublica',$this->aRedPublica,true);
		$criteria->compare('aCual',$this->aCual,true);
		$criteria->compare('estadoRejillas',$this->estadoRejillas,true);
		$criteria->compare('estadoCanales',$this->estadoCanales,true);
		$criteria->compare('estadoAlcantarillas',$this->estadoAlcantarillas,true);
		$criteria->compare('limpiezaTechos',$this->limpiezaTechos,true);
		$criteria->compare('estadoBajantes',$this->estadoBajantes,true);
		$criteria->compare('plantaElectrica',$this->plantaElectrica,true);
		$criteria->compare('pEMarca',$this->pEMarca,true);
		$criteria->compare('pEAño',$this->pEAño,true);
		$criteria->compare('pEPotencia',$this->pEPotencia,true);
		$criteria->compare('pECombustible',$this->pECombustible,true);
		$criteria->compare('pEUbicacionFisica',$this->pEUbicacionFisica,true);
		$criteria->compare('pEZonaAlimenta',$this->pEZonaAlimenta,true);
		$criteria->compare('transformadorPropio',$this->transformadorPropio,true);
		$criteria->compare('tPMarca',$this->tPMarca,true);
		$criteria->compare('tPAño',$this->tPAño,true);
		$criteria->compare('tPCapacidad',$this->tPCapacidad,true);
		$criteria->compare('tPUbicacionFisica',$this->tPUbicacionFisica,true);
		$criteria->compare('sistemaGas',$this->sistemaGas,true);
		$criteria->compare('sGRedPublica',$this->sGRedPublica,true);
		$criteria->compare('sGTanqueAlmacenamiento',$this->sGTanqueAlmacenamiento,true);
		$criteria->compare('sGCapacidadTanque',$this->sGCapacidadTanque,true);
		$criteria->compare('sGUtilizaCilindros',$this->sGUtilizaCilindros,true);
		$criteria->compare('sGCapacidad',$this->sGCapacidad,true);
		$criteria->compare('sistemaAireAcondicionado',$this->sistemaAireAcondicionado,true);
		$criteria->compare('aATipoSistema',$this->aATipoSistema,true);
		$criteria->compare('aACapacidad',$this->aACapacidad,true);
		$criteria->compare('aATorreEnfriamiento',$this->aATorreEnfriamiento,true);
		$criteria->compare('aATECapacidad',$this->aATECapacidad,true);
		$criteria->compare('aATECantidad',$this->aATECantidad,true);
		$criteria->compare('mantenimientoInstalacionesFisicas',$this->mantenimientoInstalacionesFisicas,true);
		$criteria->compare('mIFPersonalACargo',$this->mIFPersonalACargo,true);
		$criteria->compare('mantenimientoPlantaElectrica',$this->mantenimientoPlantaElectrica,true);
		$criteria->compare('mPEPersonalACargo',$this->mPEPersonalACargo,true);
		$criteria->compare('mantenimientosubestaciónElectrica',$this->mantenimientosubestaciónElectrica,true);
		$criteria->compare('mSEPersonalACargo',$this->mSEPersonalACargo,true);
		$criteria->compare('mantenimientoTransformadorPropio',$this->mantenimientoTransformadorPropio,true);
		$criteria->compare('mTPPersonalACargo',$this->mTPPersonalACargo,true);
		$criteria->compare('mantenimientoSistemaGas',$this->mantenimientoSistemaGas,true);
		$criteria->compare('mSGPersonalACargo',$this->mSGPersonalACargo,true);
		$criteria->compare('mantenimientoAscensores',$this->mantenimientoAscensores,true);
		$criteria->compare('mAPersonalACargo',$this->mAPersonalACargo,true);
		$criteria->compare('mantenimientoDispositivosSeguridad',$this->mantenimientoDispositivosSeguridad,true);
		$criteria->compare('mDSPersonalACargo',$this->mDSPersonalACargo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CaracteristicasInstalacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
