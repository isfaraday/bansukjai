<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customermodel extends CI_Model
{
    public function showdata()
    {
        $this->db->order_by('member_id', 'ASC');
        $this->db->select('member.*,room.room_number'); 
        $this->db->from('member');
        $this->db->join('room', 'room.room_id=member.room_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function read($member_id)
    {
        $this->db->select('*');
        $this->db->from('member');
        $this->db->where('member_id', $member_id);
        $query = $this->db->get('');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function editdata()
    {
        $data = array(
            'member_idcard' => $this->input->post('member_idcard'),
            'member_fullname' => $this->input->post('member_fullname'),
            'member_address' => $this->input->post('member_address'),
            'member_phone' => $this->input->post('member_phone')
        );
        $this->db->where('member_id', $this->input->post('member_id'));
        $this->db->update('member', $data);
    }

    public function checkout($member_id)
    {
        // print_r($_POST);
        // exit();

        $data = array(
            'room_status' => $this->input->post('')
        );
        $this->db->where('room_id', $this->input->post('room_id'));
        $this->db->update('room', $data);

        $this->db->delete('member', array('member_id' => $member_id));
    }

}

?>