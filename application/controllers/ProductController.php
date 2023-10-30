<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->model('Material');
        if(!isset($this->session->name)){
            redirect(''.base_url().'AuthController/index');
        }
    }

    public function index(){
        $products = $this->db->get('product_master')->result_array();
        $this->load->view('product',compact('products'));
    }

    public function create(){
        $looms = $this->db->get('loom_master')->result_object();
        $weft_yarn = $this->Material->fetchMaterial('Weft yarn');
        $warp_yarn = $this->Material->fetchMaterial('Warp yarn');

        $this->load->view('product-create',compact('looms','weft_yarn','warp_yarn'));
    }


    public function store(){
        $data = $this->input->post();
        unset($data['bobbins'],$data['looms']);
        $this->db->insert('product_master',$data);
        $pid = $this->db->insert_id();
    
        foreach($this->input->post('looms') as $loom_id){
            $this->db->insert('loom_product',array('product_id'=>$pid,'loom_id'=>$loom_id));
        }
        redirect('product');
    }


    public function edit($id){
        $product = $this->db->get_where('product_master',array('id'=>$id))->row();
        $looms = $this->db->get('loom_master')->result_object();
        $weft_yarn = $this->Material->fetchMaterial('Weft yarn');
        $warp_yarn = $this->Material->fetchMaterial('Warp yarn');
        $bobins = $this->Material->fetchMaterial('Bobin', 'material_colour');

        $select_looms = array_column($this->db->get_where('loom_product', array('product_id' => $id))->result_array(), 'loom_id');

        $this->load->view('product-edit',compact('product','looms','weft_yarn','warp_yarn','bobins','select_looms'));
    }


    public function update($id){
        $data = $this->input->post();
        unset($data['bobbins'],$data['looms']);
        $this->db->where('id',$id)->update('product_master',$data);
       
        $this->db->delete('loom_product',array('product_id'=>$id));
       
        foreach($this->input->post('looms') as $loom_id){
            $this->db->insert('loom_product',array('product_id'=>$id,'loom_id'=>$loom_id));
        }
        redirect('product');
    }


    public function delete($id){
        
    }

    

}
?>