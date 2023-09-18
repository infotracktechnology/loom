<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

 
 	function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('admin_login');
	}

   public function logout()
   {
  
    $this->session->sess_destroy();
    redirect(''.base_url());
   }
   
public function dashboard()
{
  $username = $this->input->post('username');
  $user = $this->db->get_where('users', ['name' => $username])->row_array();
  $password = md5($this->input->post('password'));
  if (count($user) > 0 && $user['password'] == $password) {
     $this->session->set_userdata($user);
     redirect(''.base_url().'AuthController/main_dashboard');
  } else {
     $this->session->set_flashdata('msg',"Invalid Username and Password!");
     redirect(''.base_url().'AuthController/index');
  }
}

public function main_dashboard()
{
    $name = $this->session->userdata('name');
    $type = $this->session->userdata('type');
    if (!empty($name) && $type === 'admin') {
        $this->load->view('dashboard');
    }
    else
    {
    redirect(base_url('AuthController/index'));
    }
}
 

   
	 
}