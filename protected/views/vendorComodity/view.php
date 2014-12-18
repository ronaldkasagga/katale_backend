<?php
/* @var $this VendorComodityController */
/* @var $model VendorComodity */

$this->breadcrumbs=array(
	'Vendor Comodities'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List VendorComodity', 'url'=>array('index')),
	array('label'=>'Create VendorComodity', 'url'=>array('create')),
	array('label'=>'Update VendorComodity', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete VendorComodity', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VendorComodity', 'url'=>array('admin')),
);
?>

<h1>View VendorComodity #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'comodity_id',
		'price',
		'quantity',
		'last_updated',
		'vendor_id',
	),
)); ?>
