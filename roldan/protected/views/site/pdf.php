<div><img src='http://www.innclod.com/yii/roldan/images/roldan.png' id="img_principal"></img></div>
<div class="form" id="pdf">
<h1 id="principal">FORMULARIO  DE CONOCIMIENTO DEL CLIENTE Y ACUERDO DE SEGURIDAD</h1>
<p>
En cumplimiento a lo dispuesto por la Dirección de Impuestos y Aduanas Nacionales mediante la Circular Externa 0170 del 10/10/02, 
le solicitamos diligenciar completamente este formulario con sus datos y entregarlo en nuestras oficinas anexándole la siguiente documentación, 
requisito indispensable para llevar a cabo las operaciones de Comercio Exterior.
</p>
<ul>
	<li>Certificado de Existencia y Representación Legal Vigente.</li>
	<li>Fotocopia del RUT.</li>
	<li>Fotocopia de la Cédula del Representante Legal</li>
	<li>Estados Financieros Básicos Comparativos (Balance General y Estado de Pérdidas y Ganancias con sus respectivas notas, 
		a 31 de diciembre del año inmediatamente anterior). De acuerdo a la normatividad, los Grandes Contribuyentes, Usuarios Aduaneros calificados como UAP y  ALTEX no están obligados.</li>
	<li>Certificación Bancaria donde realiza sus operaciones de comercio exterior</li>
