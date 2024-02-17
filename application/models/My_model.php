<?php
class My_model extends CI_model
{

    function insert($tname,$data){
        $this->db->insert($tname,$data);
    }

    function select_where($tname){
        return $this->db->get($tname)->result_array();
    }

    function select_where2($tname,$cond){
        return $this->db->where($cond)->get($tname)->result_array();    }
}

?>