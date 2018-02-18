<?php
namespace Sign\Controller;
use Think\Controller;
class BasicnumberController extends Controller{
	//主页面展示
	public function memberkiss()
	{
			$model = M('branch');
		$data = $model->select();
		$length=count($data);
		$this->assign('length',$length);
		$this->assign('data',$data);
		$this->display('Basic/number/member-kiss');
	}
	//主页面之添加部门信息展示
	public function kiss_add(){
		$this->display('Basic/number/kiss_add');
	}
	//页面之修改成部门信息展示
	public function kiss_edit(){
		$get=I('get.');
		$model=M('branch');
		$data = $model->where($get)->find();
		$this->assign('data',$data);
		$this->display('Basic/number/kiss_edit');
	}
	//添加部门信息
	public function add_branch(){
		if(IS_POST){
			$post=I('post.','0','trim,htmlspecialchars');
			$model=M('branch');
			$temp['branch_num']=$post['branch_num'];
			$res = $model->where($temp)->find();
			if($res){
				$this->error('已存在');
			}else{
				$result = $model->add($post);
				if($result){
					$this->redirect('Basicnumber/add_branch');
				}
			}
		}
	}
	//修改部门信息
	public function edit_save(){
		if(IS_POST){
			$post=I('post.','0','trim,htmlspecialchars');
			$model=M('branch');
			$res=$model->save($post);
			$this->display('Basic/number/kiss_edit');
			}
	}
	//删除部门信息
	public function del_branch(){
		$get=I('get.');
		$model=M('branch');
		$data = $model->where($get)->delete();
		$this->redirect('basicnumber/del_branch');
	}
	//搜索成员信息
	public function search_branch(){
		if(IS_POST){
			$post=I('post.','0','trim,htmlspecialchars');
			$model=M('branch');
			$temp['branch_num']=$post['branch_num'];
			$data = $model->where($temp)->select();
			$length=count($data);
			if($length==0){
				$data = $model->select();
				$length=count($data);
				$this->assign('length',$length);
				$this->assign('data',$data);
				$this->display('Basic/number/member-kiss');
			}else{
				$this->assign('length',$length);
				$this->assign('data',$data);
				$this->display('Basic/number/member-kiss');
			}
			}
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
				$model=M('branch');
				for($j=2;$j<=$highestRow;$j++)
				       {
						$hh['branch_num'] = $objPHPExcel->getActiveSheet()->getCell("A".$j)->getValue();
						$hh['branch_name']=$objPHPExcel->getActiveSheet()->getCell("B".$j)->getValue();
						$model->add($hh);
				}  
				$this->redirect('Basicnumber/memberkiss');
		}
		$this->redirect('Basicnumber/memberkiss');
}
}