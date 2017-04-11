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
class Dashboard extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('Form_validation');
    }

    function index() {
        $data['title'] = 'Dasaac Administrator Panel.';
		$data = $this->count_all();
        $data['view_file'] = 'index';
        $this->loadView($data);
    }
	function count_all(){
		$data['flight'] = $this->count_flight();
      $data['hotel'] = $this->count_hotel();
		$data['complaint'] = $this->count_complaint();
    $data['enquiry'] = $this->count_enquiry();
	//$data['vacation'] = $this->count_vacation();
      $data['jobs'] = $this->count_jobs();
	
	return $data;
	}
    function loadView($data) {
        $data['module'] = 'dashboard';
        echo Modules::run('templ/templCon', $data);
    }
	
	
function profile(){
	$data['view_file'] = 'profile';
        $this->loadView($data);
}
 
    function logout() {
       session_destroy();
        redirect('/flight/');
    }
	
	function count_flight(){
		$dated = DATE('y-m-d');
		$query= "select * from flightreservation "; //where DATE_FORMAT(BOOKING_DATE,'y-m-d') = '$dated'";
		$num_rows = $this->_custom_num_rows_query($query);
		return $num_rows;
	}
	
	function count_complaint(){
		$dated = DATE('y-m-d');
		$query= "select * from contact where nature = 'complaint' order by request_date desc "; //where DATE_FORMAT(BOOKING_DATE,'y-m-d') = '$dated'";
		$num_rows = $this->_custom_num_rows_query($query);
		return $num_rows;
	}
	function count_enquiry(){
		$dated = DATE('y-m-d');
		$query= "select * from contact where nature = 'enquiry' order by request_date desc  "; //where DATE_FORMAT(BOOKING_DATE,'y-m-d') = '$dated'";
		$num_rows = $this->_custom_num_rows_query($query);
		return $num_rows;
	}
	function count_vacation(){
		$dated = DATE('y-m-d');
		$query= "select * from vacation "; //where DATE_FORMAT(BOOKING_DATE,'y-m-d') = '$dated'";
		$num_rows = $this->_custom_num_rows_query($query);
		return $num_rows;
	}
	function count_jobs(){
		$dated = DATE('y-m-d');
		$query= "select * from job "; //where DATE_FORMAT(BOOKING_DATE,'y-m-d') = '$dated'";
		$num_rows = $this->_custom_num_rows_query($query);
		return $num_rows;
	}

	function count_hotel(){
	
		$dated = DATE('y-m-d');
		$query= "select * from hotel"; //where DATE_FORMAT(BOOKING_DATE,'y-m-d') = '$dated'";
		$num_rows = $this->_custom_num_rows_query($query);
		return $num_rows;
	}
function count_package(){
		$dated = DATE('y-m-d');
		$query= "select * from package";//  where DATE_FORMAT(BOOKING_DATE,'y-m-d') = '$dated'";
		$num_rows = $this->_custom_num_rows_query($query);
		return $num_rows;
	}
	function count_deals(){
		$dated = DATE('y-m-d');
		$query= "select * from deals";// where DATE_FORMAT(BOOKING_DATE,'y-m-d') = '$dated'";
		$num_rows = $this->_custom_num_rows_query($query);
		return $num_rows;
	}
    function _custom_num_rows_query($mysql_query) {
        $this->load->model('mdl_dashboard');
        $num_rows = $this->mdl_dashboard->_custom_num_rows_query($mysql_query);
        return $num_rows;
    }

      function _custom_query($mysql_query) {
        $this->load->model('mdl_dashboard');
        $query = $this->mdl_dashboard->_custom_query($mysql_query);
        return $query;
    }

    function get_where($id) {
        $this->load->model('mdl_dashboard');
        $query = $this->mdl_dashboard->get_where($id);
        return $query;
    }

}

?>
