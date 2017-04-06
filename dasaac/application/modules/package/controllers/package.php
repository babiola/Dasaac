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
class Package extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('Form_validation');
    }

    function index() {
        $data['title'] = 'Dasaac Travels Package manager';
        $data['view_file'] = 'index';
        $this->loadView($data);
    }
	
    function loadView($data) {
        $data['module'] = 'package';
        echo Modules::run('templ/templCon', $data);
    }

    function booked() {
 $data['title'] = 'Dasaac Travels Package history';
        $data['view_file'] = 'booked';
        $this->loadView($data);
       
    }
	  function addpackage() {
 $data['title'] = 'Dasaac Travels Package history';
        $data['view_file'] = 'addpackage';
        $this->loadView($data);
       
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
    function check_user($username) {
        /* $query = "select * from DATA_ADJUST_USER where USERNAME = '$username'  and STATUS = '0'";
        $result = $this->_custom_num_rows_query($query);
        if ($result > 0) {
            return true;
        } */
		return false;
    }

    function logout() {
       // $process ="Successfully logged out";
        //$this->log($process);
       // session_destroy();
        redirect('/auth/');
    }

    function user_session($username) {
        $query = $this->get_where($username)->result();
        foreach ($query as $row) {
            $newdata = array(
                'usertype' => $row->USERTYPE,
                'username' => $row->USERNAME,
				'userid' => $row->USERID,
				'status' => $row->STATUS,
                'logged_in' => TRUE
            );
        }
        $this->session->set_userdata($newdata);
    }

    function _custom_num_rows_query($mysql_query) {
        $this->load->model('mdl_auth');
        $query = $this->mdl_auth->_custom_num_rows_query($mysql_query);
        return $query;
    }

      function _custom_query($mysql_query) {
        $this->load->model('mdl_auth');
        $query = $this->mdl_auth->_custom_query($mysql_query);
        return $query;
    }

    function get_where($id) {
        $this->load->model('mdl_auth');
        $query = $this->mdl_auth->get_where($id);
        return $query;
    }

}

?>
