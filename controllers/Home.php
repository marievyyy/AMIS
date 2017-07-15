<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //redirect('https://akk.li/pics/anne.jpg'); huehuehuehuehuehuehueuheuheuheuhehuehuehueheuheuheuheuheuhehuehuehueheuhehuehuehuehuehueuhe
    }

    public function index() {
        $this->session->set_userdata('last_page', current_url());

        $this->load->model('GetData');
        $data = array(
            'announcement' => $this->GetData->getAnnouncements(),
            'banner' => $this->GetData->getBanners(),
            'events' => $this->GetData->getEvents(),
            'recent_events' => $this->GetData->getRecentEvents()
        );

        $navdata = array('authorization' => $this->session->userdata('user'));

        $this->load->view('navbar', $navdata);
        $this->load->view('home', $data);
        $this->load->view('footer');
    }

    function sendmessage(){
        if(!empty($_POST)){

            $data = array('success' => false,
                    'messages' => array()
                );

            $this->load->library('form_validation');

            $this->form_validation->set_rules('sender', 'Sender', 'required|trim|callback_checkname');
            $this->form_validation->set_rules('emailAddress', 'Email Address', 'required|trim|valid_email');
            $this->form_validation->set_rules('messageDetails', 'Message', 'required|trim'); 

            // custom error messages
            $this->form_validation->set_message('required', 'This field is required!');
            $this->form_validation->set_error_delimiters('', '');

            if ($this->form_validation->run()) {
                $this->load->model('Model_Message_Us');
                if($this->Model_Message_Us->sendMessage()){
                	$this->sendmail($this->input->post('emailAddress'), $this->input->post('sender'), 'Contact Access', $this->input->post('messageDetails'));
                    $data['success'] = true;
                }
            }
            else {
                foreach ($_POST as $key => $value) {
                    $data['messages'][$key] = form_error($key);
                }
            }

            echo json_encode($data);
        } else {
            $this->index();
        }
    }

    private function sendmail($from, $sender, $subject, $message, $cc = '', $bcc = '') {
        
        $this->load->library('email');
        $this->load->config('Email');
        $this->email->from('pup.access@yahoo.com', $sender);
        $this->email->reply_to($from);
        if($cc != '') {
            $this->email->cc($cc);
        }
        if($bcc = '') {
            $this->email->bcc($bcc);
        }
        $this->email->to('pup.access@yahoo.com');
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send();
        
    }

    function checkname($str){
        if (!preg_match("/^[a-zA-ZñÑ. ]*$/", $str)) { 
            $this->form_validation->set_message('checkname', 'Only letters and white spaces allowed!');
            return false;
        } else {
            return true;
        }
    }

}
