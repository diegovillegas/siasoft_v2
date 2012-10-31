<?php

class ArticuloPrecioController extends Controller
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
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
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
				'actions'=>array('create','update', 'iniciar'),
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
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=new ArticuloPrecio;
                $precios = NivelPrecio::model()->findAll('ACTIVO = "S"');
                $articulo = Articulo::model()->findByPk($id);
                $i=0;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['ArticuloPrecio']))
		{                                       
                                $linea = ArticuloPrecio::model()->find('ACTIVO = "S" AND ARTICULO = "'.$_POST['ArticuloPrecio']['ARTICULO'].'"');
                                if($linea){
                                    foreach ($_POST['NivelPrecio'] as $nivel){
                                        $linea->updateAll(array('MARGEN_MULTIPLICADOR'=>$_POST['NivelPrecio3'][$i], 'PRECIO'=>$_POST['NivelPrecio4'][$i]), 'NIVEL_PRECIO = "'.$nivel.'"');
                                        $i++;
                                    }                                    
                                }
                                else{
                                    foreach ($_POST['NivelPrecio'] as $nivel){                                        
                                        $linea = new ArticuloPrecio;
                                        $linea->ARTICULO = $_POST['ArticuloPrecio']['ARTICULO'];
                                        $linea->NIVEL_PRECIO = $nivel;
                                        $linea->ESQUEMA_TRABAJO = $_POST['NivelPrecio2'][$i];
                                        $linea->MARGEN_MULTIPLICADOR = $_POST['NivelPrecio3'][$i];
                                        $linea->PRECIO = $_POST['NivelPrecio4'][$i];
                                        $linea->ACTIVO = 'S';
                                        $linea->CREADO_POR = Yii::app()->user->name;
                                        $linea->ACTUALIZADO_POR = Yii::app()->user->name;                                        
                                        $linea->insert();
                                        $i++;
                                    }
                                }
                        
				$this->redirect(array('admin'));
		}

		$this->render('update',array(
			'model'=>$model,
                        'precios'=>$precios,
                        'articulo'=>$articulo,
		));
	}
        
        public function actionIniciar(){
            $item_id = $_GET['id'];
            $bus = Articulo::model()->findByPk($item_id, 'ACTIVO = "S"');
            $res = array(
                     'DESCRIPCION'=>$bus->NOMBRE,
                     'COSTO_ESTANDAR'=>$bus->COSTO_ESTANDAR,
                ); 
            echo CJSON::encode($res);
        }

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ArticuloPrecio');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ArticuloPrecio('search');
                $articulo = new Articulo;
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ArticuloPrecio']))
			$model->attributes=$_GET['ArticuloPrecio'];

		$this->render('admin',array(
			'model'=>$model,
                        'articulo'=>$articulo,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=ArticuloPrecio::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='articulo-precio-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
