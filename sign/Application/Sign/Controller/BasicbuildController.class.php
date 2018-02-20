<?php
namespace Sign\Controller;
use Think\Controller;
class BasicbuildController extends Controller{
	//建立群组主页面展示
	public function memberlevel()
	{
		$model = M('group');
		$data = $model->select();
		$length=count($data);
		$this->assign('length',$length);
		$this->assign('data',$data);
		$this->display('Basic/build/member-level');
	}
	//建立群组之修改群信息页面展示
	public function level_edit(){
		$get=I('get.');
		$model=M('member');
		$group = M('group');
		$temp['group_id']=$get['id'];
		$member_group=M('member_group');
		$data = $group->where($temp)->find();
		$hh['group_name']=$data['group_name'];
		$res = $member_group->field('user_id')->where($hh)->select();
		$res_length = count($res);
		$result = $model->select();
		$result_length=count($result);
		for($i=0;$i<$result_length;$i++){
			$result[$i]['temp']=0;
		}
		for($i=0;$i<$result_length;$i++){
			for($k=0;$k<$res_length;$k++){
				if($result[$i]['id']==$res[$k]['user_id']){
					$result[$i]['temp']=1;
				}
			}
		}
		$this->assign('hh',$hh);
		$this->assign('result',$result);
		$this->display('Basic/build/level_edit');
	}
	//建立群组之添加群基本信息页面展示
	public function level_add(){
		$model=M('member');
		$data = $model->select();
		$this->assign('data',$data);
		$this->display('Basic/build/level_add');
	}
	//添加群信息
	public function add_group(){
		if(IS_POST){
			$post=I('post.','0','trim,htmlspecialchars');
			$model_member=M('member');
			$model_group=M('group');
			$member_group=M('member_group');
			$length = count($post);
			
			$temp['group_name']=$post['group_name'];
			$res = $model_group->where($temp)->find();
			if($res){
				$this->error('存在该命名');exit;
			}else{
				$data=$model_member->field('max(id)')->find();
				$length_data=$data['max(id)']+1;
				$hh['group_name']=$temp['group_name'];
				$index=0;
				for($i=1;$i<=$length_data;$i++){
					$hh['user_id']=$post[$i];
					if($hh['user_id']!=NUll){
						
						$member_group->add($hh);	
					}
				}
				
				$group['group_name']=$post['group_name'];
				$group['group_number']=$length-1;
				$result = $model_group->add($group);

				if($result){
					$this->redirect('Basicbuild/level_add');
				}
			}
		}
	}
		//搜索群信息
	public function search_group(){
		if(IS_POST){
			$post=I('post.','0','trim,htmlspecialchars');
			$model=M('group');
			$temp['group_name']=$post['group_name'];
			$data = $model->where($temp)->select();
			$length=count($data);
			if($length==0){
				$data = $model->select();
				$length=count($data);
				$this->assign('length',$length);
				$this->assign('data',$data);
				$this->display('Basic/build/member-level');
			}else{
				$this->assign('length',$length);
				$this->assign('data',$data);
				$this->display('Basic/build/member-level');
			}
			}
		}
		
		//修改群消息
	public function edit_save(){
		if(IS_POST){
			$post=I('post.','0','trim,htmlspecialchars');
			$model_member=M('member');
			$model_group=M('group');
			$member_group=M('member_group');
			$temp['group_name']=$post['old_name'];
			$model_group->where($temp)->delete();
			$member_group->where($temp)->delete();
			
			$length = count($post);
			dump($post);
			$temp['group_name']=$post['new_name'];
			$res = $model_group->where($temp)->find();
			if($res){
				$this->error('存在该命名');exit;
			}else{
				$data=$model_member->field('max(id)')->find();
				$length_data=$data['max(id)']+2;
				
				$hh['group_name']=$temp['group_name'];
				$index=0;
				for($i=1;$i<=$length_data;$i++){
					$hh['user_id']=$post[$i];
					if($hh['user_id']!=NUll){
						
						$member_group->add($hh);	
					}
				}
				
				$group['group_name']=$post['new_name'];
				$group['group_number']=$length-2;
				$result = $model_group->add($group);

				if($result){
					$this->redirect('Basicbuild/level_edit');
				}
			}
			}
	}
		//解散群组
	public function del_group(){
			$get=I('get.');
			dump($get);
			$model_group=M('group');
			$model_member=M('member_group');
			$get['group_name'];
			$res=$model_group->where($index)->delete();
			$model_member->where($index)->delete();
			$this->redirect('Basicbuild/memberlevel');
	}
}