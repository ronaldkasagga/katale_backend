<?php
/* @var $this VendorComodityController */
/* @var $model VendorComodity */

$this->breadcrumbs=array(
	'Vendor Comodities'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List VendorComodity', 'url'=>array('index')),
	array('label'=>'Create VendorComodity', 'url'=>array('create')),
	array('label'=>'View VendorComodity', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage VendorComodity', 'url'=>array('admin')),
);
?>

<h1>Update VendorComodity <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>