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
        $data['title'] = 'Welcome Dasaac Travels and Tour';
		$data['view_file'] = 'index';
		$process ='home page view';
		$this->log($process);
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
		$process ='career page view';
		$this->log($process);
        $this->loadView($data);
    }

    public function contactus() {
		$data['title'] = 'Get in touch with  Dasaac Travels';
        $data['view_file'] = 'contactus';
		$process ='contactus page view';
		$this->log($process);
        $this->loadView($data);
    }

    public function jobs() {
		
		$data['title'] = ' Job Openings at Dasaac Travels';
        $data['view_file'] = 'jobs';
		$process ='jobs page view';
		$this->log($process);
        $this->loadView($data);
    }

    public function aboutus() {
		$data['title'] = ' Dasaac Travels';
        $data['view_file'] = 'aboutus';
		$process ='aboutus page view';
		$this->log($process);
        $this->loadView($data);
    }
	
	function bookflight(){
			$this->form_validation->set_rules('sname', 'Surname','trim|required');
			$this->form_validation->set_rules('othernames', 'Other Names','trim');
			$this->form_validation->set_rules('title', 'Title', 'trim');
			$this->form_validation->set_rules('leavefrom', 'Leaving from','trim|required');
			$this->form_validation->set_rules('destination', 'Destination', 'trim|required');
			$this->form_validation->set_rules('bookingdate', 'Date of Departure','trim|required');
			$this->form_validation->set_rules('arrivaldate', 'Date of Arrival','trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('flightclass','Flight Class','trim|required');
		if ($this->form_validation->run() === FALSE){
		$data['msg'] = '<div class="alert alert-warning"><i class="fa fa-warning"></i>Please Provide a valid information</div>';
		$data['title'] = 'Welcome Dasaac Travels';
		$data['view_file'] = 'index';
        $this->loadView($data);
		}else{
		$data = $this->get_data_flight_post();
		$this->_insert($data);
		$process = $data['msg'] = '<div class="alert alert-success"><i class="fa fa-warning"></i>thank you for doing business with us! we will get back to you shortly</div>';
		$this->log($process);
		$data['title'] = 'Welcome Dasaac Travels';
		$data['view_file'] = 'index';
        $this->loadView($data);
		
		}
	}
	function allcareers(){
		$data['title'] = 'Dasaac Travels and Tour all career';
		$data['view_file'] = 'careerView';
        $this->loadView($data);
	}
	function faq(){
		$data['title'] = 'Dasaac Travels Frequently asked questions';
		$data['view_file'] = 'faqView';
        $this->loadView($data);
		
	}
	function sitemap(){
	$data['title'] = 'Dasaac Travels and Tour Site Map';
		$data['view_file'] = 'SitemapView';
        $this->loadView($data);	
		
	}
	function terms(){
		$data['title'] = 'Dasaac Travels and Tour Terms and Conditions';
		$data['view_file'] = 'termsView';
        $this->loadView($data);
		
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
			$data['PHONE'] = $this->input->post('phnno', TRUE);
			
        return $data;
    }
function contactform(){
			
			$this->form_validation->set_rules('firstname', 'First Name','trim|required');
			$this->form_validation->set_rules('lastname', 'Last Name','trim|required');
			$this->form_validation->set_rules('sex', 'Sex', 'trim');
			$this->form_validation->set_rules('phone', 'Phone number','trim|required');
			$this->form_validation->set_rules('email', 'Email Address', 'trim');
			
	if ($this->form_validation->run() ===FALSE){
		$data['msg'] = '<div class="alert alert-success"><i class="fa fa-warning"></i>Thank you for contacting us Please fill all field correctly</div>';
		redirect('flight/contactus',$data);
		
	}else{
		$data = $this->get_data_contactform_post();
		$this->contactform_insert($data);
		$data['msg'] =  '<div class="alert alert-success"><i class="fa fa-warning"></i>Thank you for contacting us we will get back to you shortly</div>';
		
		redirect('flight/contactus',$data);
		
	}
	
}
function subscrible(){
	if($this->form_validation->set_rules('newsletter', 'SUBSCRIBE TO OUR NEWSLETTER', 'trim|required') === FALSE){
		$data['msg'] =' <div class="alert alert-danger"><i class="fa fa-warning"></i>Please enter email to subscrible</div>';
		$data['view_file'] = 'index';
		$this->loadView($data);
	}else{
		$newsletter = $this->input->post('newsletter', TRUE);
		 $sql = "insert into newsletter(EMAIL)values('$newsletter')";
		 $this->_custom_query($sql);
		 $data['msg'] =  '<div class="alert alert-success"><i class="fa fa-warning"></i>Thank you for subscribing to our news letter us we will get back to you shortly</div>';
		/* $data['view_file'] = 'index';
		$this->loadView($data); */
		redirect('flight');
	}
	
	
}
	public function get_data_contactform_post() {
			$data = array();
			$data['NATURE'] = $this->input->post('enquiry', TRUE);
			$data['SEX'] = $this->input->post('sex', TRUE);
			$data['FIRSTNAME'] = $this->input->post('firstname', TRUE);
			$data['LASTNAME'] = $this->input->post('lastname', TRUE);
			$data['OTHERNAME'] = $this->input->post('othernames', TRUE);
			$data['EMAIL'] = $this->input->post('email', TRUE);
			$data['PHONE'] = $this->input->post('phone', TRUE);
			$data['MESSAGE'] = $this->input->post('message', TRUE);
			$data['REQUEST_DATE'] = date('y-m-d h:i:s');
        return $data;
    }
    function cancel() {
        // redirect to record list page
        redirect('staff/index/', 'refresh');
    }
 	// error log
    function log($process) {
        $process_user = $_SESSION['username'];
		$url = $_SERVER['REMOTE_ADDR'];
		$logged_date = date('Y-m-d h:i:s');
        $query = "INSERT INTO TS_LOG(process,process_user,urlaccessed,logged_date)VALUES ('$process','$process_user','$url','$logged_date')";
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