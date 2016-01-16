<?php

class BugAction extends Action {

	public function __construct(){
		parent::__construct();
		$this->page=M('page');//实例化一个数据模型
		$this->article=M('article');
	}

     public function _empty($name){            
            $this->city($name);
        }        
       
     protected function city($name){           
             echo '非法请求：' . $name;
        }

    public function index(){
		$about= $this->page->where("page_title='Company Profile'")->find();//about
		$news=$this->article->where("artcate_id=1")->limit(5)->select();//news
		$knowledge=$this->article->where("artcate_id=2")->limit(5)->select();//knowledge
		$this->assign("about",$about);
		$this->assign("news",$news);
		$this->assign("knowledge",$knowledge);
		$this->display('index');//Home/Tpl/Bug/index.html
 }

	public function about_us(){
		$page_id = I("get.page_id",0)?I("get.page_id",0):1;
		if($page_id){
		//var_dump($this->_get("page_id"));
		$about_us = $this->page->where("page_id = $page_id")->find();
		$this->assign("about_us",$about_us);		
		}
		$this->display('About_us/about_us');//Home/Tpl/About_us/about_us.html
	}
	
/*
object M('表名');
object->select('主键');  //查询全部
object->find(主键);  //查询单条
object->where($arr)->find();  //条件查询
object->create($arr|默认是post)//自动根据表单数据创建数据对象 | 数组 | 对象 |
object->add();//插入，返回主键
object->data($arr)->add();//插入数据
object->create($data)->add();//插入数据
object->字段="值";//编辑
object->save();//编辑
*/

/*
		$mem=M('member');//参数是表名
		$mem_list=$mem->select();//参数是主键，不强制
		//$mem_single=$mem->find(2);//参数是主键，不强制
		
		//查询条件(一条)
		$arr = array("mem_name"=>"房鑫鑫");
		$mem_specify = $mem->where($arr)->find();//数组形式
		//按条件查询
		$mem_where = $mem->where('mem_id=5')->find();//字符形式
		
//添加1
		$data['mem_id'] = 38;
		$mem->create($data);
		$res = $mem->add();//插入并返回主键
		if($res){
			$this->success('Succeed to insert','index');//成功跳转
			exit;
		}else{
			//重定向
			$url = U('Bug/index');
			redirect($url,10,'系统崩溃中ing');
			//$this->error("Fail to insert");//错误跳转
}
//添加2
		//$mem->data($data)->add();
	
//编辑
		$mem->admin_id=38;//
		$mem->mem_name="匿名1";//
		$mem->save();
		
		var_dump($mem_where);exit;
			*/
	
}








