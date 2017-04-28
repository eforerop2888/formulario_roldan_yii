<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				//$this->redirect(array('site/crear'));
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
	public function actionValidar_servidor(){
		$identificacion = $_POST['cedula'];
		$busqueda=CActiveRecord::model("Clientes")->findAll(array("condition"=>"identificacion = '$identificacion'"));
		$busquedaiva=CActiveRecord::model("Clientes")->findAll(array("condition"=>"identificacion = '$identificacion' AND retenedores LIKE '%1%'"));
		$busquedaica=CActiveRecord::model("Clientes")->findAll(array("condition"=>"identificacion = '$identificacion' AND retenedores LIKE '%2%'"));
		$busquedarete=CActiveRecord::model("Clientes")->findAll(array("condition"=>"identificacion = '$identificacion' AND retenedores LIKE '%3%'"));
		$busquedacon=CActiveRecord::model("clientes")->findAll(array("condition"=>"identificacion = '$identificacion' AND forma_pago LIKE '%1%'"));
		$busquedache=CActiveRecord::model("clientes")->findAll(array("condition"=>"identificacion = '$identificacion' AND forma_pago LIKE '%2%'"));
		$busquedatrans=CActiveRecord::model("clientes")->findAll(array("condition"=>"identificacion = '$identificacion' AND forma_pago LIKE '%3%'"));
		$busquedaaar=CActiveRecord::model("clientes")->findAll(array("condition"=>"identificacion = '$identificacion' AND compromisos LIKE '%1%'"));
		$busquedastp=CActiveRecord::model("clientes")->findAll(array("condition"=>"identificacion = '$identificacion' AND compromisos LIKE '%2%'"));
		$busquedarcl=CActiveRecord::model("clientes")->findAll(array("condition"=>"identificacion = '$identificacion' AND compromisos LIKE '%3%'"));
		$busquedaotm=CActiveRecord::model("clientes")->findAll(array("condition"=>"identificacion = '$identificacion' AND compromisos LIKE '%4%'"));
		$busquedaglx=CActiveRecord::model("clientes")->findAll(array("condition"=>"identificacion = '$identificacion' AND compromisos LIKE '%5%'"));
		$busquedaits=CActiveRecord::model("clientes")->findAll(array("condition"=>"identificacion = '$identificacion' AND compromisos LIKE '%6%'"));
		$doc_cliente = $busqueda[0]["id_clientes"];
		$busquedadir=CActiveRecord::model("Direcciones")->findAll(array("condition"=>"id_clientes = $doc_cliente"));
		$busquedarep=CActiveRecord::model("Personas")->findAll(array("condition"=>"id_cliente = $doc_cliente AND rol = 'RL'"));
		$busquedasup=CActiveRecord::model("Personas")->findAll(array("condition"=>"id_cliente = $doc_cliente AND rol = 'RS'"));
		$busquedajce=CActiveRecord::model("Personas")->findAll(array("condition"=>"id_cliente = $doc_cliente AND rol = 'JCE'"));
		$busquedajl=CActiveRecord::model("Personas")->findAll(array("condition"=>"id_cliente = $doc_cliente AND rol = 'JL'"));
		$busquedapc=CActiveRecord::model("Personas")->findAll(array("condition"=>"id_cliente = $doc_cliente AND rol = 'PC'"));
		$busquedapc2=CActiveRecord::model("Personas")->findAll(array("condition"=>"id_cliente = $doc_cliente AND rol = 'PC2'"));
		$busquedabce=CActiveRecord::model("Personas")->findAll(array("condition"=>"id_cliente = $doc_cliente AND rol = 'BCE'"));
		$busquedarc1=CActiveRecord::model("Personas")->findAll(array("condition"=>"id_cliente = $doc_cliente AND rol = 'RC1'"));
		$busquedarc2=CActiveRecord::model("Personas")->findAll(array("condition"=>"id_cliente = $doc_cliente AND rol = 'RC2'"));
		$busquedarb1=CActiveRecord::model("Personas")->findAll(array("condition"=>"id_cliente = $doc_cliente AND rol = 'RB1'"));
		$busquedarb2=CActiveRecord::model("Personas")->findAll(array("condition"=>"id_cliente = $doc_cliente AND rol = 'RB2'"));
		$datos = array();
		
		foreach ($busqueda as $item) {
			$datos[] = array(
				"nombres_apellidos" => $item->nombres_apellidos,
				"tipo_documento" => $item->tipo_documento,
				"direccion" => $busquedadir[0]["direccion"],
				"ciudad" => $item->ciudad,
				"telefonos" => $item->telefonos,
				"direccion_rut" => $item->direccion_rut,
				"nombre_rl" => $busquedarep[0]["nombre"],
				"identificacion_rl" => $busquedarep[0]["identificacion"],
				"direccion_rl" => $busquedarep[0]["direccion"],
				"nombre_sp" => $busquedasup[0]["nombre"],
				"identificacion_sp" => $busquedasup[0]["identificacion"],
				"direccion_sp" => $busquedasup[0]["direccion"],
				"actividad_economica" => $item->actividad_economica,
				"capital_pagado" => $item->capital_pagado,
				"origen_recursos" => $item->origen_recursos,
				"jefe_comercio_exterior" => $busquedajce[0]["nombre"],
				"iden_comercio_exterior" => $busquedajce[0]["identificacion"],
				"direccion_comercio_exterior" => $busquedajce[0]["direccion"],
				"email_comercio_exterior" => $busquedajce[0]["email"],
				"jefe_logistica" => $busquedajl[0]["nombre"],
				"iden_jefe_logistica" => $busquedajl[0]["identificacion"],
				"direccion_jefe_logistica" => $busquedajl[0]["direccion"],
				"email_jefe_logistica" => $busquedajl[0]["email"],
				"beneficiario_comercio_exterior" => $busquedabce[0]["nombre"],
				"iden_beneficiario" => $busquedabce[0]["identificacion"],
				"direccion_beneficiario" => $busquedabce[0]["direccion"],
				"principales_clientes" => $busquedapc[0]["nombre"],
				"iden_principales_clientes" => $busquedapc[0]["identificacion"],
				"direccion_principales_clientes" => $busquedapc[0]["direccion"],
				"principales_clientes2" => $busquedapc2[0]["nombre"],
				"iden_principales_clientes2" => $busquedapc2[0]["identificacion"],
				"direccion_principales_clientes2" => $busquedapc2[0]["direccion"],
				"ref_comercial_1" => $busquedarc1[0]["nombre"],
				"nit_ref_comercial_1" => $busquedarc1[0]["identificacion"],
				"telefono_ref_comercial_1" => $busquedarc1[0]["telefono"],
				"ref_comercial_2" => $busquedarc2[0]["nombre"],
				"nit_ref_comercial_2" => $busquedarc2[0]["identificacion"],
				"telefono_ref_comercial_2" => $busquedarc2[0]["telefono"],
				"ref_bancaria_1" => $busquedarb1[0]["nombre"],
				"cuenta_ref_bancaria_1" => $busquedarb1[0]["cuenta"],
				"telefono_ref_bancaria_1" => $busquedarb1[0]["telefono"],
				"ref_bancaria_2" => $busquedarb2[0]["nombre"],
				"cuenta_ref_bancaria_2" => $busquedarb2[0]["cuenta"],
				"telefono_ref_bancaria_2" => $busquedarb2[0]["telefono"],
				"grandes_contribuyentes" => $item->grandes_contribuyentes,
				"busquedaiva" => $busquedaiva[0]["retenedores"],
				"busquedaica" => $busquedaica[0]["retenedores"],
				"busquedarete" => $busquedarete[0]["retenedores"],
				"busquedacon"=> $busquedacon[0]["forma_pago"],
				"busquedache"=>$busquedache[0]["forma_pago"],
				"busquedatrans"=>$busquedatrans[0]["forma_pago"],
				"banco_forma_pago"=> $item->banco_forma_pago,
				"busquedaaar"=>$busquedaaar[0]["compromisos"],
				"busquedastp"=>$busquedastp[0]["compromisos"],
				"busquedarcl"=>$busquedarcl[0]["compromisos"],
				"busquedaotm"=>$busquedaotm[0]["compromisos"],
				"busquedaglx"=>$busquedaglx[0]["compromisos"],
				"busquedaits"=>$busquedaits[0]["compromisos"],
				"user_creado"=>1,
				"id_creado"=>$item->id_clientes
			);	
		}
		echo json_encode($datos);
	}
	
	public function actionPdf()
	{
		$model = new ValidarRegistro;
		$model->attributes=$_POST["ValidarRegistro"];
		$this->layout= 'roldan';
		if($model->editar_creado==1){
			$model->id_client=$model->id_creado;
			}
		$busqueda=CActiveRecord::model("Clientes")->findAll(array("condition"=>"id_clientes = $model->id_client"));
		$busquedadir=CActiveRecord::model("Direcciones")->findAll(array("condition"=>"id_clientes = $model->id_client"));
		$busquedarep=CActiveRecord::model("Personas")->findAll(array("condition"=>"id_cliente = $model->id_client AND rol = 'RL'"));
		$busquedasup=CActiveRecord::model("Personas")->findAll(array("condition"=>"id_cliente = $model->id_client AND rol = 'RS'"));
		$busquedajce=CActiveRecord::model("Personas")->findAll(array("condition"=>"id_cliente = $model->id_client AND rol = 'JCE'"));
		$busquedajl=CActiveRecord::model("Personas")->findAll(array("condition"=>"id_cliente = $model->id_client AND rol = 'JL'"));
		$busquedapc=CActiveRecord::model("Personas")->findAll(array("condition"=>"id_cliente = $model->id_client AND rol = 'PC'"));
		$busquedapc2=CActiveRecord::model("Personas")->findAll(array("condition"=>"id_cliente = $model->id_client AND rol = 'PC2'"));
		$busquedabce=CActiveRecord::model("Personas")->findAll(array("condition"=>"id_cliente = $model->id_client AND rol = 'BCE'"));
		$busquedarc1=CActiveRecord::model("Personas")->findAll(array("condition"=>"id_cliente = $model->id_client AND rol = 'RC1'"));
		$busquedarc2=CActiveRecord::model("Personas")->findAll(array("condition"=>"id_cliente = $model->id_client AND rol = 'RC2'"));
		$busquedarb1=CActiveRecord::model("Personas")->findAll(array("condition"=>"id_cliente = $model->id_client AND rol = 'RB1'"));
		$busquedarb2=CActiveRecord::model("Personas")->findAll(array("condition"=>"id_cliente = $model->id_client AND rol = 'RB2'"));
		$busquedaiva=CActiveRecord::model("clientes")->findAll(array("condition"=>"id_clientes = $model->id_client AND retenedores LIKE '%1%'"));
		$busquedaica=CActiveRecord::model("clientes")->findAll(array("condition"=>"id_clientes = $model->id_client AND retenedores LIKE '%2%'"));
		$busquedarete=CActiveRecord::model("clientes")->findAll(array("condition"=>"id_clientes = $model->id_client AND retenedores LIKE '%3%'"));
		$busquedacon=CActiveRecord::model("clientes")->findAll(array("condition"=>"id_clientes = $model->id_client AND forma_pago LIKE '%1%'"));
		$busquedache=CActiveRecord::model("clientes")->findAll(array("condition"=>"id_clientes = $model->id_client AND forma_pago LIKE '%2%'"));
		$busquedatrans=CActiveRecord::model("clientes")->findAll(array("condition"=>"id_clientes = $model->id_client AND forma_pago LIKE '%3%'"));
		$busquedaaar=CActiveRecord::model("clientes")->findAll(array("condition"=>"id_clientes = $model->id_client AND compromisos LIKE '%1%'"));
		$busquedastp=CActiveRecord::model("clientes")->findAll(array("condition"=>"id_clientes = $model->id_client AND compromisos LIKE '%2%'"));
		$busquedarcl=CActiveRecord::model("clientes")->findAll(array("condition"=>"id_clientes = $model->id_client AND compromisos LIKE '%3%'"));
		$busquedaotm=CActiveRecord::model("clientes")->findAll(array("condition"=>"id_clientes = $model->id_client AND compromisos LIKE '%4%'"));
		$busquedaglx=CActiveRecord::model("clientes")->findAll(array("condition"=>"id_clientes = $model->id_client AND compromisos LIKE '%5%'"));
		$busquedaits=CActiveRecord::model("clientes")->findAll(array("condition"=>"id_clientes = $model->id_client AND compromisos LIKE '%6%'"));
		$busquedarlg=CActiveRecord::model("clientes")->findAll(array("condition"=>"id_clientes = $model->id_client AND compromisos LIKE '%7%'"));
		$mPDF1 = Yii::app()->ePdf->mpdf();
		$stylesheet = file_get_contents('css/pdf.css');
		$mPDF1->WriteHTML($stylesheet,1);
		$mPDF1->WriteHTML($this->renderPartial('pdf', array('busqueda' => $busqueda, 'busquedadir' => $busquedadir,
		'busquedarep' => $busquedarep, 'busquedasup' => $busquedasup, 'busquedajce' => $busquedajce, 'busquedajl' => $busquedajl,
		'busquedapc' => $busquedapc, 'busquedapc2' => $busquedapc2, 'busquedabce' => $busquedabce, 'busquedarc1' => $busquedarc1, 'busquedarc2' => $busquedarc2,
		'busquedarb1' => $busquedarb1, 'busquedarb2' => $busquedarb2, 'busquedaiva' => $busquedaiva, 'busquedaica' => $busquedaica,
		'busquedarete' => $busquedarete, 'busquedacon' => $busquedacon, 'busquedache' => $busquedache, 'busquedatrans' => $busquedatrans,
		'busquedaaar' => $busquedaaar, 'busquedastp' => $busquedastp, 'busquedarcl' => $busquedarcl, 'busquedaotm' => $busquedaotm, 
		'busquedaglx' => $busquedaglx, 'busquedaits' => $busquedaits, 'busquedarlg' => $busquedarlg),true));
		$mPDF1->Output();
	}
	
	public function actionCrear()
	{
		$model = new ValidarRegistro;
		$this->layout= 'roldan';
		if(isset($_POST['ValidarRegistro'])){
			$model->attributes=$_POST["ValidarRegistro"];
			if(!$model->validate()){
				$this->redirect($this->createUrl('site/crear'));
			}else{
				$retenedores = $model->retenedores[0].$model->retenedores[1].$model->retenedores[2];
				$forma_pago = $model->forma_pago[0].$model->forma_pago[1].$model->forma_pago[2];
				$compromisos = $model->compromisos[0].$model->compromisos[1].$model->compromisos[2].$model->compromisos[3].$model->compromisos[4].$model->compromisos[5].$model->compromisos[6];
				$consulta = new ConsultasDB;
				$consulta->guardar_cliente(
											$model->actividad_economica,
											$model->banco_forma_pago,
											$model->capital_pagado,
											$model->ciudad,
											$model->direccion_rut,
											$forma_pago, 
											$model->grandes_contribuyentes, 
											$model->identificacion, 
											$model->nombres_apellidos, 
											$model->origen_recursos, 
											$retenedores,
											$model->telefonos, 
											$model->tipo_documento,
											$compromisos,
											$model->editar_h,
											$model->id_client,
											$model->editar_creado,
											$model->id_creado
											);
				$id_cliente=Yii::app()->db->getLastInsertID('clientes');
				$consulta->guardar_direccion(
											$model->direccion_cliente,
											$model->id_client,
											$model->editar_h,
											$id_cliente,
											$model->editar_creado,
											$model->id_creado
											);
				$consulta->guardar_persona(
											$model->nom_repre_legal,
											$model->iden_repre_legal,
											$model->dir_repre_legal,
											$model->nom_repre_suple,
											$model->iden_repre_suple,
											$model->dir_repre_suple,
											$model->jefe_comercio_exterior,
											$model->iden_comercio_exterior,
											$model->direccion_comercio_exterior,
											$model->email_comercio_exterior,
											$model->jefe_logistica,
											$model->iden_jefe_logistica,
											$model->direccion_jefe_logistica,
											$model->email_jefe_logistica,
											$model->beneficiario_comercio_exterior,
											$model->iden_beneficiario,
											$model->direccion_beneficiario,
											$model->principales_clientes,
											$model->iden_principales_clientes,
											$model->direccion_principales_clientes,
											$model->principales_clientes2,
											$model->iden_principales_clientes2,
											$model->direccion_principales_clientes2,
											$model->ref_comercial_1,
											$model->nit_ref_comercial_1,
											$model->telefono_ref_comercial_1,
											$model->ref_comercial_2,
											$model->nit_ref_comercial_2,
											$model->telefono_ref_comercial_2,
											$model->ref_bancaria_1,
											$model->cuenta_ref_bancaria_1,
											$model->telefono_ref_bancaria_1,
											$model->ref_bancaria_2,
											$model->cuenta_ref_bancaria_2,
											$model->telefono_ref_bancaria_2,
											$model->id_client,
											$model->editar_h,
											$id_cliente,
											$model->editar_creado,
											$model->id_creado
											);
			}
		}
		if(!isset($id_cliente)){
			$this->render('crear', array('model' => $model, 'editar' => 1));
		}else{
				$this->render('crear', array('model' => $model, 'editar' => 2, 'id_client' => $id_cliente, 'id_cliente_up' => $sesion_id));
				}
	}
	
}