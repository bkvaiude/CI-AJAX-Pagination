<?php
class Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function getOptions($id){
		$this->db->select('model_id as id, name');
		$this->db->from('models');
		$this->db->where('brand_id',$id);
		$query = $this->db->get();
		$options=array();
		foreach($query->result_array() as $row){
			$options[$row['id']]=$row['name'];
		}
		return $options;
    }
}
?>