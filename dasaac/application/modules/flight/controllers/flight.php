<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Flight extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('mdl_flight');
    }

   function index() {
        $data['title'] = 'Welcome Dasaac Travels';
		$data['view_file'] = 'index';
        $this->loadView($data);
        //$this->load->view('index', $data);
    }
    function loadView($data) {
        $data['module'] = 'flight';
        echo Modules::run('templ/templContent', $data);
    }

    function career() {
       $data['title'] = 'Choose your career with Dasaac Travels.';
        $data['view_file'] = 'career';
        $this->loadView($data);
    }

    public function contactus() {
		$data['title'] = 'Get in touch with  Dasaac Travels';
        $data['view_file'] = 'contactus';
        $this->loadView($data);
    }

    public function jobs() {
		
		$data['title'] = ' Job Openings at Dasaac Travels';
        $data['view_file'] = 'jobs';
        $this->loadView($data);
    }

    public function brochure() {
		$data['title'] = ' Dasaac Travels';
        $data['view_file'] = 'brochure';
        $this->loadView($data);
    }

    public function aboutus() {
		$data['title'] = ' Dasaac Travels';
        $data['view_file'] = 'aboutus';
        $this->loadView($data);
    }
	
	 public function admin() {
		$data['title'] = ' Dasaac Travels administrator panel';
       $this->load->view('admin', $data);
    }
	public function login() {
		$this->form_validation->set_rules('username', 'Username','trim|required');
			$this->form_validation->set_rules('pwd', 'Password','trim|required');
			if($this->form_validation->run()){
				$username = $this->input->post('username', TRUE);
				$password = $this->input->post('pwd', TRUE);
				if($this->check_user($username)){
					if($this->password_check($password)){
						$this->user_session($username);
						if (isset($_SESSION['logged_in'])&&($_SESSION['status']==='0')) {
							
							redirect('/dashboard/');
						}
						}else{
							$data['msg']= 'password is incorrect';
						$this->load->view('admin', $data);
						}
				
				}else{
					$data['msg']= 'Username is incorrect';
					$this->load->view('admin', $data);
				}
		
			}else{
				$data['msg']= 'Please fill in your details';
				$this->load->view('admin', $data);
		}
	}
	
	
	
	function bookflight(){
			$this->form_validation->set_rules('sname', 'Surname','trim|required');
			$this->form_validation->set_rules('othernames', 'Other Names','trim|required');
			$this->form_validation->set_rules('title', 'Title', 'trim');
			$this->form_validation->set_rules('leavefrom', 'Leaving from','trim|required');
			$this->form_validation->set_rules('destination', 'Destination', 'trim');
			$this->form_validation->set_rules('bookingdate', 'Date of Departure','trim');
			$this->form_validation->set_rules('Arrivaldate', 'Date of Arrival','trim');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('flightclass','Flight Class','trim');
		if ($this->form_validation->run() === FALSE){
		$data['msg'] = 'Please Provide a valid information';
		$this->index($data);
		}else{
		$data = $this->get_data_flight_post();
		$this->_insert($data);
		$data['msg'] = 'thank you for doing business with us! we will get back to you shortly';
		$this->index($data);
		
		}
	}
# GET DATA FROM bookingflight POST
	public function get_data_flight_post() {
			$data = array();
			$data['TITLE'] = $this->input->post('title', TRUE);
			$data['SURNAME'] = $this->input->post('sname', TRUE);
			$data['DEPARTURE'] = $this->input->post('leavefrom', TRUE);
			$data['FLIGHTTYPE'] = $this->input->post('flighttype', TRUE);
			$data['DEPARTURE_DATE'] = $this->input->post('bookingdate', TRUE);
			$data['ADULT'] = $this->input->post('adult', TRUE);
			$data['CHILDREN'] = $this->input->post('children', TRUE);
			$data['INFANT'] = $this->input->post('infant', TRUE);
			$data['EMAIL'] = $this->input->post('email', TRUE);
			$data['OTHERNAME'] = $this->input->post('othernames', TRUE);
			$data['DESTINATION'] = $this->input->post('destination', TRUE);
			$data['FLIGHTCLASS'] = $this->input->post('flightclass', TRUE);
			$data['ARRIVAL_DATE'] = $this->input->post('arrivaldate', TRUE);
        return $data;
    }
