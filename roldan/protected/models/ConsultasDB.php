<?php

class ConsultasDB{
	
	public function guardar_cliente($actividad_economica, $banco_forma_pago, $capital_pagado, $ciudad, $direccion_rut, $forma_pago, $grandes_contribuyentes,
	$identificacion, $nombres_apellidos, $origen_recursos, $retenedores, $telefonos, $tipo_documento, $compromisos, $editar_h, $id_client, $editar_creado, $id_creado)
	{
		$conexion= yii::app()->db;
		if($editar_h==1&&$editar_creado!=1){
		$consulta="INSERT INTO clientes";
		$consulta.="(actividad_economica, banco_forma_pago, capital_pagado, ciudad, ";
		$consulta.="direccion_rut, forma_pago, grandes_contribuyentes, identificacion, nombres_apellidos, origen_recursos, retenedores, telefonos, tipo_documento, compromisos)";
		$consulta.="VALUES";
		$consulta.="('$actividad_economica', '$banco_forma_pago', '$capital_pagado', '$ciudad', ";
		$consulta.="'$direccion_rut', '$forma_pago', '$grandes_contribuyentes', '$identificacion', '$nombres_apellidos', '$origen_recursos', '$retenedores', '$telefonos', '$tipo_documento', ";		
		$consulta.="'$compromisos')";		
		}else{
		if($editar_creado==1){
			$id_client=$id_creado;
			}
		$consulta="UPDATE clientes SET ";
		$consulta.="actividad_economica='$actividad_economica', banco_forma_pago='$banco_forma_pago', capital_pagado='$capital_pagado', ciudad='$ciudad', ";
		$consulta.="direccion_rut='$direccion_rut', forma_pago='$forma_pago', grandes_contribuyentes='$grandes_contribuyentes', identificacion='$identificacion', ";
		$consulta.="nombres_apellidos='$nombres_apellidos', origen_recursos='$origen_recursos', retenedores='$retenedores', telefonos='$telefonos', ";
		$consulta.="tipo_documento='$tipo_documento', compromisos='$compromisos' WHERE id_clientes = '$id_client'";			
			}
		$resultado_query = $conexion->createCommand($consulta);
		$resultado_query -> execute();
	}
	public function guardar_direccion($direccion_cliente, $id_client, $editar_h, $id_cliente, $editar_creado, $id_creado)
	{
		$conexion= yii::app()->db;
		if($editar_h==1&&$editar_creado!=1){
		$insert_direc="INSERT INTO direcciones (direccion, id_clientes, principal) VALUES ('$direccion_cliente', '$id_cliente', '1')";
		}else{
		if($editar_creado==1){
			$id_client=$id_creado;
			}
		$insert_direc="UPDATE direcciones SET direccion = '$direccion_cliente', id_clientes = '$id_client', principal = '1' WHERE id_clientes = '$id_client'";	
			}
		$resultado_direc = $conexion->createCommand($insert_direc);
		$resultado_direc -> execute();
	}
	public function guardar_persona($representante_legal, $identificacion_repres, $direccion_repre, $suplente_lega, $identificacion_suple, $direccion_suplente, $jefe_comercio_exterior,
	$iden_comercio_exterior, $direccion_comercio_exterior, $email_comercio_exterior, $jefe_logistica, $iden_jefe_logistica, $direccion_jefe_logistica, $email_jefe_logistica,
	$beneficiario_comercio_exterior, $iden_beneficiario, $direccion_beneficiario, $principales_clientes, $iden_principales_clientes, $direccion_principales_clientes,
	$principales_clientes2, $iden_principales_clientes2, $direccion_principales_clientes2,$ref_comercial_1, $nit_ref_comercial_1, $telefono_ref_comercial_1, $ref_comercial_2,
	$nit_ref_comercial_2, $telefono_ref_comercial_2, $ref_bancaria_1, $cuenta_ref_bancaria_1, $telefono_ref_bancaria_1, $ref_bancaria_2, $cuenta_ref_bancaria_2,
	$telefono_ref_bancaria_2, $id_client, $editar_h, $id_cliente, $editar_creado, $id_creado)
	{
		$conexion= yii::app()->db;
		if($editar_h==1&&$editar_creado!=1){
		$insert_repre="INSERT INTO personas(nombre, identificacion, direccion, id_cliente, rol) VALUES";
		$insert_repre.="('$representante_legal', '$identificacion_repres', '$direccion_repre', '$id_cliente', 'RL')";		
		$resultado_repre = $conexion->createCommand($insert_repre);
		$resultado_repre -> execute();
		$insert_sup="INSERT INTO personas(nombre, identificacion, direccion, id_cliente, rol) VALUES";
		$insert_sup.="('$suplente_lega', '$identificacion_suple', '$direccion_suplente', '$id_cliente', 'RS')";		
		$resultado_sup = $conexion->createCommand($insert_sup);
		$resultado_sup -> execute();
		$insert_comer="INSERT INTO personas(nombre, identificacion, direccion, email, id_cliente, rol) VALUES";
		$insert_comer.="('$jefe_comercio_exterior', '$iden_comercio_exterior', '$direccion_comercio_exterior', '$email_comercio_exterior','$id_cliente', 'JCE')";		
		$resultado_comer = $conexion->createCommand($insert_comer);
		$resultado_comer -> execute();
		$insert_logis="INSERT INTO personas(nombre, identificacion, direccion, email, id_cliente, rol) VALUES";
		$insert_logis.="('$jefe_logistica', '$iden_jefe_logistica', '$direccion_jefe_logistica', '$email_jefe_logistica','$id_cliente', 'JL')";		
		$resultado_logis = $conexion->createCommand($insert_logis);
		$resultado_logis -> execute();
		$insert_benef_comex="INSERT INTO personas(nombre, identificacion, direccion, id_cliente, rol) VALUES";
		$insert_benef_comex.="('$beneficiario_comercio_exterior', '$iden_beneficiario', '$direccion_beneficiario', '$id_cliente', 'BCE')";		
		$resultado_benef_comex = $conexion->createCommand($insert_benef_comex);
		$resultado_benef_comex -> execute();
		$insert_prin_clien="INSERT INTO personas(nombre, identificacion, direccion, id_cliente, rol) VALUES";
		$insert_prin_clien.="('$principales_clientes', '$iden_principales_clientes', '$direccion_principales_clientes', '$id_cliente', 'PC')";		
		$resultado_prin_clien = $conexion->createCommand($insert_prin_clien);
		$resultado_prin_clien -> execute();
		$insert_prin_clien2="INSERT INTO personas(nombre, identificacion, direccion, id_cliente, rol) VALUES";
		$insert_prin_clien2.="('$principales_clientes2', '$iden_principales_clientes2', '$direccion_principales_clientes2', '$id_cliente', 'PC2')";		
		$resultado_prin_clien2 = $conexion->createCommand($insert_prin_clien2);
		$resultado_prin_clien2 -> execute();
		$insert_ref_com1="INSERT INTO personas(nombre, identificacion, telefono, id_cliente, rol) VALUES";
		$insert_ref_com1.="('$ref_comercial_1', '$nit_ref_comercial_1', '$telefono_ref_comercial_1', '$id_cliente', 'RC1')";		
		$resultado_ref_com1 = $conexion->createCommand($insert_ref_com1);
		$resultado_ref_com1 -> execute();
		$insert_ref_com2="INSERT INTO personas(nombre, identificacion, telefono, id_cliente, rol) VALUES";
		$insert_ref_com2.="('$ref_comercial_2', '$nit_ref_comercial_2', '$telefono_ref_comercial_2', '$id_cliente', 'RC2')";		
		$resultado_ref_com2 = $conexion->createCommand($insert_ref_com2);
		$resultado_ref_com2 -> execute();
		$insert_ref_ban1="INSERT INTO personas(nombre, cuenta, telefono, id_cliente, rol) VALUES";
		$insert_ref_ban1.="('$ref_bancaria_1', '$cuenta_ref_bancaria_1', '$telefono_ref_bancaria_1', '$id_cliente', 'RB1')";		
		$resultado_ref_ban1 = $conexion->createCommand($insert_ref_ban1);
		$resultado_ref_ban1 -> execute();
		$insert_ref_ban2="INSERT INTO personas(nombre, cuenta, telefono, id_cliente, rol) VALUES";
		$insert_ref_ban2.="('$ref_bancaria_2', '$cuenta_ref_bancaria_2', '$telefono_ref_bancaria_2', '$id_cliente', 'RB2')";
		$resultado_ref_ban2 = $conexion->createCommand($insert_ref_ban2);
		$resultado_ref_ban2 -> execute();
		}else{
			if($editar_creado==1){
			$id_client=$id_creado;
			}
			$insert_repre="UPDATE personas SET nombre = '$representante_legal', identificacion = '$identificacion_repres', direccion = '$direccion_repre', ";
			$insert_repre.="id_cliente = '$id_client', rol = 'RL' WHERE id_cliente = '$id_client' AND rol = 'RL'";		
			$resultado_repre = $conexion->createCommand($insert_repre);
			$resultado_repre -> execute();
			$insert_sup="UPDATE personas SET nombre = '$suplente_lega', identificacion = '$identificacion_suple', direccion = '$direccion_suplente', ";
			$insert_sup.="id_cliente = '$id_client', rol = 'RS' WHERE id_cliente = '$id_client' AND rol = 'RS'";		
			$resultado_sup = $conexion->createCommand($insert_sup);
			$resultado_sup -> execute();
			$insert_comer="UPDATE personas SET nombre = '$jefe_comercio_exterior', identificacion = '$iden_comercio_exterior', direccion = '$direccion_comercio_exterior', ";
			$insert_comer.="email = '$email_comercio_exterior', id_cliente = '$id_client', rol = 'JCE' WHERE id_cliente = '$id_client' AND rol = 'JCE'";
			$resultado_comer = $conexion->createCommand($insert_comer);
			$resultado_comer -> execute();
			$insert_logis="UPDATE personas SET nombre = '$jefe_logistica', identificacion = '$iden_jefe_logistica', direccion = '$direccion_jefe_logistica', ";
			$insert_logis.="email = '$email_jefe_logistica', id_cliente = '$id_client', rol = 'JL' WHERE id_cliente = '$id_client' AND rol = 'JL'";
			$resultado_logis = $conexion->createCommand($insert_logis);
			$resultado_logis -> execute();
			$insert_benef_comex="UPDATE personas SET nombre = '$beneficiario_comercio_exterior', identificacion = '$iden_beneficiario', direccion = '$direccion_beneficiario', ";
			$insert_benef_comex.="id_cliente = '$id_client', rol = 'BCE' WHERE id_cliente = '$id_client' AND rol = 'BCE'";
			$resultado_benef_comex = $conexion->createCommand($insert_benef_comex);
			$resultado_benef_comex -> execute();
			$insert_prin_clien="UPDATE personas SET nombre = '$principales_clientes', identificacion = '$iden_principales_clientes', direccion = '$direccion_principales_clientes', ";
			$insert_prin_clien.="id_cliente = '$id_client', rol = 'PC' WHERE id_cliente = '$id_client' AND ROL = 'PC'";
			$resultado_prin_clien = $conexion->createCommand($insert_prin_clien);
			$resultado_prin_clien -> execute();
			$insert_prin_clien2="UPDATE personas SET nombre = '$principales_clientes2', identificacion = '$iden_principales_clientes2', direccion = '$direccion_principales_clientes2', ";
			$insert_prin_clien2.="id_cliente = '$id_client', rol = 'PC2' WHERE id_cliente = '$id_client' AND rol = 'PC2'";		
			$resultado_prin_clien2 = $conexion->createCommand($insert_prin_clien2);
			$resultado_prin_clien2 -> execute();
			$insert_ref_com1="UPDATE personas SET nombre = '$ref_comercial_1', identificacion = '$nit_ref_comercial_1', telefono = '$telefono_ref_comercial_1', ";
			$insert_ref_com1.="id_cliente = '$id_client', rol = 'RC1' WHERE id_cliente = '$id_client' AND rol = 'RC1'";		
			$resultado_ref_com1 = $conexion->createCommand($insert_ref_com1);
			$resultado_ref_com1 -> execute();
			$insert_ref_com2="UPDATE personas SET nombre = '$ref_comercial_2', identificacion = '$nit_ref_comercial_2', telefono = '$telefono_ref_comercial_2', ";
			$insert_ref_com2.="id_cliente = '$id_client', rol = 'RC2' WHERE id_cliente = '$id_client' AND rol = 'RC2'";
			$resultado_ref_com2 = $conexion->createCommand($insert_ref_com2);
			$resultado_ref_com2 -> execute();
			$insert_ref_ban1="UPDATE personas SET nombre = '$ref_bancaria_1', cuenta = '$cuenta_ref_bancaria_1', telefono = '$telefono_ref_bancaria_1', ";
			$insert_ref_ban1.="id_cliente = '$id_client', rol = 'RB1' WHERE id_cliente = '$id_client' AND rol = 'RB1'";		
			$resultado_ref_ban1 = $conexion->createCommand($insert_ref_ban1);
			$resultado_ref_ban1 -> execute();
			$insert_ref_ban2="UPDATE personas SET nombre = '$ref_bancaria_2', cuenta = '$cuenta_ref_bancaria_2', telefono = '$telefono_ref_bancaria_2', ";
			$insert_ref_ban2.="id_cliente = '$id_client', rol = 'RB2' WHERE id_cliente = $id_client AND rol = 'RB2'";
			$resultado_ref_ban2 = $conexion->createCommand($insert_ref_ban2);
			$resultado_ref_ban2 -> execute();
		}
	}
}


?>