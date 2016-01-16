<?php
//This Class is just for testing
class ProductAction extends Action{
	public function __construct(){
		parent::__construct();
		$this->product = M('product'); // SELECT TABLE
		$this->product_cate = M('product_cate');//SELECT TABLE
		#ҳ��
		import('ORG.Util.Page');//ThinkPHP/Extend/Library/ORG/Util/Page.class.php
		#�ϴ�ͼƬ
		import('ORG.Net.UploadFile');//UPLOAD
		#ͼƬ����
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
		$count = $this->product->count();//ͨ�������ȡ ����
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

#ADD���
public function product_add(){
	
	if($this->_post()){
		//������֤����
		//��װ����
		//���벢�ж��Ƿ�ɹ�
		$common = D('Common');//����ģ��(����)��λ�ã� app/Lib/Model/CommonModel.class.php

		if($common->create()===false){//��֤ʧ��
			$msg = $common->getError();
			redirect(U('Admin/Product/product_add'),2,$msg.'page is changing ...');
			exit;
		}

		//��֤POST�ɹ�
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

		//�ϴ�ͼƬ
		if($_FILE['pro_img']['error'] == 0 && is_uploaded_file($_FILES['pro_img']['tmp_name'])){//������ϴ��ɹ�
			$upload =new UploadFile();//ʵ���� �ϴ���
			
			$path = './Uploads'; //ԭͼ·����WEBROOT/Uploads
			$thumb_path = './Uploads/thumb';//����ͼ��WEBROOT/Uploads/thumb	
			#����
			$upload->maxSize = 3145728;// ��С
			$upload->allowExts = array('jpg','gif','png','jpeg');// ��������
			$upload->savePath = $path."/"; // ���·��

			//THUMB����ͼ
			$upload->thumb = true;//��������ͼ
			$upload->thumbMaxWidth = '50,200';//���
			$upload->thumbMaxHeight='50,200';//�߶�
			$upload->thumbPath ='./Uploads/thumb/';//���·��

			if( !$upload->upload() ){ //�ϴ�ʧ��
			$this->error( $upload->getErrorMsg() );//��ʾTIP
			exit;
		}else{//�ϴ��ɹ�,
			$info = $upload->getUploadFileInfo();//����һ�����飬���ͼƬ��Ϣ
			$data['pro_img'] = $path."/".$info[0]['savename'];//ԭͼ·��
			$data['pro_thumb'] = $thumb_path."/".$info[0]['savename'];//����ͼ·��

			$Image = new Image();//ʵ����һ�� ˮӡ ��
			$temp = C("TMPL_PARSE_STRING");//
			$Image->water($data['pro_img'],$temp['__UPLOAD__'].'/logo.gif');
			exit;
		}
	}
}

}?>