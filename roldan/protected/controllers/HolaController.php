<?php
#http://localhost:8080/yii/roldan/hola/index
//Creamos nuestra clase la cual siempre hereda de Controller, archivo que esta ubicado en components/Controller.php
class HolaController extends Controller
{
	//los controladores tiene acciones "funciones" que siempre llevan el prefijo action
	public function actionIndex()
	{
		//accedemos a todos los datos de una tabla
		$model=CActiveRecord::model("Users")->findall();
		//renderizamos la vista que vamos a crear
		$twitter="@roldan";
		$facebook="roldan";
		//podemos mandar los datos del controlados o del modelo
		$this->render("index",array("twitter"=>$twitter,"facebook"=>$facebook,"model"=>$model));
		
	}	
}


?>