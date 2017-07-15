<?php

class Events extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->model('GetData');
    }

    public function index() {
    	
        $this->session->set_userdata('last_page', current_url());
    	
        $navdata = array('authorization' => $this->session->userdata('user'));

        $config = array();
        $config["base_url"] = base_url() . "events/index";
        $total_row = $this->GetData->record_count_events();
        $config["total_rows"] = $total_row;
        $config["per_page"] = 6;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = $total_row;
        $config['cur_tag_open'] = '<a class="active">';
        $config['cur_tag_close'] = '</a>';
        $config['full_tag_open'] = '<nav class="pagination" role="navigation">';
        $config['full_tag_close'] = '</nav>';
        $config['next_link'] = 'Next >';
        $config['prev_link'] = '< Previous';

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        
        $data = array(
            'results' => $this->GetData->fetchEvents($config["per_page"], $page),
            'links' => $this->pagination->create_links()
        );

        $this->load->view('navbar', $navdata);
        $this->load->view('events', $data);
        $this->load->view('footer');
    }

    public function view_event($eventId = ''){
        if($eventId == ''){
            redirect(base_url().'events');
        } else {
            $this->session->set_userdata('last_page', current_url());
        
            $navdata = array(
                'authorization' => $this->session->userdata('user')
            );

            $this->load->Model('GetData');
            $this->GetData->addView($eventId);
            
            $data = array(
                'event' => $this->GetData->getSpecificEvent($eventId)
            );

            $this->load->view('navbar', $navdata);
            $this->load->view('events-article', $data);
            $this->load->view('footer');
        }
    }
}