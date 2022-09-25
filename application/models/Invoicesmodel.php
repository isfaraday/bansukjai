<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoicesmodel extends CI_Model
{
    public function showdata()
    {
        $this->db->order_by('room_number', 'ASC');
        $this->db->select('*');
        $this->db->from('room');
        $this->db->join('bills', 'room.room_id=bills.room_id');
        $this->db->join('member', 'member.member_id=bills.member_id');
        $query = $this->db->get();
        return $query->result();
    }

    function showroom()
    {
        $this->db->order_by('room_id', 'ASC');
        $query = $this->db->get('room');
        return $query->result();
    }

    function member($room_id)
    {
        $this->db->where('room_id', $room_id);
        $this->db->order_by('member_id', 'ASC');
        $query = $this->db->get('member');
        $output = '<option name="member_id" value="">เลือกลูกค้า...</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->member_id . '">' . $row->member_fullname . '</option>';
        }
        return $output;
    }

    function elect1($room_id)
    {
        $this->db->where('room_id', $room_id);
        $this->db->order_by('elect_create', 'ASC');
        $query = $this->db->get('elect');
        $output = '<option name="unit1" value="">มิเตอร์ไฟฟ้าจากวันที่ (เลขมิเตอร์)</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->elect_unit . '">' . $row->elect_create . ' (เลข : ' . $row->elect_unit . ')</option>';
        }
        return $output;
    }

    function elect2($room_id)
    {
        $this->db->where('room_id', $room_id);
        $this->db->order_by('elect_create', 'DESC');
        $query = $this->db->get('elect');
        $output = '<option name="unit2" value="">มิเตอร์ไฟฟ้าถึงวันที่ (เลขมิเตอร์)</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->elect_unit . '">' . $row->elect_create . ' (เลข : ' . $row->elect_unit . ')</option>';
        }
        return $output;
    }

    function rate($room_id)
    {
        $this->db->select('*');
        $this->db->from('room');
        $this->db->join('roomtype', 'room.roomtype_id=roomtype.roomtype_id');
        $this->db->where('room_id', $room_id);
        $query = $this->db->get('');
        $output = '<option name="bills_roomrate" value="">เลือกราคา...</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->roomtype_rate . '">' . $row->roomtype_rate . '</option>';
        }
        return $output;
    }

    public function adding()
    {
        // print_r($_POST);
        // exit();

        $data = array(
            'room_id' => $this->input->post('room_id'),
            'member_id' => $this->input->post('member_id'),
            'bills_roomrate' => $this->input->post('bills_roomrate'),
            'bills_water' => $this->input->post('bills_water'),
            'bills_electric' => $this->input->post('bills_electric'),
            'unit' => $this->input->post('unit'),
            'unit1' => $this->input->post('unit1'),
            'unit2' => $this->input->post('unit2'),
            'bills_result' => $this->input->post('bills_result'),
            'other' => $this->input->post('other'),
            'bills_other' => $this->input->post('bills_other'),
            'bills_status' => $this->input->post('bills_status'),
            'bills_pay' => $this->input->post('bills_pay'),
            'bills_create' => $this->input->post('bills_create')
        );
        $this->db->insert('bills', $data);
    }

    public function addings()
    {
        // print_r($_POST);
        // exit();

        $data = array(
            'room_id' => $this->input->post('room_id'),
            'member_id' => $this->input->post('member_id'),
            'bills_roomrate' => $this->input->post('bills_roomrate'),
            'bills_water' => $this->input->post('bills_water'),
            'bills_electric' => $this->input->post('bills_electric'),
            'unit' => $this->input->post('unit'),
            'unit1' => $this->input->post('unit1'),
            'unit2' => $this->input->post('unit2'),
            'bills_result' => $this->input->post('bills_result'),
            'other' => $this->input->post('other'),
            'bills_other' => $this->input->post('bills_other'),
            'bills_status' => $this->input->post('bills_status'),
            'bills_pay' => $this->input->post('bills_pay'),
            'bills_create' => $this->input->post('bills_create'),
            'pay_date' => $this->input->post('pay_date')
        );
        $this->db->where('bills_id', $this->input->post('bills_id'));
        $this->db->update('bills', $data);
    }

    public function billdata($bills_id)
    {
        $this->db->select('*');
        $this->db->from('room');
        $this->db->join('bills', 'room.room_id=bills.room_id');
        $this->db->join('roomtype', 'room.roomtype_id=roomtype.roomtype_id');
        $this->db->join('member', 'member.member_id=bills.member_id');
        $this->db->where('bills_id', $bills_id);
        $query = $this->db->get('');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function deldata($bills_id)
    {
        $this->db->delete('bills', array('bills_id' => $bills_id));
    }

    public function notpay()
    {
        $this->db->order_by('room_number', 'ASC');
        $this->db->select('*');
        $this->db->from('room');
        $this->db->join('bills', 'room.room_id=bills.room_id');
        $this->db->join('member', 'member.member_id=bills.member_id');
        $this->db->where('bills_status', '0');
        $query = $this->db->get();
        return $query->result();
    }

    public function notpay_member()
    {
        $t =$_SESSION['username'];

        $this->db->order_by('room_number', 'ASC');
        $this->db->select('*');
        $this->db->from('room');
        $this->db->join('bills', 'room.room_id=bills.room_id');
        $this->db->join('member', 'member.member_id=bills.member_id');
        $this->db->where('bills_status', '0');
        $this->db->where('room_number', $t);
        $query = $this->db->get();
        return $query->result();
    }

}
