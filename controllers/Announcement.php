<?php

class Announcement extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->model('GetData');
    }

    public function index() {
    	
        $this->session->set_userdata('last_page', current_url());
    	      
        $navdata = array('authorization' => $this->session->userdata('user'));
        
        $config = array();
        $config["base_url"] = base_url() . "announcement/index";
        $total_row = $this->GetData->recordCount();
        $config["total_rows"] = $total_row;
        $config["per_page"] = 5;
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
            'announcement' => $this->GetData->getAnnouncements(),
            'results' => $this->GetData->fetchAnnouncements($config["per_page"], $page),
            'links' => $this->pagination->create_links()
        );       

        $this->load->view('navbar', $navdata);
        $this->load->view('announcement', $data);
        $this->load->view('footer');
    }
}