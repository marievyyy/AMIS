<?php

class Financial extends CI_Controller {
    public function __construct(){
        parent::__construct();

        $this->load->Model('GetData');
    }

    public function index() {
        $this->session->set_userdata('last_page', current_url());

        $navdata = array('authorization' => $this->session->userdata('user'));

        $now = new DateTime('now');
        $month = $now->format('m');
        $year = $now->format('Y');

        if($month == 11 || $month == 12) {
            $pastStartDate = $year . '-06-01';
            $pastEndDate = $year . '-10-31';
            $presentStartDate = $year . '-11-02';
            $presentEndDate = $year+1 . '-03-31';
        } else if ($month == 6 || $month == 7 || $month == 8 || $month == 9 || $month == 10) {
            $pastStartDate = $year-1 . '-11-02';
            $pastEndDate = $year . '-03-31';
            $presentStartDate = $year . '-06-01';
            $presentEndDate = $year . '-10-31';
        } else if ($month == 1 || $month == 2 || $month == 3 || $month == 4 || $month == 5) {
            $pastStartDate = $year-1 . '-06-01';
            $pastEndDate = $year . '-10-31';
            $presentStartDate = $year . '-06-01';
            $presentEndDate = $year . '-10-31';
        }

        $data = array(
                'pastHistoryCashIn' => $this->GetData->getPastCashInsTransactionHistory($pastStartDate, $pastEndDate),
                'presentHistoryCashIn' => $this->GetData->getPresentCashInsTransactionHistory($presentStartDate, $presentEndDate),
                'pastOtherCashIn' => $this->GetData->getPastCashInsOtherTransactionDescription($pastStartDate, $pastEndDate),
                'presentOtherCashIn' => $this->GetData->getPresentCashInsOtherTransactionDescription($presentStartDate, $presentEndDate),
                'pastCashOut' => $this->GetData->getPastCashOuts($pastStartDate, $pastEndDate),
                'presentCashOut' => $this->GetData->getPastCashOuts($presentStartDate, $presentEndDate)
            );

        $this->load->view('navbar', $navdata);
        $this->load->view('financial', $data);
        $this->load->view('footer');
    }
}