<?php
/**
 * @name ErrorController
 * @desc 错误控制器, 在发生未捕获的异常时刻被调用
 * @see http://www.php.net/manual/en/yaf-dispatcher.catchexception.php
 * @author 帅
 */
class ErrorController extends CommonController {

	//从2.1开始, errorAction支持直接通过参数获取异常
	public function errorAction($exception) {
		echo '<pre>';
		echo $exception->getMessage();
		echo '<hr>';
		echo $exception->getCode();
		echo '<hr>';
		echo $exception->getFile();
		echo '<hr>';
		var_dump($exception);
		return false;
		//1. assign to view engine
		//$this->getView()->assign("exception", $exception);
		//5. render by Yaf 
	}
}
