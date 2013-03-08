<?php
class Brand extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
 
    function getOptions(){
		$this->db->select('brand_id as id, name');
		$this->db->from('brands');
		$query = $this->db->get();
		//return $query->result_array();
		$options=array();
		foreach($query->result_array() as $row){
			$options[$row['id']]=$row['name'];
		}
		return $options;
    }    
}
?>