<?php
class Kategori_Kos extends CI_Controller
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
        $this->load->model('Kategori_Kos_model');
        // data konten
        $data['judul'] = "Kategori Kos";
        $data['sub_judul'] = "Daftar Kategori Kos";
        $data['hasil'] = $this->Kategori_Kos_model->get_all();

        // load template and variabels
        $tmp['contents'] = $this->load->view('admin/kategori_kos/view', $data, TRUE);
        $this->load->view('admin/layout/template', $tmp);
    }

    // =========================================================================== Add
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $this->form_validation->set_rules('nama_kategori', 'nama_kategori', 'trim|required|xss_clean');
            $this->form_validation->set_rules('deskripsi_kategori', 'deskripsi_kategori', 'trim|required|xss_clean');

            if ($this->form_validation->run() == FALSE) {
                $data['err'] = error_admin(validation_errors());
                $tmp['contents'] = $this->load->view("admin/kategori_kos/add", $data, TRUE);
            } else {
                $this->load->model('Kategori_Kos_model');
                $aksi = $this->Kategori_Kos_model->add();
                if ($aksi) {
                    $this->session->set_flashdata("message", valid_admin("data berhasil disimpan"));
                    redirect('admin/kategori_kos', 'refresh');
                } else {
                    $this->session->set_flashdata("message", error_admin("gagal menyimpan data baru"));
                    redirect('admin/kategori_kos/add', 'refresh');
                }
            }
        }

        $data['judul'] = "Kategori Kos";
        $data['sub_judul'] = "Tambah Kategori Kos";

        // load template
        $tmp['contents'] = $this->load->view("admin/kategori_kos/add", $data, TRUE);
        $this->load->view("admin/layout/template", $tmp);
    }

    // =========================================================================== Edit


    // =========================================================================== Delete
    public function delete($id = 0)
    {
        $this->load->model('Kategori_Kos_model');
        $data_news = $this->Kategori_Kos_model->get_detail_by_id($id);
        if (count($data_news) > 0) {
            // hapus data dari database
            $aksi = $this->Kategori_Kos_model->delete($id);

            if ($aksi) {
                // jika query berhasil
                $this->session->set_flashdata("message", valid_admin("data berhasil dihapus"));
                redirect('admin/kategori_kos', 'refresh');
            } else {
                // jika query gagal
                $this->session->set_flashdata("message", error_admin("data gagal dihapus karena gagal query"));
                redirect('admin/kategori_kos', 'refresh');
            }
        } else {
            // jika tidak ditemukan data
            $this->session->set_flashdata("message", error_admin("data gagal dihapus karena tidak ada datanya"));
            redirect('admin/kategori_kos', 'refresh');
        }
    }
}
