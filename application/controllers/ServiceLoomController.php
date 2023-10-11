<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceLoomController extends CI_Controller {
 
 	function __construct() {
        parent::__construct();
        $this->load->library('upload');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->session->userdata('name') != '')
        {
         $this->load->view('loom_service',array('looms'=>$this->db->select('loom_id,Godown,Loom_Name')->get('loom_master')->result_object()));
        }
        else
        {
         redirect('AuthController/logout');
        }
       
    }

    public function show($id)
    {
        # code...
    }

    public function create()
    {

     
    }

    public function update()
    {
        # code...
    }

    public function delete($id){

    }
}
?>