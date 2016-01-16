<?php
//This Class is just for testing
class ProductAction extends Action{
	public function __construct(){
		parent::__construct();
		$this->product = M('product'); // SELECT TABLE
		$this->product_cate = M('product_cate');//SELECT TABLE
		#页码
		import('ORG.Util.Page');//ThinkPHP/Extend/Library/ORG/Util/Page.class.php
		#上传图片
		import('ORG.Net.UploadFile');//UPLOAD
		#图片操作
		import('ORG.Util.Image');//IMAGE
	}
//DEBUGER
public function bug($v,$w){
	
	var_dump($v);
	if($w)	exit;
}
public function index(){
	/*
	FUNCTION CONFIG C();

	*/
		$p = I("get.p",1); // I('get.param',DEFAULT);
		$count = $this->product->count();//通过对象获取 总数
		$limit = 4;
		$page = new Page($count,$limit); //
		$page_show = $page->show();// TO STRING
	//SELECT PRODUCTS
		$pre = C('DB_PREFIX');
		$start = ($p-1)*$limit;
		$product_list = $this->product->alias('pro')->join("{$pre}product_cate AS cate ON pro.procate_id = cate.procate_id")->order("pro_time desc")->limit($start,$limit)->select(); // CARE: select() sure be at the last of the line.
		$this->assign("page_show",$page_show);
		$this->assign("product_list",$product_list);
		$this->display();
		//$this->bug($product_list);
	}

#ADD添加
public function product_add(){
	
	if($this->_post()){
		//设置验证规则
		//组装数据
		//插入并判断是否成功
		$common = D('Common');//加载模型(规则)，位置： app/Lib/Model/CommonModel.class.php

		if($common->create()===false){//验证失败
			$msg = $common->getError();
			redirect(U('Admin/Product/product_add'),2,$msg.'page is changing ...');
			exit;
		}

		//验证POST成功
		$data = array(
			"pro_name"=>$this->_post("pro_name"),
			"pro_size"=>$this->_post("pro_size"),
			"pro_price"=>$this->_post("pro_price"),
			"pro_show"=>$this->_post("pro_show"),
			"pro_order"=>$this->_post("pro_order"),
			"pro_time"=>$this->strtotime($this->_post("pro_time")),
			"pro_desc"=>$this->_post("pro_desc"),
			"procate_id"=>$this->_post("procate_id"),
		);

		//上传图片
		if($_FILE['pro_img']['error'] == 0 && is_uploaded_file($_FILES['pro_img']['tmp_name'])){//如果有上传成功
			$upload =new UploadFile();//实例化 上传类
			
			$path = './Uploads'; //原图路径：WEBROOT/Uploads
			$thumb_path = './Uploads/thumb';//缩略图：WEBROOT/Uploads/thumb	
			#配置
			$upload->maxSize = 3145728;// 大小
			$upload->allowExts = array('jpg','gif','png','jpeg');// 限制类型
			$upload->savePath = $path."/"; // 存放路径

			//THUMB缩略图
			$upload->thumb = true;//开启缩略图
			$upload->thumbMaxWidth = '50,200';//宽度
			$upload->thumbMaxHeight='50,200';//高度
			$upload->thumbPath ='./Uploads/thumb/';//存放路径

			if( !$upload->upload() ){ //上传失败
			$this->error( $upload->getErrorMsg() );//提示TIP
			exit;
		}else{//上传成功,
			$info = $upload->getUploadFileInfo();//返回一个数组，存放图片信息
			$data['pro_img'] = $path."/".$info[0]['savename'];//原图路径
			$data['pro_thumb'] = $thumb_path."/".$info[0]['savename'];//缩略图路径

			$Image = new Image();//实例化一个 水印 类
			$temp = C("TMPL_PARSE_STRING");//
			$Image->water($data['pro_img'],$temp['__UPLOAD__'].'/logo.gif');
			exit;
		}
	}
}

}?>