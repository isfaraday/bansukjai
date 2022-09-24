<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoices extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->logged_in();
		$this->load->model('invoicesmodel');
	}

	private function logged_in() 
	{
        if(! $this->session->userdata('authenticated')) {
            redirect('users/login');
        }
    }

	public function index()
	{
		$data['query'] = $this->invoicesmodel->showdata();
		$this->load->view('invoices', $data);
	}

	public function add()
	{
		$data['query'] = $this->invoicesmodel->showroom();
		$this->load->view('invoice', $data);
	}

	function member()
	{
		if ($this->input->post('room_id')) {
			echo $this->invoicesmodel->member($this->input->post('room_id'));
		}
	}

	function elect1()
	{
		if ($this->input->post('room_id')) {
			echo $this->invoicesmodel->elect1($this->input->post('room_id'));
		}
	}

	function elect2()
	{
		if ($this->input->post('room_id')) {
			echo $this->invoicesmodel->elect2($this->input->post('room_id'));
		}
	}

	function rate()
	{
		if ($this->input->post('room_id')) {
			echo $this->invoicesmodel->rate($this->input->post('room_id'));
		}
	}

	public function bill($bills_id)
	{
		$data['query'] = $this->invoicesmodel->billdata($bills_id);
		$this->load->view('bill',$data);
	}

	public function adding()
	{
		$this->invoicesmodel->adding();
		redirect('invoices','refresh');
	}

	public function addings()
	{
		$this->invoicesmodel->addings();
		redirect('invoices','refresh');
	}

	public function del($bills_id)
	{
		$this->invoicesmodel->deldata($bills_id);
		redirect('invoices','refresh');
	}

	public function receipt($bills_id)
	{
		$data['query'] = $this->invoicesmodel->billdata($bills_id);
		$this->load->view('receipt',$data);
	}

	public function bills($bills_id)
	{
		$data['query'] = $this->invoicesmodel->billdata($bills_id);
		$this->load->view('bills',$data);
	}
}
