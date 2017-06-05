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
class Contact extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('Form_validation');
    }

    function index() {
        $data['title'] = 'Dasaac Travels Package manager';
		 $data['contact'] = $this->get_custom_query()->result();
        $data['view_file'] = 'index';
        $this->loadView($data);
    }
	function get_custom_query(){
		$sql = "SELECT * FROM contact ORDER by REQUEST_DATE DESC";
		$query = $this->_custom_query($sql);
		return $query;
	}
    function loadView($data) {
        $data['module'] = 'contact';
        echo Modules::run('templ/templCon', $data);
    }
	
 function contactlist($data){
	 $this->get_contact_list($data);
 }
 
 function get_contact_list($data){
		$data['title'] = 'Dasaac Travels Package manager';
		$data['contact'] = $this->get_custom_query()->result();
        $data['view_file'] = 'index';	 
		$data['module'] = 'contact';
   echo Modules::run('templ/templCon', $data);
 }
 function delete($id) {
        $value = "";
        $query = $this->get_where($id)->result();
        $this->_delete($id);
        foreach ($query as $row) {
            $value = $row->CONTACT_ID;
        }
       $process = $data['msg'] = " $value, deleted sucessfully";
        $this->log($process);
        $this->contactlist($data);
    }
function reply($id){
	  $query = $this->get_where($id)->result();
        foreach ($query as $row) {
            $data['email'] = $row->EMAIL;
			$data['nature'] = $row->NATURE;
        }
			$data['title'] = 'Dasaac Travels Hotel List';
			$data['view_file'] = 'form';
        $this->loadView($data);
}
    function sendMails(){
		//$nature = $this->input->post('nature', TRUE);
			$to_email = "abiola.bello@hotmail.com";//$this->input->post('email', TRUE);
			$subject = $this->input->post('subject', TRUE);
			$message = $this->input->post('message', TRUE);
			$from_email = "bayl53@gmail.com";
			$this->mailer($from_email,$to_email,$subject,$message);
			 if($this->mailer($from_email,$to_email,$subject,$message)) {
				 $process = $data['msg'] = " $email_sent, replied sucessfully";
        // $this->session->set_flashdata("email_sent","Email sent successfully."); 
			 }else {
				 $process = $data['msg'] = " $email_sent, replied not sucessfully";
				 $this->log($process);
         //$this->session->set_flashdata("email_sent","Error in sending Email."); 
			 }
			
			$this->contactlist($data);
	}
	 function sendMail()
    {
       $config = Array(
      'protocol' => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_port' => 465,
      'smtp_user' => 'bayl53@gmail.com', 
      'smtp_pass' => 'xxx', 
      'mailtype' => 'html',
      'charset' => 'iso-8859-1',
      'wordwrap' => TRUE
    );
	}
	
	function mailer($from_email,$to_email,$subject,$message){
		 $this->load->library('email',$config); 
		  $this->email->from($from_email, 'Dasaac Travels and Tour'); 
         $this->email->to($to_email);
         $this->email->subject($subject); 
         $this->email->message($message);
		 $this->email->send();
 //Send mail 
 	 
		
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
    function _custom_num_rows_query($mysql_query) {
        $this->load->model('mdl_contact');
        $query = $this->mdl_contact->_custom_num_rows_query($mysql_query);
        return $query;
    }
function _insert($data){
	$this->load->model('mdl_contact');
    $this->mdl_contact->_insert($data);
}
function _delete($data){
	$this->load->model('mdl_contact');
    $this->mdl_contact->_delete($data);
}
function _insert_hotel($data){
	$this->load->model('mdl_contact');
    $this->mdl_contact->_insert_hotel($data);
}

      function _custom_query($mysql_query) {
        $this->load->model('mdl_contact');
        $query = $this->mdl_contact->_custom_query($mysql_query);
        return $query;
    }

    function get_where($id) {
        $this->load->model('mdl_contact');
        $query = $this->mdl_contact->get_where($id);
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
