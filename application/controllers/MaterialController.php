<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MaterialController extends CI_Controller {
 
 	function __construct() {
        parent::__construct();
    }

    public function index()
    {
        if($this->session->userdata('name') != '')
        {
         $this->load->view('material',array('materials' => $this->db->get('material_master')->result()));
        }
        else
        {
            redirect('AuthController/logout');
        }
    }

    public function show($id)
    {
      $this->output->set_content_type('application/json')->set_output(json_encode($this->db->get_where('material_master',array('material_id' => $id))->row()));
    }

    public function create()
    {
       $this->db->insert('material_master',$this->input->post());
       return $this->db->insert_id();
    }

    public function update()
    {
        $data = array('material_name' => $this->input->post('material_name'),'count'=>$this->input->post('count'),'	material_category'=>$this->input->post('material_category'),'material_colour'=>$this->input->post('material_colour'),'material_colour_code'=>$this->input->post('material_colour_code'),'measurement'=>$this->input->post('measurement'),'opening_stock'=>$this->input->post('opening_stock'),'warp_ends'=>$this->input->post('warp_ends'),'bobbin_ends'=>$this->input->post('bobbin_ends'));
        $this->db->where('material_id',$this->input->post('material_id'))->update('material_master',$data);
    }

    public function delete($id){

    }
}
?>