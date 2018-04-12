<?php

namespace app\modules\m\controllers;

use yii\web\Controller;


class ProductController extends Controller
{

   public function actionIndex(){
   		$this->layout = false;
   		return $this->render("index");
 }
   public function actionInfo(){
   		$this->layout = false;
   		return $this->render("info");
   }
   public function actionOrder(){
   		$this->layout = false;
   		return $this->render("order");
   }
   public function actionBuy(){
         $this->layout = false;
         return $this->render("buy");
   }
}
