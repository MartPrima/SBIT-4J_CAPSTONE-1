<?php

class AdminAccountlist extends CI_Controller{

    public function acount_lists(){

        $this->load->view('admin_includes/header');
        $this->load->view('admin_includes/sidebar');
        $this->load->view('admin_includes/topbar');
        $this->load->view('pages/admin/admin_account_list');
        $this->load->view('admin_includes/footer');
    }
}

?>