<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductionController extends CI_Controller {
 
 	function __construct() {
        parent::__construct();
        if(!isset($this->session->name)){
            redirect(base_url('AuthController/index'));
        }
    }

    public function index(){
        $this->load->view('production');
    }
    public function production_entry($id){
        if($id == 0){
            
        }

        $looms = $this->db->get('loom_master')->result();
        $loom_weavers = $this->db->get('technicion_master')->result();
        $this->load->view('production_entry',compact('looms','loom_weavers'));
    }

    public function loom($id){
        $loom = $this->db->query("SELECT a.loom_id,c.id,c.size,c.pick,c.product_name,round((1848*d.count*36)/(39.36*c.pick*52+2),2)grm,c.coolie FROM `loom_master` a left join loom_product b on a.loom_id=b.loom_id left join product_master c on b.product_id=c.id left join material_master d on c.weft_yarn=d.material_id WHERE a.loom_id=$id")->row();
        $this->output->set_content_type('application/json')->set_output(json_encode($loom));
    }
}
?>