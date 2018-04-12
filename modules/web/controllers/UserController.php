<?php
namespace app\modules\web\controllers;

use app\common\components\BaseWebController;
use app\models\user;

class UserController extends BaseWebController{
   public function actionLogin(){
      if(\Yii::$app->request->isGet) {
      $this->layout ="user";
      return $this->render('login');
      }
      $login_name = trim( $this ->post("login_name",""));
      $login_pwd = trim( $this ->post("login_pwd",""));
      if(!$login_name || !$login_pwd) {return "<script>alert('请输入正确的用户名和密码！1');
      window.location.href = '/web/user/login';</script>";
      }
      $user_info = user::find()->where(['login_name' =>
      $login_name])->one();
      if(!$user_info) {
       return "<script>alert('请输入正确的用户名和密码！2');
      window.location.href = '/web/user/login';</script>";
      }
      $auth_pwd = md5($login_pwd . md5($user_info['login_salt']));
      if($auth_pwd != $user_info['login_pwd']){
       return "<script>alert('请输入正确的用户名和密码！3');
      window.location.href = '/web/user/login';</script>";
      }
      $auth_token = md5($user_info['login_name'].$user_info['login_pwd'].$user_info['login_salt']);
      $this->setCookie('wechat',$auth_token."#".$user_info['uid']);
      return $this->redirect(UrlService::buildWebUrl("/member/index"));
}


public function actionEdit(){
      $this->layout =false;
      return $this->render('edit');
}

public function actionResetPwd(){
      $this->layout =false;
      return $this->render('ResetPwd');
}
public function actionLogout(){
      $this->removeAuthToken();
      return $this->redirect( UrlService::buildWebUrl("/user/login") );
   }
}

      