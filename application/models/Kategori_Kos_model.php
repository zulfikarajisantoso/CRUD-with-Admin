<?php
class Kategori_Kos_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    // ===========================================================================
    // fungsi-fungsi yang digunakan di halaman back-end (oleh admin)
    // ===========================================================================

    // =========================================================================== View All
    function get_all()
    {
        $data = array();
        $this->db->select('*');
        $this->db->order_by('kategori_kos.kategori_id DESC');
        $Q = $this->db->get('kategori_kos');

        if ($Q->num_rows() > 0) {
            foreach ($Q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $Q->free_result();
        return $data;
    }

    // =========================================================================== View By ID
    function get_detail_by_id($id)
    {
        $data = array();
        $this->db->select('*');
        $this->db->where('kategori_kos.kategori_id', $id);
        $Q = $this->db->get('kategori_kos');

        if ($Q->num_rows() > 0) {
            $data = $Q->row_array();
        }

        $Q->free_result();
        return $data;
    }

    // =========================================================================== Add
    function add()
    {

        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori'),
            'deskripsi_kategori' => $this->input->post('deskripsi_kategori')
        );

        $action = $this->db->insert('kategori_kos', $data);

        return $action;
    }

    // =========================================================================== Edit

    // =========================================================================== Delete
    function delete($id){
    	$this->db->where('kategori_id', $id);
    	$action = $this->db->delete('kategori_kos');
    	return $action;
    }

}
