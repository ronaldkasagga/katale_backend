<?php
/* @var $this MarketController */
/* @var $model Market */

$this->breadcrumbs=array(
	'Markets'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Market', 'url'=>array('index')),
	array('label'=>'Create Market', 'url'=>array('create')),
	array('label'=>'Update Market', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Market', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Market', 'url'=>array('admin')),
);
?>

<h1>View Market #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
