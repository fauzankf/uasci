<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Produk extends CI_Model
{

    public function tampil()
    {
        return $this->db->get('produk');
    }

    public function save($data)
    {
        $this->db->insert('produk', $data);
    }

    public function getid($id)
    {
        $param = array('id' => $id);
        return $this->db->get_where('produk', $param);
    }
}
