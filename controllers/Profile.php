<?php

class Profile extends CI_Controller {
    public function __construct(){
        parent::__construct();

        $this->load->model('GetData');
    }

    public function index() {
    	
        $this->session->set_userdata('last_page', current_url());
    	
        if($this->session->userdata('token')){
        	$navdata = array('authorization' => $this->session->userdata('user'));
	        $data = array(
	            'profile' => $this->GetData->getUserProfile($this->session->userdata('studentNumber'))
	        );

        	$this->load->view('navbar', $navdata);
        	$this->load->view('profile-content', $data);
        	$this->load->view('footer');
        } else {
        	redirect(base_url() . "login");
        }
    }

    public function profile_settings(){
    	$this->session->set_userdata('last_page', current_url());
    	
    	if($this->session->userdata('token')){
        	$navdata = array('authorization' => $this->session->userdata('user'));

            $data = array(
                'profile' => $this->GetData->getUserProfile($this->session->userdata('studentNumber'))
            );

        	$this->load->view('navbar', $navdata);
        	$this->load->view('profile-settings', $data);
        	$this->load->view('footer');
    	} else {
    		redirect(base_url() . "login");
    	}
    }

    public function profile_account(){
        $this->session->set_userdata('last_page', current_url());
        
        if($this->session->userdata('token')){
            $navdata = array('authorization' => $this->session->userdata('user'));

            $data = array(
                'profile' => $this->GetData->getUserProfile($this->session->userdata('studentNumber'))
            );

            $this->load->view('navbar', $navdata);
            $this->load->view('profile-account', $data);
            $this->load->view('footer');
        } else {
            redirect(base_url() . "login");
        }
    }

    public function profile_transaction(){
        $this->session->set_userdata('last_page', current_url());
        
        if($this->session->userdata('token')){
            $navdata = array('authorization' => $this->session->userdata('user'));

            $this->load->Model('Model_GetTransactions');
            $data = array(
                'transaction' => $this->Model_GetTransactions->getTransactions($this->session->userdata('studentNumber'))
            );

            $this->load->view('navbar', $navdata);
            $this->load->view('profile-transaction', $data);
            $this->load->view('footer');
        } else {
            redirect(base_url() . "login");
        }
    }

    public function edit_account(){
        if(!empty($_POST)){
            $data = array('success' => false,
                        'messages' => array()
                    );

            $this->load->library('form_validation');

            $this->form_validation->set_rules('password', 'Current Password', 'required|callback_checkCurrentPassword');
            $this->form_validation->set_rules('newPassword', 'New Password', 'required|min_length[6]');
            $this->form_validation->set_rules('renewPassword', 'Re-type New Password', 'required|matches[newPassword]');

            // custom error messages
            $this->form_validation->set_message('required', 'This field is required!');
            $this->form_validation->set_message('matches', 'The new password fields does not match!');
            $this->form_validation->set_error_delimiters('', '');

            $this->load->model('Model_Editprofile');
            
            if($this->form_validation->run()){
                if($this->Model_Editprofile->updateUserAccount($this->session->userdata('studentNumber'))){
                    $data['success'] = true;
                }
            } else {
                foreach ($_POST as $key => $value) {
                    $data['messages'][$key] = form_error($key);
                }
            }
            
            echo json_encode($data);
            
        } else {
            $this->profile_account();
        }
    }

    public function edit_profile(){
        if(!empty($_POST)){
            $data = array('success' => false,
                        'messages' => array()
                    );

            $this->load->library('form_validation');

            $this->form_validation->set_rules('firstName', 'First Name', 'required|trim|min_length[2]|callback_checkname');
            $this->form_validation->set_rules('middleName', 'Middle Name', 'required|trim|min_length[2]|callback_checkname');
            $this->form_validation->set_rules('lastName', 'Last Name', 'required|trim|min_length[2]|callback_checkname');
            $this->form_validation->set_rules('contactNumber', 'Contact Number', 'required|trim|numeric|min_length[7]');
            $this->form_validation->set_rules('emailAddress', 'Email Address', 'required|trim|valid_email');
            $this->form_validation->set_rules('residentialAddress', 'Residential Address', 'required|trim');
            $this->form_validation->set_rules('provincialAddress', 'Provincial Address', 'required|trim');
            $this->form_validation->set_rules('awardsHS', 'Awards', 'trim|callback_alphaspaces');
            $this->form_validation->set_rules('scholar', 'Scholarship', 'trim|callback_alphaspaces|callback_scholarType');
            $this->form_validation->set_rules('scholarType', 'Scholarship Type', 'callback_scholar');
            $this->form_validation->set_rules('organizationOne', 'Organization', 'trim|callback_positionOne');
            $this->form_validation->set_rules('positionOne', 'Position', 'trim|callback_organizationOne');
            $this->form_validation->set_rules('organizationTwo', 'Organization', 'trim|callback_positionTwo');
            $this->form_validation->set_rules('positionTwo', 'Position', 'trim|callback_organizationTwo');
            $this->form_validation->set_rules('organizationThree', 'Organization', 'trim|callback_positionThree');
            $this->form_validation->set_rules('positionThree', 'Position', 'trim|callback_organizationThree');
            $this->form_validation->set_rules('skills', 'Skills', 'required|trim');
            $this->form_validation->set_rules('mother', 'Mother', 'required|trim|callback_checkname');
            $this->form_validation->set_rules('father', 'Father', 'required|trim|callback_checkname');
            $this->form_validation->set_rules('guardian', 'Guardian', 'required|trim|callback_checkname');

            // custom error messages
            $this->form_validation->set_message('required', 'This field is required!');
            $this->form_validation->set_error_delimiters('', '');

            if($this->form_validation->run()){
                $this->load->model('GetData');
                $this->load->model('Model_Editprofile');
                if($this->Model_Editprofile->updateFamilyInfo($this->GetData->getSomethingInUserProfile($this->session->userdata('studentNumber'))[0]['MFIid'])){
                    if($this->Model_Editprofile->updateEducationInfo($this->GetData->getSomethingInUserProfile($this->session->userdata('studentNumber'))[0]['MEBid'])){
                        if($this->Model_Editprofile->updateAffiliationAndSkillsInfo($this->GetData->getSomethingInUserProfile($this->session->userdata('studentNumber'))[0]['MASid'])){
                            if($this->Model_Editprofile->updatePersonalInfo($this->GetData->getSomethingInUserProfile($this->session->userdata('studentNumber'))[0]['MPIid'])){
                                $data['success'] = true;
                            }
                        }
                    }
                }
            } else {
                foreach ($_POST as $key => $value) {
                    $data['messages'][$key] = form_error($key);
                }
            }

            echo json_encode($data);
        } else {
            $this->profile_settings();
        }
    }

