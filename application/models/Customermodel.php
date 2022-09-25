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

    public function checkout()
    {
        $data1 = array(
            'roomtype_id' => $this->input->post('roomtype_id'),
            'room_number' => $this->input->post('room_number'),
            'room_details' => $this->input->post('room_details'),
            'room_status' => $this->input->post('room_status')
        );
        $this->db->where('room_id', $this->input->post('room_id'));
        $this->db->update('room', $data1);

        $data2 = array(
            'room_id' => $this->input->post('0'),
            'member_idcard' => $this->input->post('member_idcard'),
            'member_fullname' => $this->input->post('member_fullname'),
            'member_address' => $this->input->post('member_address'),
            'member_phone' => $this->input->post('member_phone')
        );
        $this->db->where('member_id', $this->input->post('member_id'));
        $this->db->update('member', $data2);

        // $data = array(
        //     'room_status' => $this->input->post('1')
        // );
        // $this->db->where('room_id', $this->input->post('room_id'));
        // $this->db->update('room', $data);

        // $this->db->delete('member', array('room_id' => $room_id));
    }

}

?>