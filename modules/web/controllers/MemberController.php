<?php

namespace app\modules\web\controllers;

use yii\web\Controller;

class MemberController extends Controller
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
   public function actionComment(){
         $this->layout = false;
         return $this->render("comment");
   }
}
