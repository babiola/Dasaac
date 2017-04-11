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
class User extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('Form_validation');
    }

    function index() {
        $data['title'] = 'Dasaac Travels Package manager';
		 $data['user'] = $this->get_custom_query()->result();
        $data['view_file'] = 'form';
        $this->loadView($data);
    }
	function get_custom_query(){
		$sql = "SELECT * FROM dasaac_user";
		$query = $this->_custom_query($sql);
		return $query;
	}
    function loadView($data) {
        $data['module'] = 'user';
        echo Modules::run('templ/templCon', $data);
    }
		function hotelbook(){
			$this->form_validation->set_rules('surname', 'Surname','trim|required');
			$this->form_validation->set_rules('othernames', 'Other Names','trim|required');
			$this->form_validation->set_rules('hoteltype', 'Hotel Type', 'trim');
			$this->form_validation->set_rules('checkindate', 'Check-in','trim|required');
			$this->form_validation->set_rules('checkoutdate', 'Check-out', 'trim|required');
			$this->form_validation->set_rules('location', 'Area Location','trim');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
		if ($this->form_validation->run() === FALSE){
			$data1['msg'] = 'Please Provide a valid information';
		redirect('/flight/',$data1);
		}else{
		$data = $this->get_data_hotel_post();
		$this->_insert_hotel($data);
		$data1['msg'] = 'thank you for doing business with us! we will get back to you shortly';
		redirect('/flight/',$data1);
		
		}
	}
 function apply(){
		$data['title'] = 'Dasaac Travels Hotel List';
		// $data['userlist'] = $this->get_custom_query_hotel()->result();
        $data['view_file'] = 'index';
        $this->loadView($data);
 
 }
   public function userlist($data) {
	   $this->get_user_list($data);
	   
   }
    public function get_user_list($data) {
		$data['title'] = 'List of Users';
       $data['user'] = $this->get_custom_query()->result();
		$data['view_file'] = 'form';
        $data['module'] = 'user';
        echo Modules::run('templ/templCon', $data);
    }
 
 function delete($id) {
        $value = "";
        $query = $this->get_where_id($id)->result();
        $this->_delete($id);
        foreach ($query as $row) {
            $value = $row->USERNAME;
        }
        $process = $data['msg'] = " $value, deleted sucessfully";
       // $this->log($process);
        $this->userlist($data);
    }
	
	function status_change($id) {
		$id = $this->uri->segment(3);
		   
        $status = "";
        $value = "";
        $query = $this->get_where_id($id)->result();
		
        foreach ($query as $row) {
            $status = $row->STATUS;
            $value  = $row->USERNAME;
        }
       
        if ($status == '1') {
            $mysql_query = "update DASAAC_USER set STATUS = '0' where USERID = $id";
            $result = $this->_custom_query($mysql_query);
			$process = $data['msg'] = "$value, status Successfully Changed to Active";
        } else {
            $mysql_query = "update DASAAC_USER set STATUS = '1' where USERID = $id";
            $result = $this->_custom_query($mysql_query);
			$process = $data['msg'] = "$value, status Successfully Changed to Inactive";
        }
        if ($result == true) {
            
           // $this->log($process);
            $this->userlist($data);
        }
    }
 function submit(){
			$this->form_validation->set_rules('username', 'User Name','trim|required');
			$this->form_validation->set_rules('password', 'Password','trim|required');
			$this->form_validation->set_rules('phone', 'Phone', 'trim');
			$this->form_validation->set_rules('usertype', 'User Type','trim|required');
		if ($this->form_validation->run() === FALSE){
			$data1['msg'] = 'Please Provide a valid information';
			
		$this->userlist($data);
		}else{
		$data = $this->get_data_submit_post();
		$this->_insert($data);
		$data1['msg'] = 'User Successfully added';
		$this->userlist($data1);
		}	
			
 }
 public function get_data_submit_post() {
	$password = md5($this->input->post('password', TRUE));
			$data = array();
			$data['USERNAME'] = $this->input->post('username', TRUE);
			$data['PASSWORD'] = $password;
			$data['PHONE'] = $this->input->post('phone', TRUE);
			$data['USERTYPE'] = $this->input->post('usertype', TRUE);
			$data['EMAIL'] = $this->input->post('email', TRUE);
			$data['CREATED_BY'] = $_SESSION['username'];
			$data['STATUS'] = 0;
        return $data;
    }	
 function get_custom_query_hotel(){
	  $sql = " select s.Name ,s.price,s.address, c.location_name, b.category_name
		from hotelmanager s, category b, location c where s.cat_id = b.cat_id and s.Loc_id = c.loc_id ";
	 $query = $this->_custom_query($sql);
	 return $query;
	 
 }
 function adduser(){
  $data['title'] = 'Dasaac Travels adding User';
        $data['view_file'] = 'index';
        $this->loadView($data);

 }
 function get_custom_query_loc(){
	 $sql = " select * from location";
	 $query = $this->_custom_query($sql);
	 return $query;
}
 function get_custom_query_cat(){
	 $sql = " select * from category";
	 $query = $this->_custom_query($sql);
	 return $query;
}
    function _custom_num_rows_query($mysql_query) {
        $this->load->model('mdl_user');
        $query = $this->mdl_user->_custom_num_rows_query($mysql_query);
        return $query;
    }
function _insert($data){
	$this->load->model('mdl_user');
    $this->mdl_user->_insert($data);
}
function _delete($data){
	$this->load->model('mdl_user');
    $this->mdl_user->_delete($data);
}
function _update($id, $data){
	$this->load->model('mdl_user');
    $this->mdl_user->_update($id, $data);
}

      function _custom_query($mysql_query) {
        $this->load->model('mdl_user');
        $query = $this->mdl_user->_custom_query($mysql_query);
        return $query;
    }

    function get_where($id) {
        $this->load->model('mdl_user');
        $query = $this->mdl_user->get_where($id);
        return $query;
    }
	
	 function get_where_id($id) {
        $this->load->model('mdl_user');
        $query = $this->mdl_user->get_where_id($id);
        return $query;
    }

}

?>
