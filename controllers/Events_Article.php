<?php

class Events_Article extends CI_Controller {
    public function index($eventId = '') {
    	
        if($eventId == ''){
            redirect(base_url().'events');
        } else {
            $this->session->set_userdata('last_page', current_url());
        
            $navdata = array(
                'authorization' => $this->session->userdata('user')
            );

            $this->load->Model('GetData');
            $data = array(
                'event' => $this->GetData->getSpecificEvent($eventId),
                'zxc' => $eventId
            );

            $this->load->view('navbar', $navdata);
            $this->load->view('events-article', $data);
            $this->load->view('footer');

            echo $eventId;
            
        }

    }
}