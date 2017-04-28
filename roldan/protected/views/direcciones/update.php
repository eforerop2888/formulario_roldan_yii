<?php
/* @var $this DireccionesController */
/* @var $model Direcciones */

$this->breadcrumbs=array(
	'Direcciones'=>array('index'),
	$model->id_direcciones=>array('view','id'=>$model->id_direcciones),
	'Update',
);

$this->menu=array(
	array('label'=>'List Direcciones', 'url'=>array('index')),
	array('label'=>'Create Direcciones', 'url'=>array('create')),
	array('label'=>'View Direcciones', 'url'=>array('view', 'id'=>$model->id_direcciones)),
	array('label'=>'Manage Direcciones', 'url'=>array('admin')),
);
?>

<h1>Update Direcciones <?php echo $model->id_direcciones; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>