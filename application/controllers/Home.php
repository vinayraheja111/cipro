<?php
class Home extends CI_Controller
{
	public function index()
	{
		$this->load->model('Product_Model');
		$product1 = $this->Product_Model->getfeatureproduct(1,4);
		$product2 = $this->Product_Model->getfeatureproduct(2,4);
		$product3 = $this->Product_Model->getfeatureproduct(3,6);
		$category = $this->Product_Model->getallcategory();

 
		//echo "<pre>";
		//print_r($category);
		//die;
		$this->load->view('home',['pro' => $product1,'pro1'=>$product2,'pro2'=>$product3,'category'=>$category]);
		
		

		
		
	}
}



?>