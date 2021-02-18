<?php
class Product extends CI_Controller
{
	public function products()
	{
	  $pid = $this->input->get('pid');
		//exit;
	  $this->load->model('Product_Model');
	  $pdetail = $this->Product_Model->productdetail($pid);
	  $category = $this->Product_Model->getallcategory();
	  //print_r($pdetail);
     $this->load->view('productdetails.php',['pdetail'=>$pdetail,'category'=>$category]);
	}
 

      public function searchproduct()
      {
         $searckeyword = $this->input->post('searchpro');
         $catsearch = $this->input->post('catsearch');
         $catsearch = $this->input->get('catsearch');
      	 $this->load->model('Product_Model');
      	 $category = $this->Product_Model->getallcategory();
      	 $searchpro = $this->Product_Model->getserachresult($searckeyword,$catsearch);
      	$this->load->view('Products',['category'=>$category,'searchpro'=>$searchpro]);
      }

}



?>