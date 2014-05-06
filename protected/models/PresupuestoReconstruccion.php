<?php

/**
 * This is the model class for table "presupuesto_reconstruccion".
 *
 * The followings are the available columns in table 'presupuesto_reconstruccion':
 * @property integer $idPresupuestoReconstruccion
 * @property string $copropiedad
 * @property string $nitCc
 * @property string $direccion
 * @property string $fechaVisita
 * @property string $intermediario
 */
class PresupuestoReconstruccion extends CActiveRecord
{
	public $nuevo;
	public $nuevaCopropiedad;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'presupuesto_reconstruccion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('', 'required'),
			array('copropiedad', 'validacioncopropiedad'),
			array('nuevo', 'length', 'max'=>5),
			array('copropiedad, nuevaCopropiedad, intermediario', 'length', 'max'=>250),
			array('nitCc, direccion, fechaVisita', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nuevo, nuevaCopropiedad, idPresupuestoReconstruccion, copropiedad, nitCc, direccion, fechaVisita, intermediario', 'safe', 'on'=>'search'),
		);
	}
	
	public function validacioncopropiedad($attribute,$params){
		if($this->copropiedad=='' && $this->nuevaCopropiedad==''){
			$this->addError('copropiedad','La copropiedad no puede ser nula');
			$this->addError('nuevaCopropiedad','');
		}
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'informacionGeneral'=>array(self::HAS_ONE,'InformacionGeneral','idPresupuestoReconstruccion'),
			'informacionPredio'=>array(self::HAS_ONE,'InformacionPredio','idPresupuestoReconstruccion'),
			'caracteristicasConstruccion'=>array(self::HAS_ONE,'CaracteristicasConstruccion','idPresupuestoReconstruccion'),
			'caracteristicasInstalacion'=>array(self::HAS_ONE,'CaracteristicasInstalacion','idPresupuestoReconstruccion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nuevo' => 'Nuevo',
			'nuevaCopropiedad' => 'Copropiedad',
			'idPresupuestoReconstruccion' => 'Id Presupuesto Reconstrucción',
			'copropiedad' => 'Copropiedad',
			'nitCc' => 'NIT/CC',
			'direccion' => 'Dirección',
			'fechaVisita' => 'Fecha de Visita',
			'intermediario' => 'Intermediario',
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

		$criteria->compare('idPresupuestoReconstruccion',$this->idPresupuestoReconstruccion);
		$criteria->compare('copropiedad',$this->copropiedad,true);
		$criteria->compare('nitCc',$this->nitCc,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('fechaVisita',$this->fechaVisita,true);
		$criteria->compare('intermediario',$this->intermediario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PresupuestoReconstruccion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	
	public function presupuestoexistente()
	{
		$this->copropiedad=$this->nuevaCopropiedad;
		$PRExistente=presupuestoReconstruccion::model()->findByAttributes(array('copropiedad'=>$this->copropiedad),array('order'=>'idPresupuestoReconstruccion DESC'));
		if($PRExistente!==null){
			$this->nitCc=$PRExistente->nitCc;
			$this->direccion=$PRExistente->direccion;
		}
		
	}
}
