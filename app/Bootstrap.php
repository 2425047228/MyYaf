<?php
/**
 * @name Bootstrap
 * @author 帅
 * @desc 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * @see http://www.php.net/manual/en/class.yaf-bootstrap-abstract.php
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
class Bootstrap extends Yaf_Bootstrap_Abstract 
{

	public function _initConfig() 
	{
		//把配置保存起来
		$arrConfig = Yaf_Application::app()->getConfig();
		Yaf_Registry::set('config', $arrConfig);
	}

	public function _initPlugin(Yaf_Dispatcher $dispatcher) 
	{
		//注册一个插件
		$dispatcher->registerPlugin(new SamplePlugin());
	}

	public function _initRoute(Yaf_Dispatcher $dispatcher) 
	{
		$config = new Yaf_Config_Ini(APPLICATION_PATH . '/conf/route.ini', 'common');
		if ($config->routes) {
			$router = Yaf_Dispatcher::getInstance()->getRouter();
			$router->addRoute('MyRoute',$route);
		}
		//在这里注册自己的路由协议,默认使用简单路由
	}
	
	public function _initView(Yaf_Dispatcher $dispatcher) 
	{
		//在这里注册自己的view控制器，例如smarty,firekylin
	}

	public function _initSession()
	{
		//Yaf_Session::getInstance()->start();    //开启yaf框架的session
	}

	public function _initLoader(Yaf_Dispatcher $dispatcher)
	{
          //Yaf_Loader::getInstance()->registerLocalNameSpace(array("Foo", "Bar"));
		  Yaf_Loader::import(APPLICATION_PATH . '/vendor/autoload.php');
		  Yaf_Loader::import(FUNCTIONS_PATH . 'functions.php');
		  Yaf_Loader::import(FUNCTIONS_PATH . 'DB.php');
    }
}
