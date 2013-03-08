<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shape {

	public function display_name(){
		return "return of the GOD!";
	}

	public function calculate_area($shape, $dt=array()){
		$data['areaOfShape'] = 0;
		$data['given_values'] = '';
		switch($shape){
			case "circle":
				if(isset($dt['diameter'])){
					$data['areaOfShape'] = M_PI * pow($dt['diameter'] * 0.5,2);
					$data['given_values']= '{ "diameter":'.$dt['diameter'].'}';
				}
				break;
			case "square":
				if(isset($dt['side'])){
					$data['areaOfShape'] =  pow($dt['side'],2);
					$data['given_values'] = '{ "side":'.$dt['side'].'}';
				}
				break;
			case "eclipse":
				if(isset($dt['width']) && isset($dt['height'])){
					$data['areaOfShape'] =  M_PI * $dt['width'] * $dt['height'];
					$data['given_values'] = '{ "width":'.$dt['width'].', "height":'.$dt['height'].'}';
				}
				break;
			case "rectangle":
				if(isset($dt['width']) && isset($dt['height'])){
					$data['areaOfShape'] =  $dt['width'] * $dt['height'];
					$data['given_values']= '{ "width":'.$dt['width'].', "height":'.$dt['height'].'}';
				}
				break;
		}
		return $data;
	}
}