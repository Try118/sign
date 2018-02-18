<?php
namespace Sign\Controller;
use Think\Controller;
class BasicmainController extends Controller{
	//主页面展示
	public function memberlist()
	{
		$model = M('member');
		$data = $model->select();
		$length=count($data);
		$this->assign('length',$length);
		$this->assign('data',$data);
		$this->display('Basic/main/member-list');
	}
	
	//主页面之添加成员展示
	public function member_add(){
		$this->display('Basic/main/member_add');
	}
	//页面之修改成员页面展示
	public function member_edit(){
		$get=I('get.');
		$model=M('member');
		$data = $model->where($get)->find();
		$this->assign('data',$data);
		$this->display('Basic/main/member_edit');
	}
	//添加成员
	public function add_member(){
		if(IS_POST){
			$post=I('post.','0','trim,htmlspecialchars');
			$model=M('member');
			$temp['card']=$post['card'];
			$res = $model->where($temp)->find();
			if($res){
				$this->error('已存在');
			}else{
				$post['status']='1';
				$result = $model->add($post);
				if($result){
					$this->redirect('Basicmain/member_add');
				}
			}
		}
	}
	//搜索成员信息
	public function search_member(){
		if(IS_POST){
			$post=I('post.','0','trim,htmlspecialchars');
			$model=M('member');
			$temp['card']=$post['card'];
			$data = $model->where($temp)->select();
			$length=count($data);
			if($length==0){
				$data = $model->select();
				$length=count($data);
				$this->assign('length',$length);
				$this->assign('data',$data);
				$this->display('Basic/main/member-list');
			}else{
				$this->assign('length',$length);
				$this->assign('data',$data);
				$this->display('Basic/main/member-list');
			}
			}
		}
	//修改成员信息
	public function edit_save(){
		if(IS_POST){
			$post=I('post.','0','trim,htmlspecialchars');
			$model=M('member');
			$res=$model->save($post);
			}
	}
	//删除成员
	public function member_delete(){
		$get=I('get.');
		$model=M('member');
		$data = $model->where($get)->delete();
		$this->redirect('Basicmain/memberlist');
	}
	
	//批量添加
	public function add_batch(){
			
		 if (! empty ( $_FILES ['upfile'] ['name'] )) 
		 {
		    $tmp_file = $_FILES ['upfile'] ['tmp_name'];
		   
		    $file_types = explode ( ".", $_FILES ['upfile'] ['name'] );
		    $file_type = $file_types [count ( $file_types ) - 1];

		     /*判别是不是.xls文件，判别是不是excel文件*/
		     if (!(strtolower ( $file_type ) == "xls"||strtolower ( $file_type )=='xlsx'))              
		    {
		          $this->error ( '不是Excel文件，重新上传' );
		     }
			
		    /*设置上传路径*/
		     $savePath = './public/';
		
		    /*以时间来命名上传的文件*/
		     $str = date ( 'Ymdhis' ); 
		     $file_name = $str . "." . $file_type;
		     /*是否上传成功*/
		     if (! copy ( $tmp_file, $savePath . $file_name )) 
		      {
		          $this->error ( '上传失败' );
		      }
		      	header("content-type:text/html;charset=utf-8");
				 import("Org.Util.PHPExcel");
				import("Org.Util.PHPExcel.IOFactory");
				if(strtolower ( $file_type )=='xls'){
				import("Org.Util.PHPExcel.Reader.Excel5");
				$objReader = new \PHPExcel_Reader_Excel5();//注意和导出的类不一样哦
				}else if(strtolower ( $file_type )=='xlsx'){
				import("Org.Util.PHPExcel.Reader.Excel2007");
				$objReader = new \PHPExcel_Reader_Excel2007();//注意和导出的类不一样哦
				}
			
				$objPHPExcel = $objReader->load($tmp_file); //上传的文件，或者是指定的文件
				$sheet = $objPHPExcel->getSheet(0);
				$highestRow = $sheet->getHighestRow(); //取得总行数
				$highestColumn = $sheet->getHighestColumn(); //取得总列数
				$model=M('member');
				for($j=2;$j<=$highestRow;$j++)
				       {
						$hh['card'] = $objPHPExcel->getActiveSheet()->getCell("A".$j)->getValue();
						$hh['name']=$objPHPExcel->getActiveSheet()->getCell("B".$j)->getValue();
						$hh['branch']=$objPHPExcel->getActiveSheet()->getCell("C".$j)->getValue();
						$hh['classroom']=$objPHPExcel->getActiveSheet()->getCell("D".$j)->getValue();
						$hh['duty']=$objPHPExcel->getActiveSheet()->getCell("E".$j)->getValue();
						$hh['phonelong']=$objPHPExcel->getActiveSheet()->getCell("F".$j)->getValue();
						$hh['phoneshort']=$objPHPExcel->getActiveSheet()->getCell("G".$j)->getValue();
						$hh['status']=1;
						$model->add($hh);
				}  
				$this->redirect('Basicmain/memberlist');
		}
		$this->redirect('Basicmain/memberlist');
}

}