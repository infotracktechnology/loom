<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller {
 
 	function __construct() {
        parent::__construct();
    }

    public function index()
    {
        if($this->session->userdata('name') != '')
        {
         $this->load->view('product',array('products' => $this->db->get('product_master')->result()));
        }
        else
        {
         redirect('AuthController/logout');
        }
    }

    public function show($id)
    {
        $this->output->set_content_type('application/json')->set_output(json_encode($this->db->get_where('product_master',array('id' => $id))->row()));
    }

    public function create()
    {
        $this->db->insert('product_master',$this->input->post());
        return $this->db->insert_id();
    }

    public function update()
    {
        $data = array('product_name' =>$this->input->post('product_name'),'warp_ends'=>$this->input->post('warp_ends'),'reed'=>$this->input->post('reed'),'pick'=>$this->input->post('pick'),'coolie'=>$this->input->post('coolie'),'warp_yarn'=>$this->input->post('warp_yarn'),'size'=>$this->input->post('size'),'bobbin_ends'=>$this->input->post('bobbin_ends'),'bobbin_color'=>$this->input->post('bobbin_color'),'color_code'=>$this->input->post('color_code'),'weft_yarn'=>$this->input->post('weft_yarn'));
        $this->db->where('id',$this->input->post('id'))->update('product_master',$data);
    }

    public function delete($id){

    }
}
?>