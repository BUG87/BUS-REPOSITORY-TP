<?php
// 本类由系统自动生成，仅供测试用途
class ProductAction extends Action {

	public function __construct(){
		parent::__construct();
		$this->product = M('product');
		import('ORG.Util.Page');//分页
	}

	public function product(){
		$page = I("get.p",1);//接收页码
		$count = $this->product->where("pro_show = 1")->count();//总记录
		$limit = 3;//每页记录
		$Page = new Page($count,$limit);//实例化
		$Page->setConfig('header',' records');
		$Page->setConfig('theme',"%totalRow% %header% %nowPage%/%totalPage% Page %prePage% %first% %upPage% %linkPage% %downPage%  %nextPage% %end%");

		$show = $Page->show();//分页显示输出
		$start = ($page-1)*$limit;
		$pro_list=$this->product->order("pro_time desc")->where("pro_show=1")->limit($start,$limit)->select();

		$this->assign("page_str",$show);
		$this->assign("pro_list",$pro_list);
		//var_dump($show);exit;//BUG

		$this->display("Product/products");//Home/Tpl/Product/products.html
	}
	
	public function product_detail(){
		$pro_id = I('get.pro_id',0);
		$pre_ = C("DB_PREFIX");
		$pro_info = $this->product->alias("pro")->join("{$pre_}product_cate AS cate ON pro.procate_id = cate.procate_id")->where("pro.pro_id = $pro_id")->find();
		$this->assign("pro_info",$pro_info);
		$this->display(Product/product_detail);
	}
}








