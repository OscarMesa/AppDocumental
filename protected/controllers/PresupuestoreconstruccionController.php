<?php

class PresupuestoreconstruccionController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */ 
	public function filters()
	{
		return array(array('CrugeAccessControlFilter'));
		/*return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);*/
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$model=$this->loadModel($id);
		
		$this->render('ver',array(
			'model'=>$model,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	/*public function actionCreate()
	{
		$model=new Insercion;
		//$model1=new InformacionGeneral;

		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);

		
		if(isset($_POST['Insercion']))
		{
			$model->attributes=$_POST['Insercion'];
			
			$valid=$model->validate();
			$valid=$model1->validate() && $valid;
			
			if($model->save()){
				
				$this->redirect('index');
			}
		
		}
		$this->render('create',array(
			'model'=>$model,
		));
	
	}*/

	/**
	 * Ingresar en el nuevo modelo.
	 */
	public function actionIngresar()
	{
		$modelpr=new PresupuestoReconstruccion;
		$modelig=new InformacionGeneral;
		$modelip=new InformacionPredio;
		$modelcc=new CaracteristicasConstruccion;
		$modelci=new CaracteristicasInstalacion;
		
		$this->performAjaxValidation(array($modelpr,$modelig,$modelip,$modelcc,$modelci));
		
		if(isset($_POST['PresupuestoReconstruccion'], $_POST['InformacionGeneral'], $_POST['InformacionPredio'], $_POST['CaracteristicasConstruccion'], $_POST['CaracteristicasInstalacion']))
		{
			$modelpr->attributes=$_POST['PresupuestoReconstruccion'];
			$modelig->attributes=$_POST['InformacionGeneral'];
			$modelip->attributes=$_POST['InformacionPredio'];
			$modelcc->attributes=$_POST['CaracteristicasConstruccion'];
			$modelcc->attributes=$_POST['CaracteristicasInstalacion'];
			
			if($modelpr->nuevo=='No')
				$modelpr->presupuestoexistente();
			
			
			$valid=$modelpr->validate() && $modelig->validate() && $modelip->validate() && $modelcc->validate() && $modelci->validate();
			
			 if($valid)
			{
				// use false parameter to disable validation
				$modelpr->save(false);
				$modelig->idPresupuestoReconstruccion=$modelpr->idPresupuestoReconstruccion;
				$modelip->idPresupuestoReconstruccion=$modelpr->idPresupuestoReconstruccion;
				$modelcc->idPresupuestoReconstruccion=$modelpr->idPresupuestoReconstruccion;
				$modelci->idPresupuestoReconstruccion=$modelpr->idPresupuestoReconstruccion;
				$modelig->save(false);
				$modelip->save(false);
				$modelcc->save(false);
				$modelci->save(false);
				
				$this->redirect(array('view','id'=>$modelpr->idPresupuestoReconstruccion));
			}
		}

		$this->render('ingresar',array(
			'modelpr'=>$modelpr,
			'modelig'=>$modelig,
			'modelip'=>$modelip,
			'modelcc'=>$modelcc,
			'modelci'=>$modelci,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	/*public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['PresupuestoReconstruccion']))
		{
			$model->attributes=$_POST['PresupuestoReconstruccion'];
			if($model->save())
				$this->redirect(array('actualizar','id'=>$id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}*/

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionActualizar($id)
	{
		$modelpr=$this->loadModel($id);
		$modelig=InformacionGeneral::model()->find('idPresupuestoReconstruccion = "'.$id.'"');
		$modelip=InformacionPredio::model()->find('idPresupuestoReconstruccion = "'.$id.'"');
		$modelcc=CaracteristicasConstruccion::model()->find('idPresupuestoReconstruccion = "'.$id.'"');
		$modelci=CaracteristicasInstalacion::model()->find('idPresupuestoReconstruccion = "'.$id.'"');
		
		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation(array($modelpr,$modelig,$modelip,$modelcc,$modelci));

		if(isset($_POST['PresupuestoReconstruccion'], $_POST['InformacionGeneral'], $_POST['InformacionPredio'], $_POST['CaracteristicasConstruccion'], $_POST['CaracteristicasInstalacion']))
		{
			$modelpr->attributes=$_POST['PresupuestoReconstruccion'];
			$modelig->attributes=$_POST['InformacionGeneral'];
			$modelip->attributes=$_POST['InformacionPredio'];
			$modelcc->attributes=$_POST['CaracteristicasConstruccion'];
			$modelcc->attributes=$_POST['CaracteristicasInstalacion'];
			
			$valid=$modelpr->validate() && $modelig->validate() && $modelip->validate() && $modelcc->validate() && $modelci->validate();
			
			 if($valid){
				$modelpr->save(false);
				$modelig->save(false);
				$modelip->save(false);
				$modelcc->save(false);
				$modelci->save(false);
				
				$this->redirect(array('view','id'=>$id));
			 }
		}

		$this->render('actualizar',array(
			'modelpr'=>$modelpr,
			'modelig'=>$modelig,
			'modelip'=>$modelip,
			'modelcc'=>$modelcc,
			'modelci'=>$modelci,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();
		$modelig=InformacionGeneral::model()->find('idPresupuestoReconstruccion = "'.$id.'"')->delete();
		$modelip=InformacionPredio::model()->find('idPresupuestoReconstruccion = "'.$id.'"')->delete();
		$modelcc=CaracteristicasConstruccion::model()->find('idPresupuestoReconstruccion = "'.$id.'"')->delete();
		$modelci=CaracteristicasInstalacion::model()->find('idPresupuestoReconstruccion = "'.$id.'"')->delete();
		
		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('PresupuestoReconstruccion');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new PresupuestoReconstruccion('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['PresupuestoReconstruccion']))
			$model->attributes=$_GET['PresupuestoReconstruccion'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PresupuestoReconstruccion the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=PresupuestoReconstruccion::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param PresupuestoReconstruccion $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='presupuesto-reconstruccion-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
