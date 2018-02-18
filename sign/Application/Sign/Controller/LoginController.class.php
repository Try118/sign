<?php
namespace Sign\Controller;
use Think\Controller;
class LoginController extends Controller{
	public function login()
	{
		$this->display();
	}
	public function checklogin(){
		
		if(IS_POST){
			$post=I('post.','0','trim,htmlspecialchars');
			$model=M('login');
//			$post['password']=md5(substr($post['password'],0,5));
			$res=$model->where($post)->find();
			if($res){
			$username=$res['username'];
//			$id=$res['id'];
//			$power=$res['power'];
//			session('id',$id);
//			session('power',$power);
//			session('username',$username);
			$this->redirect('Basicmain/memberlist');
			}else{
				$this->error('账号密码错误');
			}
			
		}
	}
}