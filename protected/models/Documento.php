<?php

/**
 * This is the model class for table "documento".
 *
 * The followings are the available columns in table 'documento':
 * @property integer $id
 * @property string $nombre_documento
 * @property integer $id_usuario_modificador
 * @property string $nombre_doc_bd
 * @property string $nombre_doc
 * @property string $tipo
 *
 * The followings are the available model relations:
 * @property CrugeUser $u_modificador
 * @property CrugeAuthitem[] $crugeAuthitems
 */
class Documento extends CActiveRecord
{
        public $binaryfile;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'documento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_documento,id_usuario_modificador', 'required'),
			array('binaryfile', 'required','on'=>'insert'),
			array('nombre_documento', 'length', 'max'=>100),
			array('binaryfile', 'file', 
                            'maxSize'=>1024 * 1024 * 10, // 10MB
                            'tooLarge'=>'El archivo a superado el tamaño permitido.',
                            'allowEmpty' => true
                        ),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre_documento, tipo', 'safe', 'on'=>'search'),
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
			'crugeAuthitems' => array(self::MANY_MANY, 'CrugeAuthitem', 'documento_authitem(id_documento, name_authitem)'),
			'perfiles' => array(self::MANY_MANY, 'CrugeAuthitem', 'documento_authitem(name_authitem, id_documento)'),
                        'u_modificador' => array(self::BELONGS_TO, 'CrugeUser','id_usuario_modificador')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre_documento' => 'Nombre Documento',
			'id_usuario_modificador' => 'Id Usuario Modificador',
			'nombre_doc_bd' => 'Nombre Doc Bd',
			'nombre_doc' => 'Nombre Doc',
                        'binaryfile' => 'Archivo Adjunto',
			'tipo' => 'Tipo',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('nombre_documento',$this->nombre_documento,true);
		$criteria->compare('id_usuario_modificador',$this->id_usuario_modificador);
		$criteria->compare('nombre_doc_bd',$this->nombre_doc_bd,true);
		$criteria->compare('nombre_doc',$this->nombre_doc,true);
		$criteria->compare('tipo',$this->tipo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Documento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function asignarPerfilesDocumento($perfiles)
	{
		DocumentoAuthitem::model()->deleteAll('id_documento=?',array($this->id));
		foreach ($perfiles as  $perfil) {
			$p = new DocumentoAuthitem();
			$p->id_documento = $this->id;
			$p->name_authitem = $perfil;
			$p->save();
		}
	}
}
