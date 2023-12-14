<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {

    public function index()
    {
        $this->load->view('v_home');
    }

    public function login(){
        $this->load->view('v_login');
    }
    public function register() {
        $this->load->view('v_register');
    }
    public function admin(){
        $this->load->view('v_admin');
    }
    public function editproduk(){
        $this->load->view('v_editproduk');
    }
    public function editwisata(){
        $this->load->view('v_editwisata');
    }
    public function produk(){
        $this->load->view('v_produk');
    }
    public function wisata(){
        $this->load->view('v_wisata'); 
    }


}

/* End of file C_home.php */

?>