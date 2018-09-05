<?php
class LoginController extends Controller
{
	public function actionIndex()
	{
		$this->layout="main";

		// if(isset($_GET["excel"]))
		// {
		// 	$model=Countries::model()->findAll();
		// 	$content=$this->renderPartial("excel",array("model"=>$model),true);
		// 	Yii::app()->request->sendFile("myExcel.xls",$content);
		// }

		// $countries=Countries::model()->findAll();
		// $this->render("index",array("countries"=>$countries));

		$this->render("index");
	}


	public function actionRegistrar()
	{
		$this->layout="main";		

		// $this->render("registrar");

		$model=new Login();
		if(isset($_POST["Login"]))
		{
			$model->attributes=$_POST["Login"];
			if($model->save())
			{
				// Yii::app()->user->setFlash("success","Country guardado correctamente =).");
				$this->redirect(array("login/index"));
			}
		}
		$this->render("registrar",array("model"=>$model));
	}

	// public function actionCreate()
	// {
	// 	$model=new Countries();
	// 	if(isset($_POST["Countries"]))
	// 	{
	// 		$model->attributes=$_POST["Countries"];
	// 		if($model->save())
	// 		{
	// 			Yii::app()->user->setFlash("success","Country guardado correctamente =).");
	// 			$this->redirect(array("index"));
	// 		}
	// 	}
	// 	$this->render("create",array("model"=>$model));
	// }

	// public function actionUpdate($id)
	// {
	// 	$model=Countries::model()->findByPk($id);
	// 	if(isset($_POST["Countries"]))
	// 	{
	// 		$model->attributes=$_POST["Countries"];
	// 		if($model->save())
	// 		{
	// 			Yii::app()->user->setFlash("success","Actualizado =)");
	// 			$this->redirect(array("index"));
	// 		}
	// 		else 
	// 			Yii::app()->user->setFlash("error","No se actualizó =(");
	// 	}
	// 	$this->render("update",array("model"=>$model));
	// }

	// public function actionDelete($id)
	// {
	// 	$model=Countries::model()->deleteByPk($id);
	// 	$this->redirect(array("index"));
	// }

	// public function actionView($id)
	// {
	// 	$model=Countries::model()->findByPk($id);
	// 	$this->render("view",array("model"=>$model));
	// }

	// public function actionEnabled($id)
	// {
	// 	$model=Countries::model()->findByPk($id);
	// 	if($model->status==1)
	// 		$model->status=0;
	// 	else
	// 		$model->status=1;
	// 	$model->save();
	// 	$this->redirect(array("index"));
	// }
}  

