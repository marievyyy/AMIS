<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Search extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('pagination');
        $this->load->model('SearchEngineModel');
    }
    
    public function index(){
        
        $this->session->set_userdata('last_page', current_url());
        $navdata = array('authorization' => $this->session->userdata('user'));
        
        $searchInput = ($this->input->post("search"))? $this->input->post("search") : "NIL";
        $searchInput = ($this->uri->segment(2)) ? $this->uri->segment(2) : $searchInput;

        $config = array();
        $config["base_url"] = site_url('search/' . $searchInput);
        $total_row = $this->SearchEngineModel->recordCount($searchInput);
        $config["total_rows"] = $total_row;

        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"]/$config["per_page"];
        $config["num_links"] = floor($choice);

        $config['cur_tag_open'] = '<a class="active">';
        $config['cur_tag_close'] = '</a>';
        $config['full_tag_open'] = '<nav class="pagination" role="navigation">';
        $config['full_tag_close'] = '</nav>';
        $config['next_link'] = 'Next >';
        $config['prev_link'] = '< Previous';
        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        
        $data['links'] = $this->pagination->create_links();
        $data['results'] = $this->SearchEngineModel->fetchSearchData($searchInput, $config["per_page"],  $data['page']);
        $data['total'] = $total_row;
        
        if(isset($searchInput) && !empty($searchInput)){
            $this->load->view('navbar', $navdata);
            $this->load->view('search', $data);
            $this->load->view('footer');
        }

    }
}