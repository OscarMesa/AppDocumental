<?php

/**
 * This is the model class for table "informacion_predio".
 *
 * The followings are the available columns in table 'informacion_predio':
 * @property integer $idInformacionPredio
 * @property integer $idPresupuestoReconstruccion
 * @property string $predioCopropiedad
 * @property string $conjuntoCerrado
 * @property string $conjuntoCerradoOtro
 * @property string $ciudad
 * @property string $barrio
 * @property string $sector
 * @property string $estrato
 * @property string $fechaFundacion
 * @property string $numeroEmpleados
 * @property string $horarioTrabajo
 * @property string $linderoNorte
 * @property string $linderoNorteOcupado
 * @property string $linderoSur
 * @property string $linderoSurOcupado
 * @property string $linderoOriente
 * @property string $linderoOrienteOcupado
 * @property string $linderoOccidente
 * @property string $linderoOccidenteOcupado
 * @property string $entidadesOficiales
 * @property string $poliductosMineras
 * @property string $aguasFallas
 * @property string $vias
 * @property string $amenazasComunidad
 * @property string $informacionRelacionesComunidad
 * @property string $relacionesComunidadBuenas
 */
class InformacionPredio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'informacion_predio';
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
			array('idPresupuestoReconstruccion, estrato, fechaFundacion, numeroEmpleados', 'numerical', 'integerOnly'=>true),
			array('predioCopropiedad, conjuntoCerrado, linderoNorteOcupado, linderoSurOcupado, linderoOrienteOcupado, linderoOccidenteOcupado, entidadesOficiales, poliductosMineras, aguasFallas, vias, amenazasComunidad, informacionRelacionesComunidad, relacionesComunidadBuenas', 'length', 'max'=>5),
			array('conjuntoCerradoOtro, ciudad, barrio, sector, horarioTrabajo, linderoNorte, linderoSur, linderoOriente, linderoOccidente', 'length', 'max'=>250),
			array('estrato', 'length', 'max'=>25),
			array('fechaFundacion', 'length', 'max'=>15),
			array('numeroEmpleados', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idInformacionPredio, idPresupuestoReconstruccion, predioCopropiedad, conjuntoCerrado, conjuntoCerradoOtro, ciudad, barrio, sector, estrato, fechaFundacion, numeroEmpleados, horarioTrabajo, linderoNorte, linderoNorteOcupado, linderoSur, linderoSurOcupado, linderoOriente, linderoOrienteOcupado, linderoOccidente, linderoOccidenteOcupado, entidadesOficiales, poliductosMineras, aguasFallas, vias, amenazasComunidad, informacionRelacionesComunidad, relacionesComunidadBuenas', 'safe', 'on'=>'search'),
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
			'idInformacionPredio' => 'Id Información Predio',
			'idPresupuestoReconstruccion' => 'Id Presupuesto Reconstrucción',
			'predioCopropiedad' => 'El predio a asegurar es una copropiedad',
			'conjuntoCerrado' => 'Conjunto cerrado',
			'conjuntoCerradoOtro' => 'Otro',
			'ciudad' => 'Ciudad',
			'barrio' => 'Barrio',
			'sector' => 'Sector',
			'estrato' => 'Estrato',
			'fechaFundacion' => 'Fecha de Fundacion(años)',
			'numeroEmpleados' => 'Número de empleados',
			'horarioTrabajo' => 'Horario de trabajo',
			'linderoNorte' => 'Lindero Norte',
			'linderoNorteOcupado' => 'Ocupado Si/No',
			'linderoSur' => 'Lindero Sur',
			'linderoSurOcupado' => 'Ocupado Si/No',
			'linderoOriente' => 'Lindero Oriente',
			'linderoOrienteOcupado' => 'Ocupado Si/No',
			'linderoOccidente' => 'Lindero Occidente',
			'linderoOccidenteOcupado' => 'Ocupado Si/No',
			'entidadesOficiales' => 'Sedes políticas, bases militares, estaciones de policía, embajadas, entidades oficiales',
			'poliductosMineras' => 'Oleoductos, gasoductos, poliductos, explotaciones mineras, otros similares',
			'aguasFallas' => 'Ríos, quebradas, lagos, lagunas, represas, fallas geológicas',
			'vias' => 'Aeropuertos, autopistas, vías férreas, puertos fluviales, o marítimos',
			'amenazasComunidad' => 'Amenazas contra la copropiedad o sus habitantes',
			'informacionRelacionesComunidad' => 'Información sobre relaciones con la comunidad',
			'relacionesComunidadBuenas' => 'Las relaciones con las comunidad son buenas',
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

		$criteria->compare('idInformacionPredio',$this->idInformacionPredio);
		$criteria->compare('idPresupuestoReconstruccion',$this->idPresupuestoReconstruccion);
		$criteria->compare('predioCopropiedad',$this->predioCopropiedad,true);
		$criteria->compare('conjuntoCerrado',$this->conjuntoCerrado,true);
		$criteria->compare('conjuntoCerradoOtro',$this->conjuntoCerradoOtro,true);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('barrio',$this->barrio,true);
		$criteria->compare('sector',$this->sector,true);
		$criteria->compare('estrato',$this->estrato,true);
		$criteria->compare('fechaFundacion',$this->fechaFundacion,true);
		$criteria->compare('numeroEmpleados',$this->numeroEmpleados,true);
		$criteria->compare('horarioTrabajo',$this->horarioTrabajo,true);
		$criteria->compare('linderoNorte',$this->linderoNorte,true);
		$criteria->compare('linderoNorteOcupado',$this->linderoNorteOcupado,true);
		$criteria->compare('linderoSur',$this->linderoSur,true);
		$criteria->compare('linderoSurOcupado',$this->linderoSurOcupado,true);
		$criteria->compare('linderoOriente',$this->linderoOriente,true);
		$criteria->compare('linderoOrienteOcupado',$this->linderoOrienteOcupado,true);
		$criteria->compare('linderoOccidente',$this->linderoOccidente,true);
		$criteria->compare('linderoOccidenteOcupado',$this->linderoOccidenteOcupado,true);
		$criteria->compare('entidadesOficiales',$this->entidadesOficiales,true);
		$criteria->compare('poliductosMineras',$this->poliductosMineras,true);
		$criteria->compare('aguasFallas',$this->aguasFallas,true);
		$criteria->compare('vias',$this->vias,true);
		$criteria->compare('amenazasComunidad',$this->amenazasComunidad,true);
		$criteria->compare('informacionRelacionesComunidad',$this->informacionRelacionesComunidad,true);
		$criteria->compare('relacionesComunidadBuenas',$this->relacionesComunidadBuenas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InformacionPredio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
