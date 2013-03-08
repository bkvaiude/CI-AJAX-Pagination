<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Store extends CI_Controller {
	public function index()
	{
			error_reporting(E_ALL);
		ini_set('display_errors', 1);

		$this->items();
	}

	public function items(){
		$orderby = ($this->uri->segment(3)) ? $this->uri->segment(3) : 'id';
		$order = ($this->uri->segment(4)) ? $this->uri->segment(4) : 'asc';
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/store/items/'.$orderby.'/'.$order;
		$config['total_rows'] = $this->item->itemsCount();
		$config['per_page'] = 2;
		$config["uri_segment"] = 5;
		$this->pagination->initialize($config);
		
		$page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
		$data["results"] 		= $this->item->get($config['per_page'], $page, $orderby, $order);		
		$data["pagination_link"]= $this->pagination->create_links();
		$data["order"] = $order;
		$data["orderby"] = $orderby;
		$is_ajax = $this->input->is_ajax_request();
		if(!$is_ajax){
			$this->load->view('header');
			$this->load->view('store/item-index', $data);
			$this->load->view('footer');
		}else{
			$output['body'] = $this->load->view('store/item-list', $data, true);
			$output['pagination_link'] =$data["pagination_link"].'
<script>
		$(document).ready(function() {
			$(".paginations > a").on("click",function(e){
				e.preventDefault();
				$.ajax({
					type: "GET",
					url:$(this).attr("href")
				}).done(function(data) {
					$(".grid-container-body").html(data.body);
					$(".grid-container-footer").html(data.pagination_link);					
				});				
			});
		});
</script>			
			';
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($output));					
		}
	}
	
	public function itemform($itemid=null){	
		$data['name'] = null;
		$data['item_id'] = null;
		$data['selected_brand'] = null;
		$data['selected_model'] = null;
		$data['select_brand'] = $this->brand->getOptions();
		
		if(!empty($itemid)){
			$item = $this->item->getItem($itemid);
			$data['name'] = $item['name'];
			$data['item_id'] = $itemid;
			$data['selected_brand'] = $item['brand'];
			$data['selected_model'] = $item['model'];		
			$data['select_model'] = $this->model->getOptions($item['brand']);		
		}else{
			$data['select_model'] = $this->model->getOptions(key($data['select_brand']));				
		}
		$this->load->view('store/item-form', $data);
	}
	
	public function modelDropDown($id=1){
		$options = $this->model->getOptions($id);
		echo '<span class="add-on">Model: </span>'.form_dropdown('model', $options, '', 'id="select-model"');		
	}
	
	public function saveItem(){
		$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
		$model = filter_var($_POST['model'], FILTER_SANITIZE_STRING);
		$brand = filter_var($_POST['brand'], FILTER_SANITIZE_STRING);
		$data = array(
					   'name' => $name,
					   'model_id' => $model,
					   'brand_id' => $brand
				);
		if(!empty($name) && !empty($model) && !empty($brand) ){//todo: need to move this check above if any failed directly send a failed message 
			if(isset($_POST['item_id']) && !empty($_POST['item_id'])){
				$item_id = filter_var($_POST['item_id'], FILTER_SANITIZE_STRING);
				$this->item->update($item_id, $data);
			}else{
				$this->item->insert($data);
			}
			$status = "pass";
			$this->session->set_flashdata('item_saved', 'Data saved successfully!!!');
		}else{
			$status = "fail";
			$this->session->set_flashdata('item_saved', 'Problem occured, while saving th data!!!');
		}
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode(array('status' => $status)));		
	}
	
	public function deleteItem($id=null){
		$id = filter_var($id, FILTER_SANITIZE_STRING);
		if(!empty($id)){
			$this->item->delete($id);
			$this->session->set_flashdata('item_saved', 'Item deleted!!!');
			$status = "pass";
		}else{
			$status = "fail";
			$this->session->set_flashdata('item_saved', 'Problem occured, while deleting the data!!!');
		}
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode(array('status' => $status)));		
	}
}
