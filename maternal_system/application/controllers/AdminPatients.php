<?php

class AdminPatients extends CI_Controller{


    public function patients(){

        $this->load->view('admin_includes/header');
        $this->load->view('admin_includes/sidebar');
        $this->load->view('admin_includes/topbar');
        $this->load->view('pages/admin/admin_patients');
        $this->load->view('admin_includes/footer');
    }
}

?>