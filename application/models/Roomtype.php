<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roomtype extends CI_Model
{
    function showdata()
    {
        $this->db->order_by('roomtype_id', 'ASC');
        $query = $this->db->get('roomtype');
        return $query->result();
    }
}

?>