<?php
namespace Sign\Controller;
use Think\Controller;
class RoommainController extends Controller{
	//主页面展示
	public function memberdel()
	{
//		$model = M('branch');
//		$data = $model->select();
//		$length=count($data);
//		$this->assign('length',$length);
//		$this->assign('data',$data);
		$this->display('Room/main/member-del');
	}
	//添加会议室页面展示
	public function del_add(){
		$this->display('Room/main/del_add');
	}
}