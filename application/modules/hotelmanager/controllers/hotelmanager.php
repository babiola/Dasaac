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
class Hotelmanager extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('Form_validation');
    }

    function index() {
        $data['title'] = 'Dasaac Travels Package manager';
		 $data['hotel'] = $this->get_custom_query()->result();
        $data['view_file'] = 'index';
        $this->loadView($data);
    }
	function get_custom_query(){
		$sql = "SELECT * FROM hotel where DATE_FORMAT(BOOKING_DATE, '%Y-%m-%d') = DATE_FORMAT(sysdate(), '%Y-%m-%d')ORDER BY DATE_FORMAT(BOOKING_DATE, '%Y-%m-%d') DESC";
		$query = $this->_custom_query($sql);
		return $query;
	}
    function loadView($data) {
        $data['module'] = 'hotelmanager';
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
		$data['view_file']= 'index';
		$data['module'] = 'flight';
        echo Modules::run('templ/templContent', $data);
		}else{
		$data = $this->get_data_hotel_post();
		$this->_insert_hotel($data);
		$data['msg'] = 'thank you for doing business with us! we will get back to you shortly';
		$data['view_file']= 'index';
		$data['module'] = 'flight';
        echo Modules::run('templ/templContent', $data);
		
		}
	}
	
# GET DATA FROM Hotel booking POST
	public function get_data_hotel_post() {
			$data = array();
			$data['SURNAME'] = $this->input->post('surname', TRUE);
			$data['OTHERNAME'] = $this->input->post('othernames', TRUE);
			$data['HOTELTYPE'] = $this->input->post('hoteltype', TRUE);
			$data['CHECKIN_DATE'] = $this->input->post('checkindate', TRUE);
			$data['CHECKOUT_DATE'] = $this->input->post('checkoutdate', TRUE);
			$data['OCCUPANT'] = $this->input->post('occupants', TRUE);
			$data['LOCATION'] = $this->input->post('location', TRUE);
			$data['CATEGORY'] = $this->input->post('cat', TRUE);
			$data['EMAIL'] = $this->input->post('email', TRUE);
			$data['STATUS'] = 'BOOKED';
        return $data;
    }	
 function hotellist(){
		$data['title'] = 'Dasaac Travels Hotel List';
		 $data['hotellist'] = $this->get_custom_query_hotel()->result();
        $data['view_file'] = 'available';
        $this->loadView($data);
 
 }
 function submit(){
			$this->form_validation->set_rules('hotelname', 'Hotel Name','trim|required');
			$this->form_validation->set_rules('categoryname', 'Category','trim|required');
			$this->form_validation->set_rules('price', 'Price', 'trim');
			$this->form_validation->set_rules('address', 'Address','trim|required');
		if ($this->form_validation->run() === FALSE){
			$data1['msg'] = 'Please Provide a valid information';
		$this->hotellist($data);
		}else{
		$data = $this->get_data_submit_post();
		$this->_insert($data);
		$data1['msg'] = 'Hotel Successfully added';
		$this->hotellist($data1);
		}	
			
 }
 public function get_data_submit_post() {
			$data = array();
			$data['Name'] = $this->input->post('hotelname', TRUE);
			$data['cat_id'] = $this->input->post('categoryname', TRUE);
			$data['loc_id'] = $this->input->post('location', TRUE);
			$data['price'] = $this->input->post('price', TRUE);
			$data['address'] = $this->input->post('address', TRUE);
        return $data;
    }	
 function get_custom_query_hotel(){
	  $sql = " select s.Name ,s.price,s.address, c.location_name, b.category_name
		from hotelmanager s, category b, location c where s.cat_id = b.cat_id and s.Loc_id = c.loc_id ";
	 $query = $this->_custom_query($sql);
	 return $query;
	 
 }
 function addhotel(){
  $data['title'] = 'Dasaac Travels adding Hotel';
		$data['location'] = $this->get_custom_query_loc()->result();
		$data['category'] = $this->get_custom_query_cat()->result();
        $data['view_file'] = 'newhotel';
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
        $this->load->model('mdl_hotelmanager');
        $query = $this->mdl_hotelmanager->_custom_num_rows_query($mysql_query);
        return $query;
    }
function _insert($data){
	$this->load->model('mdl_hotelmanager');
    $this->mdl_hotelmanager->_insert($data);
}
function _insert_hotel($data){
	$this->load->model('mdl_hotelmanager');
    $this->mdl_hotelmanager->_insert_hotel($data);
}

      function _custom_query($mysql_query) {
        $this->load->model('mdl_hotelmanager');
        $query = $this->mdl_hotelmanager->_custom_query($mysql_query);
        return $query;
    }

    function get_where($id) {
        $this->load->model('mdl_hotelmanager');
        $query = $this->mdl_hotelmanager->get_where($id);
        return $query;
    }

}

?>
