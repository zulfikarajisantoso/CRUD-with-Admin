<?php
class Dashboard extends CI_Controller {
    public function index() {
        $data['title'] = 'Dashboard';
        $tmp['contents'] = $this->load->view('admin/dashboard/home', $data, TRUE);
        $this->load->view('admin/layout/template', $tmp);
    }
}