function contactform(){
			
			$this->form_validation->set_rules('firstname', 'First Name','trim|required');
			$this->form_validation->set_rules('lastname', 'Last Name','trim|required');
			$this->form_validation->set_rules('sex', 'Sex', 'trim');
			$this->form_validation->set_rules('phone', 'Phone number','trim|required');
			$this->form_validation->set_rules('email', 'Email Address', 'trim');
			
	if ($this->form_validation->run() ===FALSE){
		$data['msg'] = "Thank you for contacting us Please fill all field correctly";
		redirect('flight/contactus');
		
	}else{
		$data = $this->get_data_contactform_post();
		$this->contactform_insert($data);
		$data['msg'] = "Thank you for contacting us we will get back to you shortly";
		
		redirect('flight/contactus');
		
	}
	
}

	public function get_data_contactform_post() {
			$data = array();
			$data['NATURE'] = $this->input->post('enquiry', TRUE);
			$data['SEX'] = $this->input->post('sex', TRUE);
			$data['FIRSTNAME'] = $this->input->post('firstname', TRUE);
			$data['LASTNAME'] = $this->input->post('lastname', TRUE);
			$data['EMAIL'] = $this->input->post('email', TRUE);
			$data['PHONE'] = $this->input->post('phone', TRUE);
			$data['MESSAGE'] = $this->input->post('message', TRUE);
			$data['REQUEST_DATE'] = date('y-m-d h:i:s');
        return $data;
    }














    public function get_data_flight_db() {
        $query = $this->getAll()->result();
        foreach ($query as $row) {
            $data['agent_id'] = $row->AGENT_ID;
            $data['msisdn'] = $row->MSISDN;
            $data['account_id'] = $row->ACCOUNT_ID;
            $data['EMAIL'] = $row->EMAIL;
            $data['status'] = $row->STATUS;
            //$data['createdBy'] = user;
        }
        return $data;
    }

    function delete() {
        $id = $this->uri->segment(3);
        $data['STATUS'] = '0';
        $value = "";
        $query = $this->get_where($id)->result();
        $this->_update($id, $data);
        foreach ($query as $row) {
            $value = $row->MSISDN . '  ' . $row->ACCOUNT_ID . ' ' . $row->EMAIL;
        }
        $process = $data['msg'] = "$value Deleted Sucessfully";
        $this->log($process);
        $this->agentlist();
    }

    function cancel() {
        // redirect to record list page
        redirect('staff/index/', 'refresh');
    }
function check_user($username){
		$query = "select * from DASAAC_USER where username = '$username'";
		$result = $this->_custom_num_rows_query($query);
        if ($result > 0) {
            return true;
        }
	}
	function password_check($password){
		$pwd = md5($password);
		$query = "select * from DASAAC_USER where PASSWORD = '$pwd'";
		$result = $this->_custom_num_rows_query($query);
        if ($result > 0) {
            return true;
        }
	}
	function user_session($username) {
        $query = $this->get_where_custom_user(username,$username)->result();
        foreach ($query as $row) {
            $newdata = array(
                'username' => $row->USERNAME,
				'userid' => $row->USERID,
				'status' => $row->STATUS,
                'logged_in' => TRUE
            );
        }
		/* print_r($newdata);
		die(); */
        $this->session->set_userdata($newdata);
    }
	
    function log($process) {
        $process_user = $_SESSION['username'];
        $process = "AGENT  : " . $process;
        $url = $_SERVER['REMOTE_ADDR'];
        $query = "INSERT INTO DATA_ADJUST_LOG (process,process_user,urlaccessed)VALUES ('$process','$process_user','$url')";
        $this->_custom_query($query);
    }

    function getAll() {
        $this->load->model('mdl_flight');
        $query = $this->mdl_flight->getAll();
        return $query;
    }

    function get($order_by) {
        $this->load->model('mdl_flight');
        $query = $this->mdl_flight->get($order_by);
        return $query;
    }

    function get_with_limit($limit, $offset, $order_by) {
        $this->load->model('mdl_flight');
        $query = $this->mdl_flight->get_with_limit($limit, $offset, $order_by);
        return $query;
    }

    function get_where($id) {
        $this->load->model('mdl_flight');
        $query = $this->mdl_flight->get_where($id);
        return $query;
    }

    function get_where_custom($col, $value) {
        $this->load->model('mdl_flight');
        $query = $this->mdl_flight->get_where_custom($col, $value);
        return $query;
    }
function get_where_custom_user($col, $value) {
        $this->load->model('mdl_flight');
        $query = $this->mdl_flight->get_where_custom_user($col, $value);
        return $query;
    }
    function _insert($data) {
        $this->load->model('mdl_flight');
        $this->mdl_flight->_insert($data);
    }
	
	function contactform_insert($data){
		  $this->load->model('mdl_flight');
        $this->mdl_flight->contactform_insert($data);
		
	}
function hotel_insert($data) {
        $this->load->model('mdl_flight');
        $this->mdl_flight->hotel_insert($data);
    }
    function _update($id, $data) {
        $this->load->model('mdl_flight');
        $this->mdl_flight->_update($id, $data);
    }

    function _delete($id) {
        $this->load->model('mdl_flight');
        $this->mdl_flight->_delete($id);
    }

    function count_where($column, $value) {
        $this->load->model('mdl_flight');
        $count = $this->mdl_flight->count_where($column, $value);
        return $count;
    }

    function get_max() {
        $this->load->model('mdl_flight');
        $max_id = $this->mdl_flight->get_max();
        return $max_id;
    }

    function _custom_num_rows_query($mysql_query) {
        $this->load->model('mdl_flight');
        $query = $this->mdl_flight->_custom_num_rows_query($mysql_query);
        return $query;
    }

    function _custom_query($mysql_query) {
        $this->load->model('mdl_flight');
        $query = $this->mdl_flight->_custom_query($mysql_query);
        return $query;
    }

}

?>