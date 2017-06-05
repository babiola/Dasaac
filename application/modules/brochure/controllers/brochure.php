<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * This file is part of Auth_Ldap.

  Auth_Ldap is free software: you can redistribute it and/or modify
  it under the terms of the GNU Lesser General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  Auth_Ldap is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with Auth_Ldap.  If not, see <http://www.gnu.org/licenses/>.
 * 
 */

/**
 * @author      Greg Wojtak <gwojtak@techrockdo.com>
 * @copyright   Copyright © 2010,2011 by Greg Wojtak <gwojtak@techrockdo.com>
 * @package     Auth_Ldap
 * @subpackage  auth demo
 * @license     GNU Lesser General Public License
 */
class Brochure extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('Form_validation');
    }

    function index() {
        $data['title'] = 'Dasaac Administrator Panel.';
		$data['brochure'] = $this->published()->result();
        $data['view_file'] = 'index';
        $this->loadViews($data);
    }
	function download($filename = NULL) {
    // load download helder
    $this->load->helper('download');
    // read file contents
    $data = file_get_contents(base_url('/uploads/'.$filename));
    force_download($filename, $data);
	}
    function loadView($data) {
        $data['module'] = 'brochure';
        echo Modules::run('templ/templCon', $data);
    }
 function loadViews($data) {
        $data['module'] = 'brochure';
        echo Modules::run('templ/templContent', $data);
    }
 
	function available() {
        $data['title'] = 'Dasaac Administrator Panel.';
		$data['brochures'] = $this->getAll()->result();
        $data['view_file'] = 'brochure';
        $this->loadView($data);
    }
	 function submit(){
		 	$config['upload_path'] = "./uploads/";
			$config['allowed_types'] = 'gif|jpg|png|pdf';
			$config['max_size'] = '1000';
			$config['max_width']  = '';
			$config['max_height']  = '';
			$config['overwrite'] = TRUE;
			$config['remove_spaces'] = TRUE;
			$this->load->library('upload', $config);
			$this->form_validation->set_rules('brochureid', 'brochure Id','trim|required');
			$this->form_validation->set_rules('title', 'Brochure Title','trim|required');
			$this->form_validation->set_rules('desc', 'Description','trim');
		if ($this->form_validation->run() === FALSE){
			$data1['msg'] = 'Please Provide a valid information';	
			$data['title'] = 'Dasaac brochure Management';
			$data['view_file'] = 'addbrochure';
			$this->loadView($data);
		}
		else{
			foreach($_FILES as $field_name =>$file){
			if(!$this->upload->do_upload($field_name)){
					$data['msg']= 'picture'.$this->upload->display_errors('','');
					$data['title'] = 'Dasaac brochure Management';
					$data['view_file'] = 'addbrochure';
					$this->loadView($data);
			}else{
						$value = '';
					 $upload_image[] = $this->upload->data('file_name');
					// $filename =$upload_image['file_name'];
					$pdf = $upload_image[0];
					$pic = $upload_image[1];
					/*  foreach($filename as $name){
						// print_r($name['file_name']);
					 } */
					 //var_dump($filename);
					// die();
				}
				
			}
			
		 $pic;
					 $pdf;
				$data = $this->get_data_brochure_post($pic,$pdf);
				//var_dump($data);
				 $this->_insert($data);
				$data['msg'] = '<div class="boxed-wrapper">brochure Successfully added</div>';
				$data['title'] = 'Dasaac brochure Management';
				$data['view_file'] = 'addbrochure';
				$this->loadView($data);/* */
				}
	
		}	
 function allbrochure($data){
		$data['title'] = 'Dasaac brochure Management';
		$data['brochures'] = $this->getAll()->result();
        $data['view_file'] = 'brochure';
        $this->loadView($data);
 }
	public function get_data_brochure_post($pic,$pdf) {
			$data = array();
			$data['brochureid'] = $this->input->post('brochureid', TRUE);
			$data['NAME'] = $this->input->post('title', TRUE);
			$data['path'] =  $pic; //$this->upload->data('file_name');
			$data['pdf'] =   $pdf;//$this->upload->data('file_name');
			$data['createdby'] = $_SESSION['username'];
			$data['description'] = $this->input->post('desc', TRUE);
			$data['created_date	'] = date('y-m-d h:i:s');
			$data['publish_date'] = '';
			$data['status'] = 'not published';
			$data['publishedby'] = '';
        return $data;
    }  
	
	function publish ($id){
		$value = "";
        $query = $this->get_where($id)->result();
		$data['publish_date'] = date('y-m-d h:i:s');
		$data['status'] = 'published';
		$data['publishedby'] = $_SESSION['username'];
        $this->_update($id,$data);
        foreach ($query as $row) {
            $value = $row->Name;
        }
       $process = $data['msg'] = " $value, published sucessfully";
        $this->log($process);
        $this->allbrochure($data);
	}
	 function delete($id) {
        $value = "";
        $query = $this->get_where($id)->result();
        $this->_delete($id);
        foreach ($query as $row) {
            $value = $row->Name;
        }
       $process = $data['msg'] = " $value, deleted sucessfully";
        $this->log($process);
        $this->allbrochure($data);
    }

function manage(){
	$data['title'] = 'Dasaac brochure Management';
	$data['view_file'] = 'addbrochure';
	$this->loadView($data);
}
 function published() {
	 $sql = "select * from brochure where status = 'published' order by publish_date desc limit 8";
        $query = $this->_custom_query($sql);
        return $query;
    }

  function _insert($data){
	$this->load->model('mdl_brochure');
    $this->mdl_brochure->_insert($data);
}
function _delete($data){
	$this->load->model('mdl_brochure');
    $this->mdl_brochure->_delete($data);
}
function _update($id,$data){
	$this->load->model('mdl_brochure');
    $this->mdl_brochure->_update($id,$data);
}
    function _custom_num_rows_query($mysql_query) {
        $this->load->model('mdl_brochure');
        $query = $this->mdl_brochure->_custom_num_rows_query($mysql_query);
        return $query;
    }
 function getAll() {
        $this->load->model('mdl_brochure');
        $query = $this->mdl_brochure->getAll($table);
        return $query;
    }
      function _custom_query($mysql_query) {
        $this->load->model('mdl_brochure');
        $query = $this->mdl_brochure->_custom_query($mysql_query);
        return $query;
    }

    function get_where($id) {
        $this->load->model('mdl_brochure');
        $query = $this->mdl_brochure->get_where($id);
        return $query;
    }
	// error log
    function log($process) {
        $process_user = $_SESSION['username'];
		$url = $_SERVER['REMOTE_ADDR'];
		$logged_date = date('Y-m-d h:i:s');
        $query = "INSERT INTO TS_LOG(process,process_user,urlaccessed,logged_date)VALUES ('$process','$process_user','$url','$logged_date')";
        $this->_custom_query($query);
    }

}

?>
