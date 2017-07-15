<?php

class Accomplishments extends CI_Controller {
    public function __construct(){
        parent::__construct();

        $this->load->Model('GetData');
    }

    public function index() {
        $this->session->set_userdata('last_page', current_url());

        $data = array('accomplishments' => $this->GetData->getAccomplishmentReports());
        $navdata = array('authorization' => $this->session->userdata('user'));

        $this->load->view('navbar', $navdata);
        $this->load->view('accomplishments', $data);
        $this->load->view('footer');
    }
}