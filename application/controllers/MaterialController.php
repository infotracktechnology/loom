<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MaterialController extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        if(!isset($this->session->name)){
            redirect(''.base_url().'AuthController/index');
        }
    }

    public function index(){
        $materials = $this->db->get('material_master')->result_array();
        $this->load->view('material',compact('materials'));
    }

    public function create(){
        $looms = $this->db->get('loom_master')->result_object();
        $this->load->view('material-create',compact('looms'));
    }


    public function store(){
        $data = $this->input->post();
        $this->db->insert('material_master',$data);
        redirect('material');
    }


    public function edit($id){
        $material = $this->db->get_where('material_master',array('material_id'=>$id))->row();
        $loom_material = $this->db->get_where('loom_material',array('material_id'=>$id))->result();
        $loom_ids = array_column($loom_material, 'loom_id');
        $looms = $this->db->get('loom_master')->result_object();
        $this->load->view('material-edit',compact('material','loom_ids','looms'));
    }


    public function update($id){
        $data = $this->input->post();
        $this->db->where('material_id',$id)->update('material_master',$data);
        redirect('material');
    }


    public function delete($id){
        
    }

   
}
?>