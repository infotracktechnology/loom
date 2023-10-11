<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoomController extends CI_Controller {
 
 	function __construct() {
        parent::__construct();
        $this->load->model('material');
        if(!isset($this->session->name)){
            redirect(''.base_url().'AuthController/index');
        }
    }

    public function index(){
        $looms = $this->db->get('loom_master')->result_array();
        $this->load->view('loom',compact('looms'));
    }

    public function create(){
       $bobins = $this->material->fetchMaterial('Bobin','material_colour');
       $this->load->view('loom-create',compact('bobins'));
    }


    public function store(){
        $data = $this->input->post();
        $this->db->insert('loom_master',$data);
        $pid = $this->db->insert_id();
    
        foreach($this->input->post('bobbins') as $bobbin){
            $this->db->insert('loom_bobbins',array('loom_id'=>$pid,'material_id'=>$bobbin));
        }

        redirect('loom');
    }


    public function edit($id){
        $loom = $this->db->get_where('loom_master',array('loom_id'=>$id))->row();
        $bobbins = $this->material->fetchMaterial('Bobin','material_colour');
        $select_bobbins = array_column($this->db->get_where('loom_bobbins', array('loom_id' => $id))->result_array(), 'material_id');
    
        $this->load->view('loom-edit',compact('loom','bobbins','select_bobbins'));
    }


    public function update($id){
        $data = $this->input->post();
        $this->db->where('loom_id',$id);
        $this->db->update('loom_master',$data);

        $this->db->delete('loom_bobbins',array('loom_id'=>$id));

        foreach($this->input->post('bobbins') as $bobbin){
            $this->db->insert('loom_bobbins',array('loom_id'=>$id,'material_id'=>$bobbin));
        }

        redirect('loom');
    }


    public function delete($id){
        
    }

   

   

   
}
?>