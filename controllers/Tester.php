<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tester extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('pagination');
        $this->load->model('SearchEngineModel');
    }

    public function index() {
        $searchInput = $this->input->post('search');
        $data = array('searched', $searchInput);

        $this->load->view('dontdeletepls', $data);
    }

    public function search_something() {
        $searchInput = ($this->input->post("search"))? $this->input->post("search") : "NIL";
        $searchInput = ($this->uri->segment(3)) ? $this->uri->segment(3) : $searchInput;

        $config = array();
        $config["base_url"] = site_url('tester/search_something/' . $searchInput);
        $total_row = $this->SearchEngineModel->searchRecordCount($searchInput);
        $config["total_rows"] = $total_row;

        $config["per_page"] = 15;
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"]/$config["per_page"];
        $config["num_links"] = floor($choice);
        
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        $data['links'] = $this->pagination->create_links();
        $data['results'] = $this->SearchEngineModel->fetchSearchData($searchInput, $config["per_page"],  $data['page']);
        $data['total'] = $total_row;

        if(isset($searchInput) && !empty($searchInput)){
            $this->load->view('dontdeletepls', $data);
        } else {
            $this->index();
        }
    }

}