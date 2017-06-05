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
class Jobs extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('Form_validation');
    }

    function index() {
        $data['title'] = 'Dasaac Travels Available jobs';
		$data['alljobs'] = $this->get_custom_query_jobs()->result();
        $data['view_file'] = 'index';
        $this->loadView($data);
    }
	function get_custom_query(){
		$sql = "SELECT * FROM hotel ORDER by BOOKING_DATE DESC";
		$query = $this->_custom_query($sql);
		return $query;
	}
    function loadView($data) {
        $data['module'] = 'jobs';
        echo Modules::run('templ/templContent', $data);
    }
	
	 function loadadminView($data) {
        $data['module'] = 'jobs';
        echo Modules::run('templ/templCon', $data);
    }
	 function joblist(){
	 $this->get_job_list($data);
 }
 
 function get_job_list($data){
		$data['title'] = 'Dasaac Travels jobs';
		$data['jobs'] = $this->get_custom_query_jobs()->result();
        $data['view_file'] = 'newjobs';	 
		$data['module'] = 'jobs';
   echo Modules::run('templ/templCon', $data);
 }

# GET DATA FROM JOB POST
	public function get_data_job_post() {
			$data = array();
			$data['job_id'] = $this->input->post('jobid', TRUE);
			$data['job_title'] = $this->input->post('jobtitle', TRUE);
			$data['cat_id'] = $this->input->post('categoryname', TRUE);
			$data['loc_id'] = $this->input->post('location', TRUE);
			$data['job_desc'] = $this->input->post('desc', TRUE);
        return $data;
    }	
 function apply($id){
		$data['title'] = 'Dasaac Travels job application';
		$data['single'] = $this->get_single_custom_query_jobs($id)->result();
        $data['view_file'] = 'jobdescrptionPage';
        $this->loadView($data);
 
 } 
 function application ($id){
	 $query = $this->get_where($id)->result();
	 foreach($query as $row){
		$data['jobtitle']= $row->job_title;
	 }
	 $data['view_file'] = 'applicationForm';
        $this->loadView($data);
 }
 
  function delete($id) {
        $value = "";
        $query = $this->get_where($id)->result();
        $this->_delete($id);
        foreach ($query as $row) {
            $value = $row->job_id;
        }
       $process = $data['msg'] = " $value, deleted sucessfully";
        //$this->log($process);
        $this->joblist($data);
    }
 /* function post($id){
	  $query = $this->get_single_custom_query_jobs($id)->result();
        foreach ($query as $row) {
            $data['job_id'] = $row->job_id;
			  $data['job_title'] = $row->job_title;
			    $data['job_desc'] = $row->job_desc;
				  $data['location_name'] = $row->location_name;
				  $data['cat_name'] = $row->cat_name;
        }
		
		$data['output'] = '<div class="col-md-3">
                <div class="hpanel">
                    <div class="panel-body">
                        <div class="text-center">
                            <h2 class="m-b-xs">bbbb</h2>
                            <p class="font-bold text-success">Lorem ipsum</p>
                            <div class="m">
                                <i class="pe-7s-science fa-5x"></i>
                            </div>
                            <p class="small">
                                Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                            <button class="btn btn-success btn-sm">Action button</button>
                        </div>
                    </div>
                </div>
</div>' ;
$data['view_file'] = 'index';
 $data['module'] = 'jobs';
        echo Modules::run('templ/templContent', $data);
 } */
 function submit(){
			$this->form_validation->set_rules('jobid', 'Jobs Id','trim|required');
			$this->form_validation->set_rules('jobtitle', 'Jobs Title','trim|required');
			$this->form_validation->set_rules('location', 'Location', 'trim');
			$this->form_validation->set_rules('desc', 'Description','trim|required');
		if ($this->form_validation->run() === FALSE){
			$data1['msg'] = 'Please Provide a valid information';
			
		$this->get_job_list($data1);
		}else{
		$data = $this->get_data_job_post();
		$this->_insert($data);
		$data1['msg'] = '<div class="boxed-wrapper">Job Successfully added</div>';
		$this->get_job_list($data1);
		}	
			
 }

  function available(){
  $data['title'] = 'Dasaac Travels Available jobs';
		$data['jobs'] = $this->get_custom_query_jobs()->result();
        $data['view_file'] = 'newjobs';
        $this->loadadminView($data);

 } 
  function newjob(){
  $data['title'] = 'Dasaac Travels adding Hotel';
		$data['location'] = $this->get_custom_query_loc()->result();
		$data['category'] = $this->get_custom_query_cat()->result();
        $data['view_file'] = 'form';
        $this->loadadminView($data);

 }
 function get_custom_query_loc(){
	 $sql = " select * from location";
	 $query = $this->_custom_query($sql);
	 return $query;
}
 function get_custom_query_cat(){
	 $sql = " select * from job_category";
	 $query = $this->_custom_query($sql);
	 return $query;
}
 function get_custom_query_jobs(){
	  $sql = " select s.id,s.job_id ,s.job_title,substr(s.job_desc,1,70) 'job_desc', c.location_name, b.cat_name
		from job s, job_category b, location c where s.cat_id = b.cat_id and s.Loc_id = c.loc_id order by date_posted desc limit 8";
	 $query = $this->_custom_query($sql);
	 return $query;
	 
 }
 function get_single_custom_query_jobs($id){
	  $sql = " select s.id,s.job_id ,s.job_title,s.job_desc, c.location_name, b.cat_name
		from job s, job_category b, location c where s.cat_id = b.cat_id and s.Loc_id = c.loc_id and s.id =$id ";
	 $query = $this->_custom_query($sql);
	 return $query;
	 
 }
    function _custom_num_rows_query($mysql_query) {
        $this->load->model('mdl_jobs');
        $query = $this->mdl_jobs->_custom_num_rows_query($mysql_query);
        return $query;
    }
	
function _insert($data){
	$this->load->model('mdl_jobs');
    $this->mdl_jobs->_insert($data);
}
function _delete($data){
	$this->load->model('mdl_jobs');
    $this->mdl_jobs->_delete($data);
}
function _insert_hotel($data){
	$this->load->model('mdl_jobs');
    $this->mdl_jobs->_insert_hotel($data);
}

      function _custom_query($mysql_query) {
        $this->load->model('mdl_jobs');
        $query = $this->mdl_jobs->_custom_query($mysql_query);
        return $query;
    }

    function get_where($id) {
        $this->load->model('mdl_jobs');
        $query = $this->mdl_jobs->get_where($id);
        return $query;
    }

}

?>
