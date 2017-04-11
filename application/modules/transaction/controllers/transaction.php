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
 * @transaction     Auth_Ldap
 * @subtransaction  auth demo
 * @license     GNU Lesser General Public License
 */
class Transaction extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('Form_validation');
    }

    function index() {
        $data['title'] = 'Dasaac Travels transaction manager';
		// $data['transaction'] = $this->get_custom_query()->result();
        $data['view_file'] = 'reportlist';
        $this->loadView($data);
    }
	function get_custom_query(){
		$sql = "SELECT * FROM transaction ORDER by REQUEST_DATE DESC";
		$query = $this->_custom_query($sql);
		return $query;
	}
    function loadView($data) {
        $data['module'] = 'transaction';
        echo Modules::run('templ/templCon', $data);
    }
	
 function transactionlist($data){
	 $this->get_transaction_list($data);
 }
 
 
     public function reportlist() {
        $this->get_report_list();
    }

    public function get_report_list($data) {
    $data['title'] = 'List of reports';
   // $data['record'] = $this->getAll($config["per_page"], $page)->result();
	//$data['report'] = $this->getAllreport()->result();
	$sql = "select * from DATA_ADJUST_report where STATUS = '1'";
			$data['report'] = $this->_custom_query($sql)->result();
    $data['view_file'] = 'reportlist';
    $data['module'] = 'report';
    echo Modules::run('templ/templContent', $data);
    }
	 public function fetchReport(){
		$report = $_POST['reportType'];
		 $start = $_POST['s_date'];
		 $end = $_POST['e_date'];
		 
		
		  
		 if ($report === 'flightreservation'){
				$sql = "select * from flightreservation where BOOKING_DATE 
		between '$start' and '$end'ORDER BY BOOKING_DATE DESC ";
		$data['spooled'] = $this->_custom_query($sql)->result();
		$data['output'] = "  <div class='row'>
        <div class='col-lg-12'>
            <div class='hpanel'>
                <div class='panel-body'>
                    <table id='tabs' class='table table-striped table-bordered table-hover tabs' width='100%' style='font-size:12px;'>
				<thead>
					<tr>
						<th>TITLE</th>
                            <th>SURNAME</th>
                            <th>EMAIL</th>
                            <th>TYPE</th>
                            <th>CLASS</th>
							<th>DEPARTURE DATE</th>
                            <th>ARRIVAL DATE</th>
                            <th>FROM</th>
                            <th>TO</th>
                            <th>ADULT</th>
							<th>CHILDREN</th>
                            <th>INFANT</th>
							<th>BOOKING DATE</th>
					</tr>
				</thead>
				<tbody>";
		foreach($data['spooled'] as $spool) {
			$data['output'] .= '
				<tr>
					<td>'.$spool->TITLE.'</td>
					<td>'.$spool->SURNAME.' '.$spool->OTHERNAME.'</td>
					<td>'.$spool->EMAIL.'</td>
					<td>'.$spool->FLIGHTTYPE.'</td>
					<td>'.$spool->FLIGHTCLASS.'</td>
					<td>'.$spool->DEPARTURE_DATE.'</td>
					<td>'.$spool->ARRIVAL_DATE.'</td>
					<td>'.$spool->DEPARTURE.'</td>
					<td>'.$spool->DESTINATION.'</td>
					<td>'.$spool->ADULT.'</td>
					<td>'.$spool->CHILDREN.'</td>
					<td>'.$spool->INFANT.'</td>
					<td>'.$spool->BOOKING_DATE.'</td>
				</tr>';
		}
		$data['output'] .= "
					</tbody>
				</table>
				</div>"; 
			 
		 }elseif($report === 'hotel'){
			 	$sql = "select * from hotel where BOOKING_DATE between '$start' and '$end'ORDER BY BOOKING_DATE DESC ";
		
		$data['spooled'] = $this->_custom_query($sql)->result();
		$data['output'] = " <div class='row'>
        <div class='col-lg-12'>
            <div class='hpanel'>
                <div class='panel-body'>
                    <table id='tabs' class='table table-striped table-bordered table-hover tabs' width='100%' style='font-size:12px;'>
				<thead>
					 <tr>
                           
                            <th>SURNAME</th>
                            <th>EMAIL</th>
                            <th>TYPE</th>
                            <th>CHECKIN DATE</th>
							<th>CHECKOUT DATE</th>
                            <th>OCCUPANT</th>
                            <th>LOCATION</th>
                            <th>CATEGORY</th>
							<th>BOOKING DATE</th>
								<th>STATUS</th>
                        </tr>
				</thead>
				<tbody>";
		foreach($data['spooled'] as $spool) {
			$data['output'] .= '
				<tr>
				
							<td>'.$spool->SURNAME.' '.$spool->OTHERNAME.'</td>
							<td>'.$spool->EMAIL.'</td>
							<td>'.$spool->HOTELTYPE.'</td>
							<td>'.$spool->CHECKIN_DATE.'</td>
							<td>'.$spool->CHECKOUT_DATE.'</td>
							<td>'.$spool->OCCUPANT.'</td>
							<td>'.$spool->LOCATION.'</td>
							<td>'.$spool->CATEGORY.'</td>
							<td>'.$spool->BOOKING_DATE.'</td>
							<td>'.$spool->STATUS.'</td>
				</tr>';
		}
		$data['output'] .= "
					</tbody>
				</table>
				</div>";
		 }elseif($report === 'package'){
			 	$sql = "select * from package WHERE BOOKING_DATE between '$start' and '$end'ORDER BY BOOKING_DATE DESC ";
		$data['spooled'] = $this->_custom_query($sql)->result();
		$data['output'] = " <div class='row'>
        <div class='col-lg-12'>
            <div class='hpanel'>
                <div class='panel-body'>
                    <table id='tabs' class='table table-striped table-bordered table-hover tabs' width='100%' style='font-size:12px;'>
				<thead>
					 <tr>
                           
                            <th>SURNAME</th>
                            <th>EMAIL</th>
                            <th>TYPE</th>
                            <th>CHECKIN DATE</th>
							<th>CHECKOUT DATE</th>
                            <th>OCCUPANT</th>
                            <th>LOCATION</th>
                            <th>CATEGORY</th>
							<th>BOOKING DATE</th>
								<th>STATUS</th>
                        </tr>
				</thead>
				<tbody>";
		foreach($data['spooled'] as $spool) {
			$data['output'] .= '
				<tr>
				
							<td>'.$spool->SURNAME.' '.$spool->OTHERNAME.'</td>
							<td>'.$spool->EMAIL.'</td>
							<td>'.$spool->HOTELTYPE.'</td>
							<td>'.$spool->CHECKIN_DATE.'</td>
							<td>'.$spool->CHECKOUT_DATE.'</td>
							<td>'.$spool->OCCUPANT.'</td>
							<td>'.$spool->LOCATION.'</td>
							<td>'.$spool->CATEGORY.'</td>
							<td>'.$spool->BOOKING_DATE.'</td>
							<td>'.$spool->STATUS.'</td>
				</tr>';
		}
		$data['output'] .= "
					</tbody>
				</table>
				</div>";
		 }
		 else{
			 
			 	$sql = "select * from deals where BOOKING_DATE between '$start' and '$end'ORDER BY BOOKING_DATE DESC ";
		$data['spooled'] = $this->_custom_query($sql)->result();
		$data['output'] = " <div class='row'>
        <div class='col-lg-12'>
            <div class='hpanel'>
                <div class='panel-body'>
                    <table id='tabs' class='table table-striped table-bordered table-hover tabs' width='100%' style='font-size:12px;'>
				<thead>
					 <tr>
                           
                            <th>SURNAME</th>
                            <th>EMAIL</th>
                            <th>TYPE</th>
                            <th>CHECKIN DATE</th>
							<th>CHECKOUT DATE</th>
                            <th>OCCUPANT</th>
                            <th>LOCATION</th>
                            <th>CATEGORY</th>
							<th>BOOKING DATE</th>
								<th>STATUS</th>
                        </tr>
				</thead>
				<tbody>";
		foreach($data['spooled'] as $spool) {
			$data['output'] .= '
				<tr>
				
							<td>'.$spool->SURNAME.' '.$spool->OTHERNAME.'</td>
							<td>'.$spool->EMAIL.'</td>
							<td>'.$spool->HOTELTYPE.'</td>
							<td>'.$spool->CHECKIN_DATE.'</td>
							<td>'.$spool->CHECKOUT_DATE.'</td>
							<td>'.$spool->OCCUPANT.'</td>
							<td>'.$spool->LOCATION.'</td>
							<td>'.$spool->CATEGORY.'</td>
							<td>'.$spool->BOOKING_DATE.'</td>
							<td>'.$spool->STATUS.'</td>
				</tr>';
		}
		$data['output'] .= "
					</tbody>
				</table>
				</div>";
		 }
	
		$this->load->view('outputReport', $data);
	 }
 
 function get_transaction_list($data){
		$data['title'] = 'Dasaac Travels transaction manager';
		$data['transaction'] = $this->get_custom_query()->result();
        $data['view_file'] = 'index';	 
		$data['module'] = 'transaction';
   echo Modules::run('templ/templCon', $data);
 }
 function delete($id) {
        $value = "";
        $query = $this->get_where($id)->result();
        $this->_delete($id);
        foreach ($query as $row) {
            $value = $row->transaction_ID;
        }
       $process = $data['msg'] = " $value, deleted sucessfully";
        //$this->log($process);
        $this->transactionlist($data);
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
         //$this->session->set_flashdata("email_sent","Error in sending Email."); 
			 }
			
			$this->transactionlist($data);
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
        $this->load->model('mdl_transaction');
        $query = $this->mdl_transaction->_custom_num_rows_query($mysql_query);
        return $query;
    }
function _insert($data){
	$this->load->model('mdl_transaction');
    $this->mdl_transaction->_insert($data);
}
function _delete($data){
	$this->load->model('mdl_transaction');
    $this->mdl_transaction->_delete($data);
}
function _insert_hotel($data){
	$this->load->model('mdl_transaction');
    $this->mdl_transaction->_insert_hotel($data);
}

      function _custom_query($mysql_query) {
        $this->load->model('mdl_transaction');
        $query = $this->mdl_transaction->_custom_query($mysql_query);
        return $query;
    }

    function get_where($id) {
        $this->load->model('mdl_transaction');
        $query = $this->mdl_transaction->get_where($id);
        return $query;
    }

}

?>
