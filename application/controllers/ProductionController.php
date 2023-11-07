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
        $production = $this->db->get('production')->result();
        $this->load->view('production',compact('production'));
    }
    public function production_entry($id){
        if($id == 0){
            $production_no = $this->db->query("SELECT max(production_no)+1 as production_no  FROM `production`")->row();
            $production_no = ($production_no->production_no) ? $production_no->production_no : 1;
            $production = array('production_no' => $production_no,'date' => date('Y-m-d'),'status'=>'Start');
            $this->db->insert('production',$production);
            $id = $this->db->insert_id();
        }

        $production = $this->db->get_where('production',array('id'=>$id))->row();
        $entry = $this->db->get_where('production_entry',array('pid'=>$id))->result();
        $status = $this->db->get_where('production_status',array('pid'=>$id))->result();
        $looms = $this->db->get('loom_master')->result();
        $loom_weavers = $this->db->get('technicion_master')->result();
        $this->load->view('production_entry',compact('looms','loom_weavers','production','entry','status'));
    }

    public function loom($id){
        $loom = $this->db->query("SELECT a.loom_id,a.Loom_No,c.id,c.size,c.pick,c.product_name,round((1848*d.count*36)/(39.36*c.pick*52+2),2)grm,c.coolie FROM `loom_master` a left join loom_product b on a.loom_id=b.loom_id left join product_master c on b.product_id=c.id left join material_master d on c.weft_yarn=d.material_id WHERE a.loom_id=$id")->row();
        $this->output->set_content_type('application/json')->set_output(json_encode($loom));
    }

    public function production_loom(){
        $data = $this->input->post();
        $entry = ['pid'=>$data['pid'],'operator'=>$data['operator'],'loom'=>$data['loom'],'start_time'=>$data['start_time'],'end_time'=>$data['end_time'],'product'=>$data['product_id'],'weft_yarn'=>$data['weft_yarn'],'warp_yarn'=>$data['warp_yarn'],'total'=>$data['total'],'dhothi'=>$data['dhothi'],'wastage'=>$data['wastage']];

        $production_entry = $this->db->insert('production_entry',$entry);
        if($production_entry){
            $production = $this->db->where('id',$data['pid'])->update('production',array('operator'=>$data['operator'],'status'=>'Running','date'=>$data['date']));
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($data,true));
    }

    public function production_status()  {
        $data = $this->input->post();
        $status = ['pid'=>$data['pid'],'start_time'=>$data['start_time'],'end_time'=>$data['end_time'],'status'=>$data['status'],'comments'=>$data['comments']];
        $production_status = $this->db->insert('production_status',$status);
        if($production_status){
            $production = $this->db->where('id',$data['pid'])->update('production',array('status'=>$data['status'],'date'=>$data['date'],'operator'=>$data['operator']));
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($data,true));
        
    }
}
?>