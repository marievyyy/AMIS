<?php

class About extends CI_Controller {
    public function index() {
        $this->session->set_userdata('last_page', current_url());

        $this->load->model('GetData');

        $data = array(
        	'people' => $this->GetData->getOfficers()
        );
        $navdata = array('authorization' => $this->session->userdata('user'));

        $this->load->view('navbar', $navdata);
        $this->load->view('about', $data);
        $this->load->view('footer');
    }
}