    // ========== CALLBACKS ========== //

    function checkStudentNumber($studentnumber){
        if (preg_match('/[20][0][8-9]|[20][1][0-6]-+[0-9]{5}-+MN-+[\/01\/]{1}/', $studentnumber)) {
            return true;
        } else {
            $this->form_validation->set_message('checkStudentNumber', 'Please check your student number input.');
            return false;
        }
    }

    function checkCurrentPassword($pwd){
        $this->load->model('Model_Editprofile');
        if($this->Model_Editprofile->password_verify($this->session->userdata('studentNumber'), $pwd)){
            return true;
        } else {
            $this->form_validation->set_message('checkCurrentPassword', 'Invalid current password!');
            return false;
        }
    }

    function checkname($str){
        if (!preg_match("/^[a-zA-ZñÑ. ]*$/", $str)) { 
            $this->form_validation->set_message('checkname', 'Only letters and white spaces allowed!');
            return false;
        } else {
            return true;
        }
    }

    function checkDob($x){
        $t = time();
        $current = (date("Y-m-d",$t));
        $input = $x;
        $diff = $current - $input;

        if(($input > $current) || $diff < 15){
            $this->form_validation->set_message('checkDob', 'Invalid birthday input!');
            return false;
        } else {
            return true;
        }
    }

    function alphaspaces($str){
        if (!preg_match("/^[a-zA-Z ]*$/", $str)) { 
            $this->form_validation->set_message('alphaspaces', 'Only letters and white spaces allowed!');
            return false;
        } else {
            return true;
        }
    }

    function highSchool($hsType){
        $hs = $this->input->post('highSchool');
        if(strlen($hs) > 0 && strlen($hsType) < 1){
            $this->form_validation->set_message('highSchool', 'You also need to fill this up.');
            return false;
        } else {
            return true;
        }
    }   

    function highSchoolType($hs){
        $hsType = $this->input->post('hsType');
        if(strlen($hs) < 1 && strlen($hsType) > 0){
            $this->form_validation->set_message('highSchoolType', 'You also need to fill this up.');
            return false;
        } else {
            return true;
        }
    }

    function scholar($scholarType){
        $scholar = $this->input->post('scholar');
        if(($scholar == 'None' || $scholar == 'none')){
            if(strlen($scholarType) > 1) {
                $this->form_validation->set_message('scholar', 'You don\'t need to fill this up.');
                return false;
            }
        } else {
            if(strlen($scholar) > 0 && strlen($scholarType) < 1){
                $this->form_validation->set_message('scholar', 'You also need to fill this up.');
                return false;
            } else {
                return true;
            }
        }
    }

    function scholarType($scholar){
        $scholarType = $this->input->post('scholarType');
        if(strlen($scholar) < 1 && strlen($scholarType) > 0){
            $this->form_validation->set_message('scholarType', 'You also need to fill this up.');
            return false;
        } else {
            return true;
        }
    }

    function positionOne($org){
        $pos = $this->input->post('positionOne');
        if(strlen($org) < 1 && strlen($pos) > 0){
            $this->form_validation->set_message('positionOne', 'You also need to fill this up.');
            return false;
        } else {
            return true;
        }
    }

    function organizationOne($pos){
        $org = $this->input->post('organizationOne');
        if(strlen($org) > 0 && strlen($pos) < 1){
            $this->form_validation->set_message('organizationOne', 'You also need to fill this up.');
            return false;
        } else {
            return true;
        }
    }

    function positionTwo($org){
        $pos = $this->input->post('positionTwo');
        if(strlen($org) < 1 && strlen($pos) > 0){
            $this->form_validation->set_message('positionTwo', 'You also need to fill this up.');
            return false;
        } else {
            return true;
        }
    }

    function organizationTwo($pos){
        $org = $this->input->post('organizationTwo');
        if(strlen($org) > 0 && strlen($pos) < 1){
            $this->form_validation->set_message('organizationTwo', 'You also need to fill this up.');
            return false;
        } else {
            return true;
        }
    }

    function positionThree($org){
        $pos = $this->input->post('positionThree');
        if(strlen($org) < 1 && strlen($pos) > 0){
            $this->form_validation->set_message('positionThree', 'You also need to fill this up.');
            return false;
        } else {
            return true;
        }
    }

    function organizationThree($pos){
        $org = $this->input->post('organizationThree');
        if(strlen($org) > 0 && strlen($pos) < 1){
            $this->form_validation->set_message('organizationThree', 'You also need to fill this up.');
            return false;
        } else {
            return true;
        }
    }
}