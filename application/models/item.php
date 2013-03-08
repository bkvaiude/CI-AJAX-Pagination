<?php
class Item extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get($limit=5, $start=0, $orderby="id", $order="ASC"){
		$this->db->select('item_id as id, items.name as name, models.name as model, brands.name as brand, created_at as date_added');
		$this->db->from('items');
		$this->db->join('models', 'items.model_id = models.model_id');
		$this->db->join('brands', 'items.brand_id = brands.brand_id');
		$this->db->limit($limit, $start);
		$this->db->order_by($orderby, $order);
		$query = $this->db->get();
		return $query->result_array();
    }
    
    function itemsCount(){
		return $this->db->count_all_results('items');
    }
    
    function getItem($id){
		$this->db->select('item_id as id, name, model_id as model, brand_id as brand');
		$this->db->from('items');
		$this->db->where('item_id', $id);
		$query = $this->db->get();
		return $query->row_array();
    }
    
    function delete($id){
    	$this->db->delete('items', array('item_id' => $id)); 
    }
    
    function update($item_id, $data){
		$this->db->where('item_id', $item_id);
		$this->db->update('items', $data); 			    
    }

    function insert($data){
		$this->db->set($data);
		$this->db->insert('items'); 					
    }
}
?>