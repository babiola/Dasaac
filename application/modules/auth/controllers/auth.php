<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('mdl_auth');
    }

   function index() {
        $data['title'] = ' Dasaac Travels and Tour administrator panel';
		$data['view_file'] = 'admin';
      $this->load->view('admin', $data);
    }

    function loadView($data) {
        $data['module'] = 'auth';
        echo Modules::run('templ/templContent', $data);
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
							$data['msg']= '<div class="alert alert-danger"><i class="fa fa-warning"></i> password is incorrect</div>';
						$this->load->view('admin', $data);
						}
				
				}else{
					$data['msg']= '<div class="alert alert-danger"><i class="fa fa-warning"></i> Username is incorrect</div>';
					$this->load->view('admin', $data);
				}
		
			}else{
				$data['msg']= '<div class="alert alert-danger"><i class="fa fa-warning"></i>Please fill in your details</div>';
				$this->load->view('admin', $data);
		}
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
        $this->session->set_userdata($newdata);
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
        $this->load->model('mdl_auth');
        $query = $this->mdl_auth->getAll();
        return $query;
    }

    function get($order_by) {
        $this->load->model('mdl_auth');
        $query = $this->mdl_auth->get($order_by);
        return $query;
    }

    function get_with_limit($limit, $offset, $order_by) {
        $this->load->model('mdl_auth');
        $query = $this->mdl_auth->get_with_limit($limit, $offset, $order_by);
        return $query;
    }

    function get_where($id) {
        $this->load->model('mdl_auth');
        $query = $this->mdl_auth->get_where($id);
        return $query;
    }

    function get_where_custom($col, $value) {
        $this->load->model('mdl_auth');
        $query = $this->mdl_auth->get_where_custom($col, $value);
        return $query;
    }
function get_where_custom_user($col, $value) {
        $this->load->model('mdl_auth');
        $query = $this->mdl_auth->get_where_custom_user($col, $value);
        return $query;
    }
    function _insert($data) {
        $this->load->model('mdl_auth');
        $this->mdl_auth->_insert($data);
    }
	
	function contactform_insert($data){
		  $this->load->model('mdl_auth');
        $this->mdl_auth->contactform_insert($data);
		
	}
function hotel_insert($data) {
        $this->load->model('mdl_auth');
        $this->mdl_auth->hotel_insert($data);
    }
    function _update($id, $data) {
        $this->load->model('mdl_auth');
        $this->mdl_auth->_update($id, $data);
    }

    function _delete($id) {
        $this->load->model('mdl_auth');
        $this->mdl_auth->_delete($id);
    }

    function count_where($column, $value) {
        $this->load->model('mdl_auth');
        $count = $this->mdl_auth->count_where($column, $value);
        return $count;
    }

    function get_max() {
        $this->load->model('mdl_auth');
        $max_id = $this->mdl_auth->get_max();
        return $max_id;
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

}

?>