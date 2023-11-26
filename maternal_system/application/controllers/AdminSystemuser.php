<?php

class AdminSystemuser extends CI_Controller{

    public function system_user(){

        $this->load->view('admin_includes/header');
        $this->load->view('admin_includes/sidebar');
        $this->load->view('admin_includes/topbar');
        $this->load->view('pages/admin/admin_system_user');
        $this->load->view('admin_includes/footer');
    }
}

?>