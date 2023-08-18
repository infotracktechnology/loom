<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoomController extends CI_Controller {
 
 	function __construct() {
        parent::__construct();
    }

    public function index()
    {
        if($this->session->userdata('name') != '')
        {
         $this->load->view('loom_master',array('looms' => $this->db->get('loom_master')->result()));
        }
        else
        {
         redirect('AuthController/logout');
        }
       
    }

    public function show($id)
    {
        $this->output->set_content_type('application/json')->set_output(json_encode($this->db->get_where('loom_master',array('loom_id' => $id))->row()));
    }

    public function create()
    {
        $this->db->insert('loom_master',$this->input->post());
    }

    public function update()
    {
       $data = ['Status' => $this->input->post('Status'),'Loom_No'=>$this->input->post('Loom_No'),'Godown'=>$this->input->post('Godown'),'Loom_Size'=>$this->input->post('Loom_Size'),'Pannel_Board'=>$this->input->post('Pannel_Board'),'Cost'=>$this->input->post('Cost'),'Custodian'=>$this->input->post('Custodian'),'Year_of_Purchase'=>$this->input->post('Year_of_Purchase')];
       $this->db->where('loom_id',$this->input->post('loom_id'))->update('loom_master',$data);
    }

    public function delete($id){

    }
}
?>