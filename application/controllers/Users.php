<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('usersmodel');
    }

    private function logged_in()
    {
        if (!$this->session->userdata('authenticated')) {
            redirect('users/login');
        }
    }

    public function index()
    {
        $data['query'] = $this->usersmodel->showdata();
        $this->load->view('users', $data);
    }

    // public function login()
    // {
    //     $this->load->library('form_validation');
    //     $this->load->view('login');
    // }

    public function login()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        } else {
            $username = $this->security->xss_clean($this->input->post('username'));
            $password = $this->security->xss_clean($this->input->post('password'));

            $user = $this->usersmodel->login($username, $password);

            if ($user) {
                $userdata = array(
                    'admin_id' => $user->admin_id,
                    'username' => $user->username,
                    'admin_fullname' => $user->admin_fullname,
                    'admin_permission' => $user->admin_permission,
                    'authenticated' => TRUE
                );

                $this->session->set_userdata($userdata);
                redirect('home');
            } else {
                $this->session->set_flashdata('error', 'Invalid email or password');
                redirect('users/login');
            }

            // if ($this->usersmodel->login($username, $password)) {
            //     $session_data = array(
            //         'username' => $username
            //     );
            //     $this->session->set_userdata($session_data);
            //     redirect('home');
            // } else {
            //     $this->session->set_flashdata('error', 'Invalid Username and Password');
            //     redirect('users/login');
            // }
        }
    }

    // public function logout()
    // {
    //     $this->session->unset_userdata('username');
    //     redirect(base_url() . 'users/login');
    // }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('users/login');
    }

    public function add()
    {
        $this->load->view('addusers');
    }

    public function adding()
    {
        $this->usersmodel->adding();
        redirect('users', 'refresh');
    }

    public function edit($admin_id)
    {
        $data['query'] = $this->usersmodel->read($admin_id);
        $this->load->view('edituser', $data);
    }

    public function editing()
    {
        $this->usersmodel->editdata();
        redirect('users', 'refresh');
    }

    public function del($admin_id)
    {
        $this->usersmodel->deldata($admin_id);
        redirect('users', 'refresh');
    }
}
