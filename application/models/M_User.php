<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_User extends CI_Model
{
    public function get_all_user()
    {
        $query = $this->db->get('user')->result_array();
        return $query;
    }
    public function get_all_obat()
    {
        $query = $this->db->get('obat')->result_array();
        return $query;
    }
    // public function get_obat(){
    //     $query = $this->db->get_where('keranjang_user')->result_array()
    // }

    public function delete_user($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
    public function delete_obat($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('obat');
    }
    public function delete_keranjang($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('keranjang_user');
    }

    public function update_role($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function update_stok($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function insert_obat($data)
    {
        $this->db->insert('obat', $data);
    }

    public function get_keranjang_user()
    {
        $query = "SELECT `user`.`id`,`user`.`name`, `keranjang_user`.`user_id` FROM `user` JOIN `keranjang_obat`
                    ON `user`.`id` = `keranjang_user`.`user_id`";

        return $this->db->query($query)->result_array();
    }
    public function insert_obat_user($data)
    {
        $this->db->insert('keranjang_user', $data);
    }

    public function edit_role($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function edit_stok($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
