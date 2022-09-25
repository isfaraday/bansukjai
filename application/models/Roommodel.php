<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roommodel extends CI_Model
{
    public function adding()
    {
        // print_r($_POST);
        // exit();

        $data = array(
            'roomtype_id' => $this->input->post('roomtype_id'),
            'room_number' => $this->input->post('room_number'),
            'room_details' => $this->input->post('room_details'),
            'room_status' => $this->input->post('room_status')
        );
        $this->db->insert('room', $data);
    }

    public function addtype()
    {
        // print_r($_POST);
        // exit();

        $data = array(
            'roomtype_name' => $this->input->post('roomtype_name'),
            'roomtype_rate' => $this->input->post('roomtype_rate')
        );
        $this->db->insert('roomtype', $data);
    }

    public function showdata()
    {
        $this->db->order_by('room.room_number', 'ASC');
        $this->db->select('room.*,roomtype.*,member.member_fullname'); 
        $this->db->from('room');
        $this->db->join('roomtype', 'room.roomtype_id=roomtype.roomtype_id');
        $this->db->join('member', 'room.room_id=member.room_id','left');
        $query = $this->db->get();
        return $query->result();
    }

    public function read($room_id)
    {
        $this->db->select('*');
        $this->db->from('room');
        $this->db->join('roomtype', 'room.roomtype_id=roomtype.roomtype_id');
        $this->db->where('room_id', $room_id);
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
            'roomtype_id' => $this->input->post('roomtype_id'),
            'room_number' => $this->input->post('room_number'),
            'room_details' => $this->input->post('room_details'),
            'room_status' => $this->input->post('room_status')
        );
        $this->db->where('room_id', $this->input->post('room_id'));
        $this->db->update('room', $data);
    }

    public function deldata($room_id)
    {
        $this->db->delete('room', array('room_id' => $room_id));
        
    }

    public function booking($room_id)
    {
        $this->db->select('*');
        $this->db->from('room');
        $this->db->where('room_id', $room_id);
        $query = $this->db->get('');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function addbooking()
    {
        // print_r($_POST);
        // exit();
        
        $data1 = array(
            'roomtype_id' => $this->input->post('roomtype_id'),
            'room_status' => $this->input->post('room_status')
        );
        $this->db->where('room_id', $this->input->post('room_id'));
        $this->db->update('room', $data1);

        $data2 = array(
            'room_id' => $this->input->post('room_id'),
            'member_idcard' => $this->input->post('member_idcard'),
            'member_fullname' => $this->input->post('member_fullname'),
            'member_address' => $this->input->post('member_address'),
            'member_phone' => $this->input->post('member_phone'),
            'member_create' => $this->input->post('member_create')
        );
        $this->db->insert('member', $data2);
    }

    public function showcustomer()
    {
        $this->db->order_by('member_id', 'ASC');
        $this->db->select('member.*,room.room_number'); 
        $this->db->from('member');
        $this->db->join('room', 'room.room_id=member.room_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function bookings($member_id)
    {
        // $this->db->select('room.*,member.member_id,member.member_idcard,member.member_fullname,member.member_address,member.member_phone,member.member_create');

        $this->db->select('member.*,room.*,roomtype.*');
        $this->db->from('member');
        $this->db->join('room', 'room.room_id=member.room_id');
        $this->db->join('roomtype', 'room.roomtype_id=roomtype.roomtype_id');
        $this->db->where('member_id', $member_id);
        $query = $this->db->get('');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function elect($room_id)
    {
        $this->db->order_by('elect_create', 'DESC');
        $this->db->select('room.*,elect.elect_id,elect.elect_unit,elect.elect_create');
        $this->db->from('room');
        $this->db->join('elect', 'room.room_id=elect.room_id', 'left');
        $this->db->where('room.room_id', $room_id);
        $query = $this->db->get('');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function addelect()
    {
        // print_r($_POST);
        // exit();

        $data = array(
            'room_id' => $this->input->post('room_id'),
            'elect_unit' => $this->input->post('elect_unit'),
            'elect_create' => $this->input->post('elect_create')
        );
        $this->db->insert('elect', $data);
    }

    public function elects($room_id)
    {
        $this->db->order_by('elect_create', 'DESC');
        $this->db->select('room.room_id,room.room_number,elect.elect_id,elect.elect_unit,elect.elect_create');
        $this->db->from('elect');
        $this->db->join('room', 'room.room_id=elect.room_id');
        $this->db->where('room.room_id', $room_id);
        $query = $this->db->get('');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function delelect($elect_id)
    {
        $this->db->delete('elect', array('elect_id' => $elect_id));
    }

    public function emptyroom()
    {
        $this->db->order_by('room_number', 'ASC');
        $this->db->select('*'); 
        $this->db->from('room');
        $this->db->join('roomtype', 'room.roomtype_id=roomtype.roomtype_id');
        $this->db->where('room_status', '1');
        $query = $this->db->get();
        return $query->result();
    }
}

?>