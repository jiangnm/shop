<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        //return 'hello world！！';
    	return $this->fetch();
    }
    public function buy()
    {
    	return $this->fetch();
    }
}
