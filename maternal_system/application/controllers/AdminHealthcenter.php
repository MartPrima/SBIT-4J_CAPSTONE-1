<?php

class AdminHealthcenter extends CI_Controller{

    public function health_center(){

        $this->load->view('admin_includes/header');
        $this->load->view('admin_includes/sidebar');
        $this->load->view('admin_includes/topbar');
        $this->load->view('pages/admin/admin_health_center');
        $this->load->view('admin_includes/footer');
    }
}

?>