<?php
/* @var $this FormularioConocimiento2Controller */
/* @var $model FormularioConocimiento2 */

$this->breadcrumbs=array(
	'Formulario Conocimiento2s'=>array('index'),
	$model->identificacion=>array('view','id'=>$model->identificacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List FormularioConocimiento2', 'url'=>array('index')),
	array('label'=>'Create FormularioConocimiento2', 'url'=>array('create')),
	array('label'=>'View FormularioConocimiento2', 'url'=>array('view', 'id'=>$model->identificacion)),
	array('label'=>'Manage FormularioConocimiento2', 'url'=>array('admin')),
);
?>

<h1>Update FormularioConocimiento2 <?php echo $model->identificacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>