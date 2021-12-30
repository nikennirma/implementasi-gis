<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_sd extends CI_Model {

    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tbl_sd');
        $this->db->order_by('id_sd', 'desc');
        return $this->db->get()->result();
        
        
    }

    public function input($data)
    {
        $this->db->insert('tbl_sd', $data);
        
    }

    public function detail($id_sd)
    {
        $this->db->select('*');
        $this->db->from('tbl_sd');
        $this->db->where('id_sd', $id_sd);
        
        return $this->db->get()->row();
        
    }

    public function edit($data)
    {
        $this->db->where('id_sd', $data['id_sd']);
        $this->db->update('tbl_sd', $data);
        
        
    }

    public function delete($data)
    {
        $this->db->where('id_sd', $data['id_sd']);
        $this->db->delete('tbl_sd', $data);
        
        
    }
}

/* End of file M_sd.php */
