<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
	public function index()	{
        if($this->session->userdata('token')){
            redirect(base_url());
        } else {
		    $this->load->view('login');
        }
	}

	function user_login(){
        if(!empty($_POST)){
            $data = array('success' => false, 'message' => array(), 'path' => $this->session->userdata('last_page'));
            $studentNumber = $this->input->post('studentnumber');
            $password = $this->input->post('password');

            $this->load->model('Model_Auth');
            $res = $this->Model_Auth->login($studentNumber, $password);
            $user = $this->Model_Auth->getUser($studentNumber);
            
            if($res == 'active') {
                $auth = array(
                    'user' => $user[0]['firstName'],
                    'token' => 1,
                    'studentNumber' => $studentNumber
                );
                
                $this->session->set_userdata($auth);
            }

            $data['message'] = $res;
            $data['success'] = true;

            echo json_encode($data);
        } else {
            $this->index();
        }
	}

}