</ul>

	<?php foreach($busqueda as $datos)
	if ($datos->tipo_documento==1){
					$tipo_documento = "CC";
					}elseif($datos->tipo_documento==2){
						$tipo_documento = "NIT";
					}
	if ($datos->grandes_contribuyentes==1){
					$sig = "X";
					}elseif($datos->grandes_contribuyentes==2){
						$nog = "X";
					}
	;
	foreach($busquedadir as $datosdir);
	foreach($busquedarep as $datosrep);
	foreach($busquedasup as $datossup);
	foreach($busquedajce as $datosjce);
	foreach($busquedajl as $datosjl);
	foreach($busquedapc as $datospc);
	foreach($busquedapc2 as $datospc2);
	foreach($busquedabce as $datosbce);
	foreach($busquedarc1 as $datosrc1);
	foreach($busquedarc2 as $datosrc2);
	foreach($busquedarb1 as $datosrb1);
	foreach($busquedarb2 as $datosrb2);
	foreach($busquedaiva as $datosiva);
	if(!empty($busquedaiva))
		$iva="X";
	if(!empty($busquedaica))
		$ica="X";
	if(!empty($busquedarete))
		$retencion="X";
	if(!empty($busquedacon))
		$consignacion="X";
	if(!empty($busquedache))
		$cheque="X";
	if(!empty($busquedatrans))
		$transferencia="X";
	if(!empty($busquedaaar))
		$arr_compromisos="X";
	if(!empty($busquedastp))
		$stp_compromisos="X";
	if(!empty($busquedarcl))
		$rcl_compromisos="X";
	if(!empty($busquedaotm))
		$otm_compromisos="X";
	if(!empty($busquedaglx))
		$glx_compromisos="X";
	if(!empty($busquedaits))
		$its_compromisos="X";
	if(!empty($busquedarlg))
		$rlg_compromisos="X";
	?>
	<table>	
		<tr class="tr_gris">
			<td>1. Nombres y apellidos o Razón social</div>
			<td>Tipo Documento (CC o NIT)</td>
			<td>2. Número Documento</td>
			<td></td>
		</tr>
		<tr class="trblanco">
			<td><?php echo $datos->nombres_apellidos;?></td>
			<td><?php echo $tipo_documento;?></td>
			<td><?php echo $datos->identificacion;?></td>
			<td></td>
		</tr>
		<tr class="tr_gris">
			<td>3. Dirección (Oficina Principal)</td>
			<td>4. Ciudad</td>
			<td>5. Teléfonos</td>
			<td>6. Dirección electrónica del RUT</td>
		</tr>
		<tr class="trblanco">
			<td><?php echo $datosdir->direccion;?></td>
			<td><?php echo $datos->ciudad;?></td>
			<td><?php echo $datos->telefonos;?></td>
			<td><?php echo $datos->direccion_rut;?></td>
		</tr>
		<tr class="tr_gris">
			<td>7. Apellido y nombre del Representante Legal</td>
			<td></td>
			<td>8. Identificación</td>
			<td>9. Dirección</td>
		</tr>
		<tr class="trblanco">
			<td><?php echo $datosrep->nombre;?></td>
			<td></td>
			<td><?php echo $datosrep->identificacion;?></td>
			<td><?php echo $datosrep->direccion;?></td>
		</tr>
		<tr class="trblanco">
			<td><?php echo $datossup->nombre;?></td>
			<td></td>
			<td><?php echo $datossup->identificacion;?></td>
			<td><?php echo $datossup->direccion;?></td>
		</tr>
		<tr class="tr_gris">
			<td>10. Actividad económica</td>
			<td>11. Capital Pagado</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="trblanco">
			<td><?php echo $datos->actividad_economica;?></td>
			<td>
				<?php 
					echo $datos->capital_pagado;
				?>
			</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="tr_gris">
			<td>12. Origen de los recursos</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="trblanco">
			<td><?php echo $datos->origen_recursos;?></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="tr_gris">
			<td>13. Apellidos y nombres de las personas que realizan directamente las operaciones de comercio exterior (Jefe de comercio exterior o Logistica)</td>
			<td>14. Identificación</td>
			<td>15. Dirección</td>
			<td>16. E-mail</td>
		</tr>
		<tr class="trblanco">
			<td><?php echo $datosjce->nombre;?></td>
			<td><?php echo $datosjce->identificacion;?></td>
			<td><?php echo $datosjce->direccion;?></td>
			<td><?php echo $datosjce->email;?></td>
		</tr>
		<tr class="trblanco">
			<td><?php echo $datosjl->nombre;?></td>
			<td><?php echo $datosjl->identificacion;?></td>
			<td><?php echo $datosjl->direccion;?></td>
			<td><?php echo $datosjl->email;?></td>
		</tr>
		<tr class="tr_gris">
			<td>17. Apellidos y nombres de las personas o entidades beneficiarias de las operaciones de comercio exterior</td>
			<td>18. Identificación</td>
			<td>19. Dirección</td>
			<td></td>
		</tr>
		<tr class="trblanco">
			<td><?php echo $datosbce->nombre;?></td>
			<td><?php echo $datosbce->identificacion;?></td>
			<td><?php echo $datosbce->direccion;?></td>
			<td></td>
		</tr>
		<tr class="tr_gris">
			<td>20. Nombre los principales clientes</td>
			<td>21. Identificación</td>
			<td>22. Dirección</td>
			<td></td>
		</tr>
		<tr class="trblanco">
			<td><?php echo $datospc->nombre;?></td>
			<td><?php echo $datospc->identificacion;?></td>
			<td><?php echo $datospc->direccion;?></td>
			<td></td>
		</tr>
		<tr class="trblanco">
			<td><?php echo $datospc2->nombre;?></td>
			<td><?php echo $datospc2->identificacion;?></td>
			<td><?php echo $datospc2->direccion;?></td>
			<td></td>
		</tr>
		<tr class="tr_gris">
			<td>23. Referencia comercial</td>
			<td>24. NIT</td>
			<td>25. Teléfono</td>
			<td></td>
		</tr>
		<tr class="trblanco">
			<td><?php echo $datosrc1->nombre;?></td>
			<td><?php echo $datosrc1->identificacion;?></td>
			<td><?php echo $datosrc1->telefono;?></td>
			<td></td>
		</tr>
		<tr class="trblanco">
			<td><?php echo $datosrc2->nombre;?></td>
			<td><?php echo $datosrc2->identificacion;?></td>
			<td><?php echo $datosrc2->telefono;?></td>
			<td></td>
		</tr>
		<tr class="tr_gris">
			<td>26. Referencia Bancaria</td>	
			<td>27. Cuenta No</td>
			<td>28. Teléfono</td>
			<td></td>
		</tr>
		<tr class="trblanco">
			<td><?php echo $datosrb1->nombre;?></td>
			<td><?php echo $datosrb1->cuenta;?></td>
			<td><?php echo $datosrb1->telefono;?></td>
			<td></td>
		</tr>
		<tr class="trblanco">
			<td><?php echo $datosrb2->nombre;?></td>
			<td><?php echo $datosrb2->cuenta;?></td>
			<td><?php echo $datosrb2->telefono;?></td>
			<td></td>
		</tr>
		<tr class="tr_gris">
			<td>29. Información Tributaria</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="trblanco">
			<td>Grandes Contribuyentes Si_<?php echo $sig;?>_ No_<?php echo $nog;?>_</td>
			<td>Retenedores</td>
			<td>IVA_<?php echo $iva;?>_ ICA_<?php echo $ica;?>_ Retención_<?php echo $retencion;?>_</td>
			<td></td>
		</tr>
		<tr class="tr_gris">
			<td>30. Forma de Pago</td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr class="trblanco">
			<td>Consignación _<?php echo $consignacion;?>_ Cheque_<?php echo $cheque;?>_ Transferencia_<?php echo $transferencia;?>_</td>
			<td>Proveniente del Banco:</td>
			<td><?php echo $datos->banco_forma_pago;?></td>
			<td></td>
		</tr>
	</table>
	<p class="articulos">Artículo 1: EL CLIENTE se compromete a:</p>
	<p class="int_artis">
	1.1. Aceptar la visita domiciliaria que la empresa debe realizar en sus instalaciones, de acuerdo con lo exigido en el procedimiento de Conocimiento del Cliente establecido por la Organización.<br>
	1.2. Cumplir con el suministro de los documentos actualizados, de acuerdo a lo exigido en la Circular 0170/02 y procedimiento de Conocimiento del Cliente establecido por la Organización.<br>
	1.3. En caso de aplicar Decreto 2685 de 1999, cumplir con el suministro de los documentos actualizados que acrediten su existencia como persona natural o jurídica, así como los datos asociados a su domicilio, identificación y documentación que evidencie la actividad económica y capacidad financiera para realizar la operación de comercio exterior.<br>
	1.4. Suministrar la información y los documentos soporte requeridos para el desarrollo de la operación encomendada.<br>
	1.5. Informar a la UIAF (Unidad de Investigación y Análisis Financiero) y/o a la Empresa, cualquier acto o actividad sospechosa que se advierta en el curso de las operaciones que se adelantan con los proveedores relacionados con la prestación del servicio prestado por la Empresa al Cliente, ejemplo, transporte, almacenaje, agente de carga, agenciamiento  aduanero, Operación portuaria, sellos de seguridad, etc.<br>
	1.6. Cuando el Cliente suministre para la operación, sellos o precintos de seguridad, estos deben cumplir con la Norma ISO 17712<br>
	1.7. En el caso de las exportaciones, tener procedimientos de seguridad en el lugar de cargue, procedimientos de inspección y sellado de contenedores y trailers, los sellos utilizados para precintar los contenedores deben cumplir con la norma ISO 17712, de esta manera, minimizar el riesgo de contaminación, hurto o daño de la mercancía<br>
	1.8. Reconocer la importancia de establecer procesos y procedimientos de seguridad en sus operaciones, instalaciones y personal y hacer extensivas estas buenas prácticas a sus asociados de negocio (clientes y proveedores)<br>
	1.9. Cuando aplique, en caso de ocurrencia de siniestro en la manipulación de mercancía en puerto el cliente debe exigir la presencia de su compañía de seguros.<br>
	1.10. En caso que el cliente no autorice la realización de diligencia de reconocimiento de mercancías, deberá suscribir el formato "Orden de No Autorización de Reconocimientos de Mercancías" y formato "Compromiso para el Pago de Moras de Contenedor"<br>
	</p>
	<p class="articulos">Artículo 2: LA EMPRESA se compromete a:</p>
	<table>	
		<tr class="trblanco">
			<td>Agencia de Aduanas Roldán S.A.S&nbsp; (AAR)</td>
			<td><?php echo $arr_compromisos;?></td>
			<td>Serteport S.A&nbsp; (STP)</td>
			<td><?php echo $stp_compromisos;?></td>
		</tr>
		<tr class="trblanco">
			<td>Roldán y Cia Ltda&nbsp; (RCL)</td>
			<td><?php echo $rcl_compromisos;?></td>
			<td>Global Services OTM S.A.S&nbsp; (OTM)</td>
			<td><?php echo $otm_compromisos;?></td>
		</tr>
		<tr class="trblanco">
			<td>Glodex S.A.S&nbsp; (GLX)</td>
			<td><?php echo $glx_compromisos;?></td>
			<td>International Transport Services S.A.S&nbsp; (ITS)</td>
			<td><?php echo $its_compromisos;?></td>
		</tr>
		<!--<tr class="trblanco">
			<td>Rolog&nbsp; (RLG)</td>
			<td><?php //echo $rlg_compromisos;?></td>
			<td></td>
			<td></td>
		</tr>-->
	</table>
	<p class="int_artis">
	2.1. Reportar al cliente cualquier acto o actitud sospechosa de su personal, para que se tomen las medidas del caso.<br>
	2.2. Mantener en total confidencialidad la información suministrada por el Cliente.<br>
	2.3. Salvaguardar la documentación entregada por el Cliente, requerida para el desarrollo de la operación.<br>
	2.4. Establecer los procedimientos de control, seguridad y calidad requeridos en las instalaciones, procesos y personal, para minimizar los riesgos inherentes con el servicio.<br>
	2.5. Permitir al Cliente realizar las visitas a las instalaciones de la Empresa, cuando lo considere necesario.<br>
	2.6. Suministrar al Cliente la documentación requerida, para el respectivo control de proveedores.<br>
	2.7. Suministrar al Cliente cuando sea requerido, ampliación de información en cuanto a los requisitos de la Norma BASC<br>
	</p>
	<p class="articulos">FIRMAS PARTES INTERESADAS</p>
	<p class="declaro">Declaro que la información aquí suministrada tiene como propósito la prevención, detección y control de lavado de activos y financiación de terrorismo, 
	lo que exceptúa la aplicación de la Ley de Protección de Datos 1581 del 2012.</p>
	<p class="declaro">Yo, el firmante, portador de la cédula de ciudadanía indicada en este formulario afirmo que tanto mis actividades como mi profesión, ocupación u oficio son lícitos
	y los ejerzo dentro de los marcos legales. Me comprometo a actualizar, cuando sea necesario, los datos aquí consignados.</p>
	<p class="declaro">Autorizo a nombre de la empresa a consultar y reportar a las centrales de riesgo.</p>
	<p class="firmas">Firma del Representante Legal_____________________________________<br>
	Fecha:                   
	</p>
	<p class="firmas">Firma del Comercial_____________________________________<br>
	Fecha:                           
	</p>
</div>