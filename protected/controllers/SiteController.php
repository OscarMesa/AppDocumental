<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        $criteria = new CDbCriteria();
        $criteria->limit = 2;
        $criteria->order = 'fecha_creacion DESC';
        $dataProviderDoc = new CActiveDataProvider('Documento', array(
                 'criteria' => $criteria,
                 'pagination' => array('pageSize' => 2,),
                 'totalItemCount' => 2,
            ));
        
        $criteria_noticias = new CDbCriteria();
        $criteria_noticias->limit = 5;
        $criteria_noticias->order = "fecha_creacion DESC";
        $dataProviderNot = new CActiveDataProvider('Noticia', array(
                 'criteria' => $criteria_noticias,
                 'pagination' => array('pageSize' => 5,),
                 'totalItemCount' => 5,
            ));
        $dataProviderInd = new CActiveDataProvider('Indicadores');
        $this->render('index',array(
            'dataProviderDoc' => $dataProviderDoc,
            'dataProviderNot' => $dataProviderNot,
            'dataProviderInd' => $dataProviderInd
        ));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        Yii::import('application.vendor.Utilidades');
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
//                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
//                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
//                $headers = "From: $name <{$model->email}>\r\n" .
//                        "Reply-To: {$model->email}\r\n" .
//                        "MIME-Version: 1.0\r\n" .
//                        "Content-Type: text/plain; charset=UTF-8";
//
//                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);

 $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
//                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
//                $headers = "From: $name <{$model->email}>\r\n" .
//                        "Reply-To: {$model->email}\r\n" .
//                        "MIME-Version: 1.0\r\n" .
//                        "Content-Type: text/plain; charset=UTF-8";
//
//                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);

                Yii::import('ext.yii-mail.YiiMailMessage');
                $message = new YiiMailMessage();
                $message->subject = $model->subject;
                $message->setBody($model->body, 'text/html');
                
                $message->addTo(Utilidades::$mail);
                $message->from = $model->email;
                Yii::app()->mail->send($message);
                Yii::app()->user->setFlash('contact', 'Gracias por contactar con nosotros. Le responderemos tan pronto como sea posible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

}
