<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TechnicianController extends CI_Controller {
 
 	function __construct() {
        parent::__construct();
        $this->load->library(('upload'));
    }

    public function index()
    {
        if($this->session->userdata('name') != '')
        {
         $this->load->view('technicion_master',array('technicions' => $this->db->get('technicion_master')->result_object()));
        }
        else
        {
         redirect('AuthController/logout');
        }
       
    }

    public function show($id)
    {
        $this->output->set_content_type('application/json')->set_output(json_encode($this->db->get_where('technicion_master',array('id' => $id))->row()));
    }

    public function create()
    {
        $data = $this->input->post();
        if($_FILES['photo']['name'] != '')
        {
        $this->upload->initialize(array(
            'upload_path' => 'uploads/',
            'allowed_types' => 'gif|jpg|png',
            'max_size' => '2048000',
            'overwrite' => TRUE,
            'encrypt_name' => TRUE,
            'remove_spaces' => TRUE,
        ));
        if($this->upload->do_upload('photo')){
            $file_name = $this->upload->data('file_name');
            $data['photo'] = $file_name;
        }
        else{
            $data['photo'] = NULL;
        }
    }


       // convert raw sql query  i
        $this->db->insert('technicion_master',$data);
      
    }

    public function update()
    {
        $data = $this->input->post();

        if($_FILES['photo']['name'] != ''){
        $this->upload->initialize(array(
            'upload_path' => 'uploads/',
            'allowed_types' => 'gif|jpg|png',
            'max_size' => '2048000',
            'overwrite' => TRUE,
            'encrypt_name' => TRUE,
            'remove_spaces' => TRUE,
        ));
        if($this->upload->do_upload('photo')){
            $file_name = $this->upload->data('file_name');
            $data['photo'] = $file_name;
        }
        else{
            $data['photo'] = NULL;
        }
    }
   

    $this->db->where('id',$data['id'])->update('technicion_master',$data);
    }

    public function delete($id){

    }
}
?>