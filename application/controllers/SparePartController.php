<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class SparePartController extends CI_Controller {

 

 	function __construct() {

        parent::__construct();

    }



    public function index()

    {

        if($this->session->userdata('name') != '')

        {

         $this->load->view('spare_master',array('spares' => $this->db->get('spare_master')->result()));

        }

        else

        {

         redirect('AuthController/logout');

        }

    }



public function show($id)
{
    $spare = $this->db->get_where('spare_master', array('id' => $id))->row();
    $json = json_encode($spare);
    return $this->output->set_content_type('application/json')->set_output($json);
}



public function create()
{
    $data = $this->input->post();
    $this->db->set($data);
    $this->db->insert('spare_master');
    return $this->output->set_content_type('application/json')->set_output(json_encode($this->db->insert_id()));
}



    public function update()

    {
       $data =  $this->input->post();
       $this->db->set($data)->where('id',$data['id'])->update('spare_master');
       return $this->output->set_content_type('application/json')->set_output(json_encode($this->db->affected_rows()));
    }



    public function delete($id){



    }

}

?>