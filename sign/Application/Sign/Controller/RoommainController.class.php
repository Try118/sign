<?php
namespace Sign\Controller;
use Think\Controller;
class RoommainController extends Controller{
	//主页面展示
	public function memberdel()
	{
		$model = M('room_information');
		$data = $model->select();
		$length=count($data);
		$this->assign('length',$length);
		$this->assign('data',$data);
		$this->display('Room/main/member-del');
	}
	//添加会议室页面展示
	public function del_add(){
		$this->display('Room/main/del_add');
	}
	//添加会议室信息
	public function add_room(){
		if(IS_POST){
			$post=I('post.','0','trim,htmlspecialchars');
			dump($post);
			$model=M('room_information');
			$temp['room_id']=$post['room_id'];
			$res = $model->where($temp)->find();
			if($res){
				$this->error('已存在');
			}else{
				$result = $model->add($post);
				if($result){
					$this->redirect('Roommain/del_add');
				}
			}
		}
	}
	//会议室图像展示
	public function del_show(){
		$get=I('get.');
		$res=$get['room_id'];
		
		$this->assign('res',$res);
		$this->display('Room/main/del_show');
	}
	//添加会议室之添加座位
	public function add_location(){
		$get=I('get.');
		$model=M('room_location');
		$length=strlen($get[data]);
		$temp=substr($get[data],1,$length-2);
		$temp = split ("\,", $temp);	
		$temp_length=count($temp);	
		$first_length=strlen($temp[0]);
		$first = substr($temp[0],6,$first_length);
		$first=substr($first,0,strlen($first)-6);
		$hh['room_id']=$first;
		for($i=1;$i<=$temp_length;$i++){
			$hh['seat_location']=$temp[$i];
			$result = $model->add($hh);
		}	
		}
	//请求获得会议室座位部分图
	public function find_location(){
//		
		$get=I('get.');
		$model=M('room_location');
//		dump($get);
		$first_length=strlen($get[data]);
		$first = substr($get[data],6,$first_length);
		$first=substr($first,0,strlen($first)-6);
//		dump($first);
		$hh['room_id']=$first;
//		dump($hh);
		$res = $model->field('seat_location')->where($hh)->select();
		$res_length=count($res);
		$result;
		for($i=1;$i<=900;$i++){
			$result[$i]='_';
		}
		for($i=0;$i<$res_length;$i++){
			$temp=$res[$i][seat_location];
			$result[$temp]='a';
		}
		$count=0;	
		$index=0;
		$myarray;
		$myarray_index=0;
		for($i=1;$i<=900;$i++){
			$myarray[$myarray_index]=$myarray[$myarray_index].$result[$i];
			if($i%30==0){
				$myarray_index++;
			}
		}
//		
//		dump($myarray);
//		
//		dump($res);
//		dump($result);
//		
//		dump($res[1][seat_location]);
//		dump($res_length);
		$myarray=json_encode($myarray);
		echo $myarray;
	}
		//删除会议室
	public function del_room(){
			$get=I('get.');
			dump($get);
			$model_room_information=M('room_information');
			$model_room_location=M('room_location');
			$length=strlen($get['room_id']);
			$first = substr($get['room_id'],0,$length-1);
			
			$index['room_id']=$first;
			$res=$model_room_information->where($index)->delete();
		
			$model_room_location->where($index)->delete();
			$this->redirect('Roommain/memberdel');
	}
	
}