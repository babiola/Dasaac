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
class Deals extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('Form_validation');
    }

    function index() {
        $data['title'] = 'Dasaac Travels and Tour Latest deals.';
		$data['deal'] = $this->published()->result();
        $data['view_file'] = 'index';
        $this->loadViews($data);
    }
	
    function loadView($data) {
        $data['module'] = 'deals';
        echo Modules::run('templ/templCon', $data);
    }
 function loadViews($data) {
        $data['module'] = 'deals';
        echo Modules::run('templ/templContent', $data);
    }
 
	function available() {
        $data['title'] = 'Dasaac Administrator Panel.';
		$data['deals'] = $this->getAll()->result();
        $data['view_file'] = 'deals';
        $this->loadView($data);
    }
	 function submit(){
			$this->form_validation->set_rules('dealid', 'Deals Id','trim|required');
			$this->form_validation->set_rules('title', 'Deal Title','trim|required');
			$this->form_validation->set_rules('desc', 'Description','trim|required');
		if ($this->form_validation->run() === FALSE){
			$data1['msg'] = 'Please Provide a valid information';	
			$data['title'] = 'Dasaac Deals Management';
	$data['view_file'] = 'dealform';
	$this->loadView($data);
		}
		else{
			$config['upload_path'] = "./uploads/";
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '1000';
			$config['max_width']  = '';
			$config['max_height']  = '';
			$config['overwrite'] = TRUE;
			$config['remove_spaces'] = TRUE;
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('user_file')){
				$data['msg']=$this->upload->display_errors('','');
					$data['title'] = 'Dasaac Deals Management';
			$data['view_file'] = 'dealform';
			$this->loadView($data);
			}else{	
				$data = $this->get_data_deals_post();
				$this->_insert($data);
				$data['msg'] = '<div class="boxed-wrapper">Job Successfully added</div>';
				$data['title'] = 'Dasaac Deals Management';
				$data['view_file'] = 'dealform';
				$this->loadView($data);
				}
	
		}	
			
 }
 function alldeals($data){
		$data['title'] = 'Dasaac Deals Management';
		$data['deals'] = $this->getAll()->result();
        $data['view_file'] = 'deals';
        $this->loadView($data);
 }
	public function get_data_deals_post() {
			$data = array();
			$data['deal_id'] = $this->input->post('dealid', TRUE);
			$data['NAME'] = $this->input->post('title', TRUE);
			$data['path'] =  $this->upload->data('file_name');
			$data['createdby'] = $_SESSION['username'];
			$data['description'] = $this->input->post('desc', TRUE);
			$data['Date_Created	'] = date('y-m-d h:i:s');
			$data['Date_published'] = '';
			$data['status'] = 'not published';
			$data['publishedby'] = '';
        return $data;
    }
	
	function publish ($id){
		$value = "";
        $query = $this->get_where($id)->result();
		$data['Date_published'] = date('y-m-d h:i:s');
		$data['status'] = 'published';
		$data['publishedby'] = $_SESSION['username'];
        $this->_update($id,$data);
        foreach ($query as $row) {
            $value = $row->Name;
        }
       $process = $data['msg'] = " $value, published sucessfully";
        $this->log($process);
        $this->alldeals($data);
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
        $this->alldeals($data);
    }

function manage(){
	$data['title'] = 'Dasaac Deals Management';
	$data['view_file'] = 'dealform';
	$this->loadView($data);
}
 function published() {
	 $sql = "select * from deals where status = 'published' order by Date_published desc limit 8";
        $query = $this->_custom_query($sql);
        return $query;
    }

  function _insert($data){
	$this->load->model('mdl_deals');
    $this->mdl_deals->_insert($data);
}
function _delete($data){
	$this->load->model('mdl_deals');
    $this->mdl_deals->_delete($data);
}
function _update($id,$data){
	$this->load->model('mdl_deals');
    $this->mdl_deals->_update($id,$data);
}
    function _custom_num_rows_query($mysql_query) {
        $this->load->model('mdl_deals');
        $query = $this->mdl_deals->_custom_num_rows_query($mysql_query);
        return $query;
    }
 function getAll() {
        $this->load->model('mdl_deals');
        $query = $this->mdl_deals->getAll($table);
        return $query;
    }
      function _custom_query($mysql_query) {
        $this->load->model('mdl_deals');
        $query = $this->mdl_deals->_custom_query($mysql_query);
        return $query;
    }

    function get_where($id) {
        $this->load->model('mdl_deals');
        $query = $this->mdl_deals->get_where($id);
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
