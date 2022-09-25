<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->logged_in();
		$this->load->model('roomtype');
        $this->load->model('roommodel');
		
	}

	private function logged_in() 
	{
        if(! $this->session->userdata('authenticated')) {
            redirect('users/login');
        }
    }

	public function index()
	{
		// print_r($_SESSION);
        $data['query'] = $this->roommodel->showdata();
		$this->load->view('room',$data);
	}

    public function add()
	{
        $data['roomtype'] = $this->roomtype->showdata();
		$this->load->view('addroom',$data);
	}

	public function type()
	{
		$this->load->view('roomtype');
	}

    public function adding()
	{
		$this->roommodel->adding();
		redirect('room','refresh');
	}

	public function addtype()
	{
		$this->roommodel->addtype();
		redirect('room','refresh');
	}

    public function edit($room_id)
	{
        $data['roomtype'] = $this->roomtype->showdata();
        $data['query'] = $this->roommodel->read($room_id);
		$this->load->view('editroom',$data);
	}
    
    public function editing()
	{
		$this->roommodel->editdata();
		redirect('room','refresh');
	}

    public function del($room_id)
	{
		$this->roommodel->deldata($room_id);
		redirect('room','refresh');
	}

    public function booking($room_id)
	{
        $data['query'] = $this->roommodel->booking($room_id);
		$this->load->view('booking',$data);
	}

    public function addbooking()
	{
		$this->roommodel->addbooking();
		redirect('room','refresh');
	}

	public function bookings($member_id)
	{
        $data['query'] = $this->roommodel->bookings($member_id);
		$this->load->view('bookings',$data);
	}

	public function elect($room_id)
	{
        $data['query'] = $this->roommodel->elect($room_id);
		$this->load->view('elect',$data);
	}

	public function addelect()
	{
		$this->roommodel->addelect();
		redirect('room','refresh');
	}

	public function elects($room_id)
	{
        $data['query'] = $this->roommodel->elects($room_id);
		$this->load->view('elects',$data);
	}

	public function delelect($elect_id)
	{
		$this->roommodel->delelect($elect_id);
		redirect('room','refresh');
	}

	public function lease($member_id)
	{
        $data['query'] = $this->roommodel->bookings($member_id);
		$this->load->view('lease',$data);
	}

}
