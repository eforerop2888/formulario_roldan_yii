<?php

//los modelos siempre deben extender de CActive o alguna clase fija de CActiverecord
class Users extends CActiveRecord
{
	//asociar tabla al modelo vamor a crear el metodo tableName() el cual debera retornar un string que contiene el nombre de la tabla a la cual va a ir a buscar la información
	//si no creamos este metodo el modelo asume que la tabla sera el nombre de la clase "Users". Despues vamos al archivo main.php en el cual podre configurar la conexion a la BD
	//el nombre del arreglo es 'db'
	public function tableName()
	{
		return "tbl_user";	
	}
}
?>