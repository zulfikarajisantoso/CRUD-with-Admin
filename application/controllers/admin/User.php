<?php
class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        if ($this->session->userdata("username") == "") {
            redirect("admin/login", 'refresh');
            $this->session->set_userdata('message', error("access denied"));
        }
    }

    // =========================================================================== view
    public function index()
    {
        $this->load->model('User_model');
        // data konten
        $data['judul'] = "User";
        $data['sub_judul'] = "List User";
        $data['hasil'] = $this->User_model->get_all();

        // load template and variabels
        $tmp['contents'] = $this->load->view('admin/user/view', $data, TRUE);
        $this->load->view('admin/layout/template', $tmp);
    }

    // =========================================================================== Add
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $this->form_validation->set_rules('id', 'id', 'trim|required');
            $this->form_validation->set_rules('username', 'username', 'trim|required');
            $this->form_validation->set_rules('password', 'password', 'trim|required');
            $this->form_validation->set_rules('email', 'email', 'trim|required');
            $this->form_validation->set_rules('level', 'level', 'trim|required');
           

            if ($this->form_validation->run() == FALSE) {
                $data['err'] = error_admin(validation_errors());
                $tmp['contents'] = $this->load->view("admin/user/add", $data, TRUE);
            } else {
                $this->load->model('User_model');
                $aksi = $this->User_model->add();
                if ($aksi) {
                    $this->session->set_flashdata("message", valid_admin("data berhasil disimpan"));
                    redirect('admin/user', 'refresh');
                } else {
                    $this->session->set_flashdata("message", error_admin("gagal menyimpan data baru"));
                    redirect('admin/user/add', 'refresh');
                }
            }
        }

        $data['judul'] = "user";
        $data['sub_judul'] = "Tambah Data user";
        // load template
        $tmp['contents'] = $this->load->view("admin/user/add", $data, TRUE);
        $this->load->view("admin/layout/template", $tmp);
    }

    // =========================================================================== Edit
    public function edit($id = 0)
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $this->load->model('User_model');
            $data_mh = $this->User_model->get_detail_by_id($id); // get data news
            if (count($data_mh) > 0) {
                $aksi = $this->User_model->update($id);
                if ($aksi) {
                    $this->session->set_flashdata("message", valid_admin("data berhasil disimpan"));
                    redirect('admin/user', 'refresh');
                } else {
                    $this->session->set_flashdata("message", error_admin("gagal mengubah data"));
                    redirect('admin/user/edit/' . $id, 'refresh');
                }
            } else { // jika tidak ditemukan data
                $this->session->set_flashdata("message", error_admin("data gagal diedit karena tidak ada data"));
                redirect('admin/user/edit/' . $id, 'refresh');
            }
        } else { // get data news
            $this->load->model('User_model');
            $data_mh = $this->User_model->get_detail_by_id($id);
            $data['judul'] = "Edit";
            $data['sub_judul'] = "Form Edit";
            $data['old_value'] = $this->User_model->get_detail_by_id($id);
            // load template
            $tmp['contents'] = $this->load->view("admin/user/edit", $data, TRUE);
            $this->load->view("admin/layout/template", $tmp);
        }
    }

    // =========================================================================== Delete
    public function delete($id = 0)
    {
        // get data news
        $this->load->model('User_model');
        $data_mh = $this->User_model->get_detail_by_id($id);
        if (count($data_mh) > 0) {
            // hapus data dari database
            $aksi = $this->User_model->delete($id);

            if ($aksi) {
                // jika query berhasil
                $this->session->set_flashdata("message", valid_admin("data berhasil dihapus"));
                redirect('admin/user', 'refresh');
            } else {
                // jika query gagal
                $this->session->set_flashdata("message", error_admin("data gagal dihapus karena gagal query"));
                redirect('admin/user', 'refresh');
            }
        } else {
            // jika tidak ditemukan data
            $this->session->set_flashdata("message", error_admin("data gagal dihapus karena tidak ada datanya"));
            redirect('admin/user', 'refresh');
        }
    }
}
