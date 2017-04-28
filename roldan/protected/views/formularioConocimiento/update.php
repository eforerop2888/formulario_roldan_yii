<?php
/* @var $this FormularioConocimientoController */
/* @var $model FormularioConocimiento */

$this->breadcrumbs=array(
	'Formulario Conocimientos'=>array('index'),
	$model->identificacion=>array('view','id'=>$model->identificacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List FormularioConocimiento', 'url'=>array('index')),
	array('label'=>'Create FormularioConocimiento', 'url'=>array('create')),
	array('label'=>'View FormularioConocimiento', 'url'=>array('view', 'id'=>$model->identificacion)),
	array('label'=>'Manage FormularioConocimiento', 'url'=>array('admin')),
);
?>

<h1>Update FormularioConocimiento <?php echo $model->identificacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>