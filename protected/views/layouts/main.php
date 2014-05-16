<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->
        <?php Yii::app()->bootstrap->register(); ?>

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/unsemantic/assets/stylesheets/unsemantic-grid-base.css" /> 
       <?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/css/template.css'); ?>


        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
        <?php
        $this->widget('bootstrap.widgets.TbNavbar', array(
            'type' => 'inverse', // null or 'inverse'
            'brand' => '',
            'brandUrl' => Yii::app()->getBaseUrl(true),
            'collapse' => true, // requires bootstrap-responsive.css
            'items' => array(
                array(
                    'class' => 'bootstrap.widgets.TbMenu',
                    'items' => array(
                        array('label' => 'Home', 'url' => array('/site/index')),
                        array('label' => 'Documentos', 'url' => array('/documento'),
                            'visible' => !Yii::app()->user->isGuest,
                            'active'=>$this->id=='documento'?true:false),
                        array('label' => 'Sobre nosotros', 'url' => array('/site/page', 'view' => 'about')),
                        array('label' => 'Contactanos', 'url' => array('/site/contact')),
                        array('label' => 'Ingresar '
                            , 'url' => Yii::app()->user->ui->loginUrl
                            , 'visible' => Yii::app()->user->isGuest
                            , 'itemOptions' => array(
                                'class' => 'menu_ingreso menu_entrar'
                            ),
                        ),
                        array('label' => 'Salir '
                            , 'url' => Yii::app()->user->ui->logoutUrl
                            , 'visible' => !Yii::app()->user->isGuest
                            , 'itemOptions' => array(
                                'class' => 'menu_ingreso menu_salir'
                            ),
                        ),
                        array('label' => ' |  Usuarios'
                            , 'url' => Yii::app()->user->ui->userManagementAdminUrl
                            , 'visible' => Yii::app()->user->getIsSuperAdmin()
                            , 'itemOptions' => array(
                                'class' => 'menu_usuarios'
                            )
                        )
                    ),
                ),
            ),
        ));
        ?>
        <div class="container" id="page">

            <div id="header">
                <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
            </div><!-- header -->

            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>

            <div class="clear"></div>



        </div><!-- page -->
        <div id="footer">
            Copyright &copy; <?php echo date('Y'); ?> por Mi empresa.<br/>
            Todos los derechos  reservados.<br/>
        </div><!-- footer -->
        <?php echo Yii::app()->user->ui->displayErrorConsole(); ?>
    </body>
</html>
