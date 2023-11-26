<?php

class AdminHospital extends CI_Controller{

    public function hospital(){

        $this->load->view('admin_includes/header');
        $this->load->view('admin_includes/sidebar');
        $this->load->view('admin_includes/topbar');
        $this->load->view('pages/admin/admin_hospital');
        $this->load->view('admin_includes/footer');
    }
}

?>