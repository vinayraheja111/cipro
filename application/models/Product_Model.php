<?php
class Product_Model extends CI_Model
{
	public function getfeatureproduct($type_id,$limit)
	{
		$qry = $this->db->select('*')
		->where('pro_type',$type_id)
		->limit($limit)
		->get('product');
		//echo $this->db->last_query();
		//exit;
		 return $qry->result();
	}

	public function productdetail($pid)
	{
		$qry = $this->db->where('pro_id',$pid)
		->get('product');
		return $qry->result();
	}

	public function getallcategory()
	{
		$qry = $this->db->select('*')
		->get('category');
		return $qry->result();
	}
	public function getserachresult($keyword,$catsearch)
	{
		 $this->db->like('pro_name',$keyword);
		 $this->db->where('cat_id',$catsearch);
		 $qry= $this->db->get('product');
		 //echo $this->db->last_query();
		 //die;
		return $qry->result();
	}
}


?>