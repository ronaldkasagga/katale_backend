<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
);
?>
<h1><?php echo $this->uniqueId . '/' . $this->action->id; ?></h1>

<p>
    <h3>Available</h3>
    <ul>
        <li><?php echo CHtml::link('markets', array('/api/market'))?></li>
        <li>
            <ul><?php echo CHtml::link('commodity', array('#'))?>
                <li>Add: <?php echo Yii::app()->createAbsoluteUrl('/api/commodity/add', array('commodityId'=>'0000', 'price'=>'0000', 'quantity'=>'0000','vendorId'=>'0000'));?></li>
                <li>Update: <?php echo Yii::app()->createAbsoluteUrl('/api/commodity/update', array('commodityId'=>'0000', 'price'=>'0000', 'quantity'=>'0000','vendorId'=>'0000'));?></li>
            </ul>
        </li>
    </ul>
</p>