<?php

class MarketController extends Controller
{
	public function actionIndex()
	{
	    $marketsAvailable = array();
        $markets = Market::model()->findAll();
        if(count($markets) > 0)
            foreach($markets as $market)
                array_push($marketsAvailable, $market->toArray());
        header('Content-type: application/json');
        echo json_encode($marketsAvailable);
        Yii::app()->end();
	}
}