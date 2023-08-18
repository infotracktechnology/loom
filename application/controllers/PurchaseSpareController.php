<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class PurchaseSpareController extends CI_Controller {

 

 	function __construct() {

        parent::__construct();
        $name = $this->session->userdata('name');



    }


public function index()
{
    $name = $this->session->userdata('name');

    if($name != '')
    {

        $spares = $this->db->select('id,product_name')->get('spare_master')->result_object();
        $suppilers = $this->db->select('id,Supplier_Name')->get('supplier_master')->result_object();

        $this->load->view('purchase_spare', compact('spares', 'suppilers'));
    }

    else
    {

        redirect('AuthController/logout');

    }

}



    public function show($id)

    {

        # code...

    }



    public function create()

    {

        # code...

    }



    public function update()

    {

        # code...

    }



    public function delete($id){



    }

    function GetSupplier(int $id){
        $suppiler = $this->db->select('id,Address,Mobile_no,GST_No,State')->where('id',$id)->get('supplier_master')->row();
        return $this->output->set_content_type('application/json')->set_output(json_encode($suppiler));
    }

    function GetProduct(int $id){
        $product = $this->db->select('id,product_name,hsn,Tax')->where('id',$id)->get('spare_master')->row();
        return $this->output->set_content_type('application/json')->set_output(json_encode($product));
    }

}

?>