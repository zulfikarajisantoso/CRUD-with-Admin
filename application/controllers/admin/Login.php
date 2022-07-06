<?php
class Login extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index(){
        $tmp['title'] = 'Login';
        $this->load->view('admin/login', $tmp);
    }
 
    public function auth(){
        if($this->input->post('ip-username')=='' && $this->input->post('ip-pass')==''){
            $this->session->set_userdata('message',"inputan tidak boleh kosong");
            redirect('admin/login', 'refresh');
        }
        else{
            $this->form_validation->set_rules('ip-username', 'username', 'trim|required|xss_clean');
            $this->form_validation->set_rules('ip-pass', 'password', 'trim|required|xss_clean');
 
            if($this->form_validation->run()==FALSE){
                $this->session->set_userdata('message', "username / password anda tidak valid");
                redirect('admin/login', 'refresh');
            }
            else{
                // $encrypt_pass = md5($this->input->post('ip-pass'));
 
                $username = $this->input->post('ip-username');
                $password = $this->input->post('ip-pass');
 
                $result = $this->Login_model->login($username, $password);
 
                if($result){
                    foreach ($result as $row) {
                        $sess_array=array(
                            'username'=>$row->username
                        );
                        $this->session->set_userdata('login', $sess_array);
                        $this->session->set_userdata('username', $row->username);
                    }
                    $this->session->unset_userdata('message');
                    redirect('admin/dashboard', 'refresh');
                } else{
                    $this->session->set_userdata('message', "username / password anda salah");
                    redirect('admin/login', 'refresh');
                }
            }
        }
    }

    public function logout() {
        $this->load->library('session');
        $this->load->helper('url');
        $this->session->unset_userdata('login');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('onlocat');
        redirect('Login', 'refresh');
    }
}