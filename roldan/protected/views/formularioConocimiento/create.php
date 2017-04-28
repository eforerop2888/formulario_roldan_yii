<?php
/* @var $this FormularioConocimientoController */
/* @var $model FormularioConocimiento */

$this->breadcrumbs=array(
	'Formulario Conocimientos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FormularioConocimiento', 'url'=>array('index')),
	array('label'=>'Manage FormularioConocimiento', 'url'=>array('admin')),
);
?>

<h1>FORMULARIO DE CONOCIMIENTO DEL CLIENTE Y ACUERDO DE SEGURIDAD</h1>
<p>
En cumplimiento a lo dispuesto por la Dirección de Impuestos y Aduanas Nacionales mediante la Circular Externa 0170 del 10/10/02, le solicitamos diligenciar completamente este formulario con sus datos y entregarlo en nuestras oficinas anexándole la siguiente documentación, requisito indispensable para llevar a cabo las operaciones de Comercio Exterior.
</p>
<ul type = "disk">
	
	<li>Certificado de Existencia y Representación Legal Vigente.</li>
	<li>Fotocopia del Rut</li>
	<li>Fotocopia de la Cédula del Representante Legal</li>
	<li>Estados Financieros Básicos Comparativos (Balance General y Estado de Pérdidas y Ganancias con sus respectivas notas, a 31 de diciembre del año inmediatamente anterior). De acuerdo a la normatividad, los Usuarios Aduaneros calificados como UAP y  ALTEX no están obligados.</li>
	<li>Certificación Bancaria donde realiza sus operaciones de comercio exterior</li>
</ul>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>