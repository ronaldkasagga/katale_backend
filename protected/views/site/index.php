<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<p>
    <h3>Available Units</h3>
    <ul>
        <li><?php echo CHtml::link('Comodities', array('/comodity'))?></li>
        <li><?php echo CHtml::link('Markets', array('/market'))?></li>
        <li><?php echo CHtml::link('Vendors', array('/vendor'))?></li>
        <li><?php echo CHtml::link('VendorComodities', array('/vendorComodity'))?></li>
    </ul>
</p>
