<?php 
class CommonModel extends Model{
		protected $_validate = array(
			array('gbook_name','require','required gbook_name'),
			array('gbook_name','require','required gbook_content'),
			array('pro_name','require',"Product name is required"),
			array('procate_id','require','Product  category is required'),
			array('pro_price','require','Prodcut price is requred'),
		);
		
	}
?>