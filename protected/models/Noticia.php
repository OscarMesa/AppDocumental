<?php

/**
 * This is the model class for table "documento".
 *
 * The followings are the available columns in table 'documento':
 * @property integer $id
 * @property string $titulo
 * @property string $imagen
 * @property string $descripcion
 * @property integer $id_user
 * @property string $url_referente
 * @property string $fecha_creacion
 *
 * The followings are the available model relations:
 * @property CrugeUser $user_creador
 */
class Noticia extends CActiveRecord {

    public $imagen;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'noticia';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('titulo,imagen,descripcion,id_user,url_referente,fecha_creacion', 'required'),
            array('imagen', 'required', 'on' => 'insert_img'),
            array('binaryfile', 'file',
                'maxSize' => 1024 * 1024 * 10, // 10MB
                'tooLarge' => 'El archivo a superado el tamaño permitido.',
                'allowEmpty' => true
            ),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, titulo, imagen, descripcion, id_user, url_referente, fecha_creacion', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'crugeAuthitems' => array(self::BELONGS_TO, 'CrugeUser', 'id_user'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id'=>'id',
            'titulo' => 'Titulo',
            'imagen' => 'Dirección imagen',
            'descripcion' => 'Descripción',
            'id_user' => 'Usuario creador',
            'url_referente' => 'Direccion referente (url de donde fue tomado)',
            'fecha_creacion' => 'Fecha de creación'
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria();

        $criteria->compare('id', $this->id);
        $criteria->compare('titulo', $this->titulo, true);
        $criteria->compare('imagen', $this->imagen);
        $criteria->compare('descripcion', $this->descripcion, true);
        $criteria->compare('id_user', $this->id_user, true);
        $criteria->compare('url_referente', $this->url_referente, true);
        $criteria->compare('fecha_creacion', $this->fecha_creacion, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Documento the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
}
