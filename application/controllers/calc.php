<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calc extends CI_Controller {
	var $shape_types = array("1"=>"circle","2"=>"square","3"=>"rectangle","4"=>"eclipse");
	var $required_fields = array(
							"1" => array("diameter"),
							"2" => array("side"),
							"3" => array("width","height"),
							"4" => array("width","height")
						   );
	public function index()
	{
		$this->step1();
	}

	function step1(){
		$data['types'] = $this->shape_types;
		$this->load->view('header');
		$this->load->view('step1', $data);
		$this->load->view('footer');
	}

	function step2(){
		if(isset($_POST['shape']) && !empty($_POST['shape'])){
			$data['fields'] = $this->required_fields[$_POST['shape']];
			$data['shape_name'] = $this->shape_types[$_POST['shape']];
			$data['shape'] = $_POST['shape'];
			$this->session->set_userdata('shape', $_POST['shape']);
			$this->load->view('header');
			$this->load->view('step2', $data);
			$this->load->view('footer');
		}else{
			$this->step1();
		}
	}

	function step3(){
		$shape_id = $this->session->userdata('shape');
		if(!empty($shape_id)){
			$shape_name = $this->shape_types[$this->session->userdata('shape')];
			$results = $this->shape->calculate_area($shape_name, $_POST);
			$data['result'] = $results['areaOfShape'];
			$data['shape_name'] = $shape_name;
			$data['given_values'] = $results['given_values'];

			$this->session->sess_destroy();
			$this->load->view('header');
			$this->load->view('step3', $data);
			$this->load->view('footer');
		}else{
			$this->session->sess_destroy();
			$this->step1();
		}
	}
}
