<?php
/* @var $this ComodityController */
/* @var $model Comodity */

$this->breadcrumbs=array(
	'Comodities'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Comodity', 'url'=>array('index')),
	array('label'=>'Create Comodity', 'url'=>array('create')),
	array('label'=>'View Comodity', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Comodity', 'url'=>array('admin')),
);
?>

<h1>Update Comodity <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'units'=>$units)); ?>