<?php
class Kos extends CI_Controller
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
        $this->load->model('Kos_model');
        // data konten
        $data['judul'] = "Kos";
        $data['sub_judul'] = "List Kos";
        $data['hasil'] = $this->Kos_model->get_all();

        // load template and variabels
        $tmp['contents'] = $this->load->view('admin/kos/view', $data, TRUE);
        $this->load->view('admin/layout/template', $tmp);
    }

    // =========================================================================== Add
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $this->form_validation->set_rules('id_kategori', 'id_kategori', 'trim|required');
            $this->form_validation->set_rules('no_kamar', 'no_kamar', 'trim|required');
            $this->form_validation->set_rules('letak_kamar', 'letak_kamar', 'trim|required');
            $this->form_validation->set_rules('harga_kamar', 'harga_kamar', 'trim|required');
            $this->form_validation->set_rules('kapasitas_kamar', 'kapasitas_kamar', 'trim|required');
            $this->form_validation->set_rules('fasilitas_kamar', 'fasilitas_kamar', 'trim|required');
           

            if ($this->form_validation->run() == FALSE) {
                $data['err'] = error_admin(validation_errors());
                $tmp['contents'] = $this->load->view("admin/kos/add", $data, TRUE);
            } else {
                $this->load->model('Kos_model');
                $aksi = $this->Kos_model->add();
                if ($aksi) {
                    $this->session->set_flashdata("message", valid_admin("data berhasil disimpan"));
                    redirect('admin/kos', 'refresh');
                } else {
                    $this->session->set_flashdata("message", error_admin("gagal menyimpan data baru"));
                    redirect('admin/kos/add', 'refresh');
                }
            }
        }

        $data['judul'] = "Kos";
        $data['sub_judul'] = "Tambah Data Kos";
       
        $tmp['contents'] = $this->load->view("admin/kos/add", $data, TRUE);
        $this->load->view("admin/layout/template", $tmp);
    }

    // =========================================================================== Edit
    public function edit($id = 0)
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $this->load->model('Kos_model');
            $data_kos = $this->Kos_model->get_detail_by_id($id); // get data news
            if (count($data_kos) > 0) {
                $aksi = $this->Kos_model->update($id);
                if ($aksi) {
                    $this->session->set_flashdata("message", valid_admin("data berhasil disimpan"));
                    redirect('admin/kos', 'refresh');
                } else {
                    $this->session->set_flashdata("message", error_admin("gagal mengubah data"));
                    redirect('admin/kos/edit/' . $id, 'refresh');
                }
            } else { // jika tidak ditemukan data
                $this->session->set_flashdata("message", error_admin("data gagal diedit karena tidak ada data"));
                redirect('admin/kos/edit/' . $id, 'refresh');
            }
        } else { // get data news
            $this->load->model('Kos_model');
            $data_kos = $this->Kos_model->get_detail_by_id($id);
            $data['judul'] = "Edit";
            $data['sub_judul'] = "Form Edit";
            $data['old_value'] = $this->Kos_model->get_detail_by_id($id);
            // load template
            $tmp['contents'] = $this->load->view("admin/kos/edit", $data, TRUE);
            $this->load->view("admin/layout/template", $tmp);
        }
    }

    // =========================================================================== Delete
    public function delete($id = 0)
    {
        // get data news
        $this->load->model('Kos_model');
        $data_kos = $this->Kos_model->get_detail_by_id($id);
        if (count($data_kos) > 0) {
            // hapus data dari database
            $aksi = $this->Kos_model->delete($id);

            if ($aksi) {
                // jika query berhasil
                $this->session->set_flashdata("message", valid_admin("data berhasil dihapus"));
                redirect('admin/kos', 'refresh');
            } else {
                // jika query gagal
                $this->session->set_flashdata("message", error_admin("data gagal dihapus karena gagal query"));
                redirect('admin/kos', 'refresh');
            }
        } else {
            // jika tidak ditemukan data
            $this->session->set_flashdata("message", error_admin("data gagal dihapus karena tidak ada datanya"));
            redirect('admin/kos', 'refresh');
        }
    }
}
