<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->logged_in();
        $this->load->model('roommodel');
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
		// print_r($_SESSION);
		$data['room'] = $this->roommodel->showdata();
		$data['empty'] = $this->roommodel->emptyroom();
		$data['bills'] = $this->invoicesmodel->notpay();
		$data['debt'] = $this->invoicesmodel->notpay_member();
		$this->load->view('home', $data);
	}
}
