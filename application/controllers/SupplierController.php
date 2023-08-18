<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class SupplierController extends CI_Controller {

 

function __construct()
{
    parent::__construct();

    $name = $this->session->userdata('name');
    $type = $this->session->userdata('type');
    if (empty($name) && $type == 'admin') {
        redirect('AuthController/logout');
    }
}



public function index()
{

  $suppliers = $this->db->get('supplier_master')->result();
  $this->load->view('supplier_master', ['suppliers' => $suppliers]);
}



public function show($id)
{
    $data = $this->db->get_where('supplier_master', ['id' => $id])->row_array();
    return $this->output->set_content_type('application/json')->set_output(json_encode($data));
}



public function create()
{
    $data = $this->input->post();
    $this->db->set($data);
    $this->db->insert('supplier_master');
    return $this->db->insert_id();
}



public function update()

{
    $data = $this->input->post();
    $this->db->set($data)->where('id', $data['id'])->update('supplier_master');
    return $this->db->affected_rows();
}



    public function delete($id){



    }

}

?>