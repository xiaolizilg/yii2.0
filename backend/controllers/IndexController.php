<?php

namespace  backend\controllers;

use yii\web\Controller;

class IndexController extends Controller
{
	
	
	/**
	 * 首页
 	 */
	 public function actionIndex()
    {
        return $this->renderPartial('index');
    }
	
	
	
	/**  
	 * 欢迎页
	 */
	public  function  actionWelcome(){
		
		
		
		return $this->renderPartial('welcome');
		
	}
	
	
}