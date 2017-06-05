<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mdl_Auth extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_table() {
        $table = "flightReservation";
        return $table;
    } 
	function get_contact_table(){
		$table = "contact";
        return $table;
	}
     function get_hotel_table() {
        $table = "hotel";
        return $table;
    } 
	function get_table_user() {
        $table = "DASAAC_USER";
        return $table;
    } 
	function contactform_insert($data){
		 $table = $this->get_contact_table();
        $this->db->insert($table, $data);
	}
    function getAll() {
        $table = $this->get_table();
        $query = $this->db->get($table);
        return $query;
    }
	function getAll_limit($limit, $start) {
        $table = $this->get_table();
		$this->db->limit($limit, $start);
        $query = $this->db->get($table);
        return $query;
    }
	
    function get($order_by) {
        $table = $this->get_table();
        $this->db->order_by($order_by);
        $query = $this->db->get($table);
        return $query;
    }

    function get_with_limit($limit, $offset, $order_by) {
        $table = $this->get_table();
        $this->db->limit($limit, $offset);
        $this->db->order_by($order_by);
        $query = $this->db->get($table);
        return $query;
    }

    function get_where($id) {
        $table = $this->get_table();
        $this->db->where('ID', $id);
        $query = $this->db->get($table);
        return $query;
    }
	function get_where_($id) {
        $table = $this->get_table();
        $this->db->where('STATUS', $id);
        $query = $this->db->get($table);
        return $query;
    }

    function get_where_custom($col, $value) {
        $table = $this->get_table();
        $this->db->where($col, $value);
        $query = $this->db->get($table);
        return $query;
    }

    function _insert($data) {
        $table = $this->get_table();
        $this->db->insert($table, $data);
    }
 function hotel_insert($data) {
        $table = $this->get_hotel_table();
        $this->db->insert($table, $data);
    }
    function _update($id, $data) {
        $table = $this->get_table();
        $this->db->where('ID', $id);
        $this->db->update($table, $data);
    }

    function _delete($id) {
        $table = $this->get_table();
        $this->db->where('ID', $id);
        $this->db->delete($table);
    }

    function count_where($column, $value) {
        $table = $this->get_table();
        $this->db->where($column, $value);
        $query = $this->db->get($table);
        $num_rows = $query->num_rows();
        echo 'ssss'. $num_rows;
        return $num_rows;
    }
	function get_where_custom_user($col, $value) {
        $table = $this->get_table_user();
        $this->db->where($col, $value);
        $query = $this->db->get($table);
        return $query;
    }
	

    function count_all() {
        $table = $this->get_table();
        $query = $this->db->get($table);
        $num_rows = $query->num_rows();
        return $num_rows;
    }

    function get_max() {
        $table = $this->get_table();
        $this->db->select_max('AGENT_ID');
        $query = $this->db->get($table);
        $row = $query->row();
        $id = $row->id;
        return $id;
    }
     
     
     function _custom_query($mysql_query) {
        $query = $this->db->query($mysql_query);
        return $query;
    }

    function _custom_num_rows_query($mysql_query) {
        $query = $this->db->query($mysql_query);
        $num_rows = $query->num_rows();
        return $num_rows;
    }

}
