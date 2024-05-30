<?php 

class Sellermodel extends Frontend_Model
{
	
	
	public function get_comapany_info($id){

		$this->db->select('*');		
 	 	$this->db->from('company');
 	 	$this->db->where('id',$id);
 		$rs = $this->db->get();
        return $rs->row_array();

	}
	
	public function get_comapany_log_status($id){
	    $this->db->select('*');		
 	 	$this->db->from('company_log');
 	 	$this->db->where('company_id',$id);
 	 	$this->db->where('approve_status',0);
 		$rs = $this->db->get();
        return $rs->row_array();
	}

	public function get_country_name($id){
		$this->db->select('*');		
 	 	$this->db->from('country');
 	 	$this->db->where('id',$id);
 		$rs = $this->db->get();
        $data =  $rs->row_array();
        return $data['country_name'];
	}

	public function get_country_list(){
		$this->db->select('*');		
 	 	$this->db->from('country');
 		$rs = $this->db->get();
        return  $rs->result_array();
	}

	public function get_distric_list($id){
		$this->db->select('*');		
 	 	$this->db->from('district');
 	 	$this->db->where('country_id',$id);
 		$rs = $this->db->get();
        return  $rs->result_array();
	}

	public function get_biz_type(){
		$this->db->select('*');		
 	 	$this->db->from('business_category');
 		$rs = $this->db->get();
        return  $rs->result_array();
	}

	public function get_cat_list(){
		$this->db->select('*');		
 	 	$this->db->from('category');
 		$rs = $this->db->get();
        return  $rs->result_array();
	}

	public function get_sub_cat_list($cat_id){
		$this->db->select('*');		
 	 	$this->db->from('sub_category');
 	 	$this->db->where('category_id',$cat_id);
 		$rs = $this->db->get();
        return  $rs->result_array();
	}

	public function get_comapany_brochure_list($com_id){
		$this->db->select('*');		
 	 	$this->db->from('company_brochure');
 	 	$this->db->where('company_id',$com_id);
 		$rs = $this->db->get();
        return  $rs->result_array();
	}

	public function get_comapany_certificate_list($com_id){
		$this->db->select('*');		
 	 	$this->db->from('company_certificate');
 	 	$this->db->where('company_id',$com_id);
 		$rs = $this->db->get();
        return  $rs->result_array();
	}

	public function get_comapany_video_list($com_id){
		$this->db->select('*');		
 	 	$this->db->from('company_video');
 	 	$this->db->where('company_id',$com_id);
 		$rs = $this->db->get();
        return  $rs->result_array();
	}

	public function certificate_type(){
		$this->db->select('*');		
 	 	$this->db->from('certificate_type');
 	 	$this->db->where('status', 'Active');
 		$rs = $this->db->get();
        return  $rs->result_array();
	}

	public function get_year(){
		$year = array();
		for($i=0; $i <= 50; $i++){
           $y = date('Y', strtotime("-$i year"));
	       $year[$y] = $y;
		}  

		return $year;

	}

	public function update($table, $id, $data){
        return $this->db->update($table, $data, array('id' => $id));
    }

    public function insert($table, $data){
 		$this->db->insert($table, $data);
        return $this->db->insert_id();
 	}


 	public function get_product_unit_list(){
		$this->db->select('*');		
 	 	$this->db->from('product_unit');
 		$rs = $this->db->get();
        return  $rs->result_array();
	}


	public function get_product_list($company_id){
		$this->db->select('*');		
 	 	$this->db->from('product');
 	 	$this->db->where('company_id',$company_id);
 		$rs = $this->db->get();
        return  $rs->result_array();
	}

	public function getProductImg($pid){

		$this->db->select('*');		
 	 	$this->db->from('product_gallery');
 	 	$this->db->where('product_id',$pid);
 		$rs = $this->db->get();
        return  $rs->row_array();

	}

	public function get_product_info($id){

		$this->db->select('*');		
 	 	$this->db->from('product');
 	 	$this->db->where('id',$id);
 		$rs = $this->db->get();
        return  $rs->row_array();

	}
	
	public function get_sub_cat_product_list($cat_id, $sub_id){
		$this->db->select('*');		
 	 	$this->db->from('product');
 	 	$this->db->where('category_id',$cat_id);
 	 	$this->db->where('sub_category_id',$sub_id);
 	 	$this->db->where('status', 'Active');
 	 	$this->db->order_by("id", "desc");
 	 	$this->db->limit(4);
 		$rs = $this->db->get();
        return  $rs->result_array();
	}
	

 	
}