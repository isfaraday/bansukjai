<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->logged_in();
		$this->load->model('roomtype');
		$this->load->model('roommodel');
        $this->load->model('customermodel');
		
	}

	private function logged_in() 
	{
        if(! $this->session->userdata('authenticated')) {
            redirect('users/login');
        }
    }

	public function index()
	{
		$data['query'] = $this->customermodel->showdata();
		$this->load->view('customer',$data);
	}

	public function edit($member_id)
	{
        $data['query'] = $this->customermodel->read($member_id);
		$this->load->view('editcustomer',$data);
	}

	public function editing()
	{
		$this->customermodel->editdata();
		redirect('customer','refresh');
	}

	public function out()
	{
		$this->customermodel->checkout();
		redirect('room','refresh');
	}

}
