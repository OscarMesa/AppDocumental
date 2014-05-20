<?php

class DocumentoController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array('accessControl', array('CrugeAccessControlFilter'));
        /* return array(
          'accessControl', // perform access control for CRUD operations
          'postOnly + delete', // we only allow deletion via POST request
          ); */
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        Yii::app()->user->loginUrl = array("/cruge/ui/login");



        return array(
            array('allow', 'actions' => array(
                    'login', 'passwordrecovery', 'captcha'), 'users' => array('*'),),
            array('allow', 'actions' => array('delete', 'admin', 'index', 'view', 'create', 'update', 'descargarArchivo'), 'users' => array('@'),),
            array('deny', 'users' => array('*'),),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Documento('insert');
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        if (isset($_POST['Documento'])) {
            //echo $this->guidv4();
            //echo dirname(Yii::app()->request->scriptFile);exit();
            $model->attributes = $_POST['Documento'];

            $model->fecha_creacion = date('Y-m-d H:i:s');
            $file = CUploadedFile::getInstance($model, 'binaryfile');
            if (!empty($_FILES['Documento']['tmp_name']['binaryfile']) && !$model->validate())
                $model->binaryfile = 'file';
            if (!empty($_FILES['Documento']['tmp_name']['binaryfile']) && $model->validate()) {
                $model->nombre_doc = $file->name;
                $model->nombre_doc_bd = $this->guidv4() . "." . $file->getExtensionName();
                $file->saveAs(dirname(Yii::app()->request->scriptFile) . '/data/attachment/' . $model->nombre_doc_bd);
                $model->tipo = $file->type;
            }


            if ($model->save()) {
                if (isset($_POST['CrugeAuthitem']['name'])) {
                    $model->asignarPerfilesDocumento($_POST['CrugeAuthitem']['name']);
                    if (isset($_POST['Categoria']['cat_id']))
                        $model->asignarCategoriasDocumento($_POST['Categoria']['cat_id']);
                    $usuarios = $this->obtenerUsuariosPerfiles($_POST['CrugeAuthitem']['name']);
                    $this->enviarMailUsuariosDoc($usuarios, $model);
                }
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function obtenerUsuariosPerfiles($perfiles) {
        Yii::import('application.models.CrugeUser');
        $usuarios = array();
        foreach ($perfiles as $perfil) {
            $m = CrugeAuthitem::model()->find("lower(name)=lower(?)", array($perfil));
            foreach ($m->crugeUsers as $usuario) {
                if (!array_key_exists($usuario->iduser, $usuarios)) {
                    $usuarios[] = $usuario;
                }
            }
        }
        return $usuarios;
    }

    public function guidv4() {
        $data = openssl_random_pseudo_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $model->scenario = 'update';
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        if (isset($_POST['Documento'])) {
            $model->attributes = $_POST['Documento'];
            $file = CUploadedFile::getInstance($model, 'binaryfile');
            if (!empty($_FILES['Documento']['tmp_name']['binaryfile']) && $model->validate()) {
                if (file_exists(dirname(Yii::app()->request->scriptFile) . '/data/attachment/' . $model->nombre_doc_bd))
                    unlink(dirname(Yii::app()->request->scriptFile) . '/data/attachment/' . $model->nombre_doc_bd);

                $model->nombre_doc = $file->name;
                $model->nombre_doc_bd = $this->guidv4() . "." . $file->getExtensionName();
                $file->saveAs(dirname(Yii::app()->request->scriptFile) . '/data/attachment/' . $model->nombre_doc_bd);
                $model->tipo = $file->type;
            }
            if ($model->save()) {
                $perfiles = array();
                $categorias = array();

                if (isset($_POST['CrugeAuthitem']['name']))
                    $perfiles = $_POST['CrugeAuthitem']['name'];
                $model->asignarPerfilesDocumento($perfiles);
                if (isset($_POST['Categoria']['cat_id']))
                    $categorias = $_POST['Categoria']['cat_id'];
                $model->asignarCategoriasDocumento($categorias);
                $usuarios = $this->obtenerUsuariosPerfiles($perfiles);
                $this->actualizarMailUsuariosDoc($usuarios, $model);

                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        try {
            $this->loadModel($id)->delete();
        } catch (CDbException $ex) {
            echo $ex->getMessage();
        }
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
       $criteria = new CDbCriteria();
       $criteria->order = "fecha_creacion DESC";
       if (isset($_GET['ajax'])) {
            if($_GET['type'] == 'date')
            {
                $criteria->addCondition('fecha_creacion  BETWEEN ? AND ?');
                $criteria->params = array($_GET['value'].'-01',$_GET['value'].'-31');
            }else if($_GET['type'] == 'category'){
                $criteria->join = " INNER JOIN categorias_documentos t2 ON( t.id = t2.id_documento)";
                $criteria->addCondition('t2.id_cat = ?');
                $criteria->params = array($_GET['value']);
            }
             $dataProvider = new CActiveDataProvider('Documento', array(
                 'criteria' => $criteria, 
                 'pagination' => array(
                    'pageSize' => 10
                )
            ));
        } else {
            $dataProvider = new CActiveDataProvider('Documento', array(
                'criteria' => $criteria,
                'pagination' => array(
                    'pageSize' => 10
                )
            ));
        }
     
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Documento('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Documento']))
            $model->attributes = $_GET['Documento'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Documento the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Documento::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Documento $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'documento-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionDescargarArchivo($id) {
        $model = Documento::model()->findByPk($id);
        //header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past
        /*   header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");    // always modified
          header("Content-type: application/octet-stream");
          header("Content-Transfer-Encoding: Binary"); */
        header("Content-Type: application/octet-stream");
        header("Content-disposition: attachment; filename=\"" . basename($model->nombre_doc_bd) . "\"");
        echo $model->binaryfile;
        exit();
    }

    /**
     * Este metodo enviara a los usuarios un correo de notificacion sobre un archivo 
     * @param CrugeUser[] $usuarios
     * @param Documento $documento
     */
    public function enviarMailUsuariosDoc($usuarios, $documento) {
        Yii::import('ext.yii-mail.YiiMailMessage');
        $message = new YiiMailMessage();
        $message->view = "notificacionArchivo";
        foreach ($usuarios as $usuario) {
            $params = array('usuario' => $usuario, 'documento' => $documento);
            $message->subject = 'Nuevo documento adjunto - ' . $documento->nombre_doc;
            $message->setBody($params, 'text/html');
            // if ($usuario->email == 'oscarmesa.elpoli@gmail.com') {
            $message->addTo($usuario->email);
            $message->from = 'correo@midominio.com';
            Yii::app()->mail->send($message);
        }
    }

    /**
     * Este metodo enviara a los usuarios un correo de notificacion sobre un archivo 
     * @param CrugeUser[] $usuarios
     * @param Documento $documento
     */
    public function actualizarMailUsuariosDoc($usuarios, $documento) {
        Yii::import('ext.yii-mail.YiiMailMessage');
        $message = new YiiMailMessage();
        $message->view = "notificacionArchivo";
        foreach ($usuarios as $usuario) {
            $params = array('usuario' => $usuario, 'documento' => $documento);
            $message->subject = 'El documento - ' . $documento->nombre_doc . ' ha sido actualizado.';
            $message->setBody($params, 'text/html');
            // if ($usuario->email == 'oscarmesa.elpoli@gmail.com') {
            $message->addTo($usuario->email);
            $message->from = 'correo@midominio.com';
            Yii::app()->mail->send($message);
        }
    }

}
