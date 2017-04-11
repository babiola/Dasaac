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
        $data['title'] = 'Dasaac Administrator Panel.';
        $data['view_file'] = 'index';
        $this->loadView($data);
    }
	
    function loadView($data) {
        $data['module'] = 'deals';
        echo Modules::run('templ/templCon', $data);
    }

 
	
function getDataFromPost(){
	$data = array();
			$data['FIRSTNAME'] = $this->input->post('fname', TRUE);
			$data['LASTNAME'] = $this->input->post('lname', TRUE);
			$data['EMAIL'] = $this->input->post('email', TRUE);
			$data['ACCOUNT'] = $this->input->post('account', TRUE);
			$data['PASSWORD'] = $this->input->post('pwd', TRUE);
        return $data;
}
   function flight(){
	  $data['flight'] = $this->getAll_flight()->result();
	   $data['view_file'] = 'home';
        $this->loadView($data);
   }

    function getAll_flight() {
		$sql = "SELECT * FROM flightreservation where DATE_FORMAT(BOOKING_DATE, '%Y-%m-%d') = DATE_FORMAT(sysdate(), '%Y-%m-%d')ORDER BY DATE_FORMAT(BOOKING_DATE, '%Y-%m-%d') DESC";
		$query = $this->_custom_query($sql);
		return $query;
    }
function manage(){
	$data['title'] = 'Dasaac Deals Management';
	$data['view_file'] = 'dealform';
	$this->loadView($data);
}
  
    function _custom_num_rows_query($mysql_query) {
        $this->load->model('mdl_deals');
        $query = $this->mdl_deals->_custom_num_rows_query($mysql_query);
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

}

?>
