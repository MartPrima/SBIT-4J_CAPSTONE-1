<?php

class PatientMyProfile extends CI_Controller{

    public function myProfile(){

        $this->load->view('includes/header');
        $this->load->view('includes/sidebar');
        $this->load->view('includes/topbar');
        $this->load->view('pages/patient/patient_myprofile');
        $this->load->view('includes/footer');
    }
}

?>