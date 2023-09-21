<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoomController extends CI_Controller {
 
 	function __construct() {
        parent::__construct();
        if(!isset($this->session->name)){
            redirect(''.base_url().'AuthController/index');
        }
    }

    public function index(){
        $looms = $this->db->get('loom_master')->result_array();
        $this->load->view('loom',compact('looms'));
    }

    public function create(){
        $products = $this->db->get('product_master')->result_object();
        $this->load->view('loom-create',compact('products'));
    }


    public function store(){
        $data = $this->input->post();
        $this->db->insert('loom_master',$data);
        redirect('loom');
    }


    public function edit($id){
        $loom = $this->db->get_where('loom_master',array('loom_id'=>$id))->row();
        $products = $this->db->get('product_master')->result_object();
        $this->load->view('loom-edit',compact('loom','products'));
    }


    public function update($id){
        $data = $this->input->post();
        $this->db->where('loom_id',$id);
        $this->db->update('loom_master',$data);
        redirect('loom');
    }


    public function delete($id){
        
    }

   

   

   
}
?>