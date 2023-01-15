<?php

class Dashboard_model extends CI_model{
    public function getAllMasterLocation(){
        return $this->db->get('tb_master_location')->result_array();
    }
}