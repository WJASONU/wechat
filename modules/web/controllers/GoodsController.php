<?php

namespace app\modules\web\controllers;

use yii\web\Controller;


class GoodsController extends Controller
{

   public function actionIndex(){
   		$this->layout = false;
   		return $this->render("index");
 }
   public function actionSet(){
   		$this->layout = false;
   		return $this->render("set");
   }
   public function actionInfo(){
   		$this->layout = false;
   		return $this->render("info");
   }
   public function actionImages(){
   		$this->layout = false;
   		return $this->render("images");
   }
      public function actionCat(){
         $this->layout = false;
         return $this->render("cat");
   }
      public function actionCat_set(){
         $this->layout = false;
         return $this->render("cat_set");
   }
}
