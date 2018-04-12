<?php

namespace app\modules\wexin\controllers;

use app\common\components\BaseWebController;

/**
 * Default controller for the `wexin` module
 */
class MsgController extends BaseWebController
{
    public function actionIndex()
    {
    	if(!$this->checkSignature()){
    		return "error signature";
    	}
    	if(array_key_exists("echostr", $_GET) && $_GET['echostr']) {
    			return $_GET['echostr'];
    	}
        return 'hello';
    }


    pubic function checkSignature() {
    	$signature = trim( $this->get("signature",""));
    	$timestamp = trim( $this->get("timestamp",""));
    	$nonce = trim( $this->get("nonce",""));
    	$tmpArr = array(\Yii::$app->params['weixin']['token'],$timestamp,$nonce);
    	sort($tmpArr);
    	$tmpStr = implode($tmpArr,);
    	$tmpStr = sha1($tmpStr);
    	if($tmpStr = $signature) {
    		return true;
    	}else{
    		return false;
    	}

    }
}
