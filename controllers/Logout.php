<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

    public function index(){
        $this->session->unset_userdata('token'); 
        $this->session->unset_userdata('studentNumber');
        $this->session->unset_userdata('user');  
        redirect(base_url() . 'login');
    }

}