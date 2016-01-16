<?php

class IndexAction extends Action {
	public function __construct(){
		parent::__construct();
		$this->article=M("article");
		$this->note=M("guestbook");
		$this->product=M("product");
	}

	public function index(){
		$this->display();//默认找的目录：本文件分组/模板/文件名/方法名.html
	}

	public function sys_info(){
		$data = array(
		"article_count"=> $this->article->count(),
		"note_count"=>$this->note->count(),
		"product_count"=>$this->product->count(),
	);
		//var_dump($data);exit;
		$this->assign("data",$data);
		$this->display();//默认是：Admin/Tpl/Index/sys_info.html
	}
}