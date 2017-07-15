<?php

class Services extends CI_Controller {
    public function index() {
        $this->session->set_userdata('last_page', current_url());

        $navdata = array('authorization' => $this->session->userdata('user'));

        $this->load->view('navbar', $navdata);
        $this->load->view('services');
        $this->load->view('footer');
    }
}