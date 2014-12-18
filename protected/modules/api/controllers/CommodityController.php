<?php

class CommodityController extends Controller
{
	public function actionAdd()
	{
        $response = array('success'=>'ok');
        $commodity_d = Yii::app()->request->getParam('commodityId');
        $price = Yii::app()->request->getParam('price');
        $quantity = Yii::app()->request->getParam('quantity');
        $vendor_id = Yii::app()->request->getParam('vendorId');
        $commodity = new VendorComodity();
        $commodity->price = $price;
        $commodity->comodity_id = $commodity_d;
        $commodity->quantity = $quantity;
        $commodity->vendor_id = $vendor_id;
        if(!$commodity->save()){
            $response['success'] = 'failed';
            $response['detail'] = $commodity->getErrors();
        }
        header('Content-type: application/json');
        echo json_encode($response);
        Yii::app()->end();
	}

    public function actionUpdate()
    {
        $response = array('success'=>'ok');
        $commodity_d = Yii::app()->request->getParam('commodityId');
        $price = Yii::app()->request->getParam('price');
        $quantity = Yii::app()->request->getParam('quantity');
        $vendor_id = Yii::app()->request->getParam('vendorId');
        $commodity = VendorComodity::model()->findByAttributes(array('vendor_id'=>$vendor_id, 'comodity_id'=>$commodity_d));
        if(isset($commodity)){
            $commodity->price = $price;
            $commodity->comodity_id = $commodity_d;
            $commodity->quantity = $quantity;
            $commodity->vendor_id = $vendor_id;
            if(!$commodity->save()){
                $response['success'] = 'failed';
                $response['detail'] = $commodity->getErrors();
            }
        }else{
            $response['success']='failed';
            $response['detail']='not found';
        }
        header('Content-type: application/json');
        echo json_encode($response);
        Yii::app()->end();
    }
}