<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usersmodel extends CI_Model
{
    function showdata()
    {
        $this->db->order_by('admin_id', 'ASC');
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('admin_permission', 2);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $this->db->where('active', 1);
        $query = $this->db->get('admin');

        if($query->num_rows() == 1) {
            return $query->row();
        }
        return false;
    }

    public function adding()
    {
        // print_r($_POST);
        // exit();
        $data = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'admin_fullname' => $this->input->post('admin_fullname'),
            'admin_permission' => $this->input->post('admin_permission'),
            'active' => $this->input->post('active')
        );
        $this->db->insert('admin', $data);
    }

    public function read($admin_id)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('admin_id', $admin_id);
        $query = $this->db->get('');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function editdata()
    {
        // print_r($_POST);
        // exit();
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'admin_fullname' => $this->input->post('admin_fullname'),
            'admin_permission' => $this->input->post('admin_permission'),
            'active' => $this->input->post('active')
        );
        $this->db->where('admin_id', $this->input->post('admin_id'));
        $this->db->update('admin', $data);
    }

    public function deldata($admin_id)
    {
        $this->db->delete('admin', array('admin_id' => $admin_id));
    }
}

?>