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
    public function production_entry(){
        $looms = $this->db->get('loom_master')->result();
        $loom_weavers = $this->db->get('technicion_master')->result();
        $material = $this->db->get('material_master')->result();
        $this->load->view('production_entry',compact('looms','loom_weavers','material'));
    }
}
?>