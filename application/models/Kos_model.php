<?php
class Kos_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    // ===========================================================================
    // halaman back-end
    // ===========================================================================

    // =========================================================================== View All
    function get_all()
    {
        $data = array();
        $this->db->select('*');

        $this->db->order_by('kos.id_kos desc');
        $Q = $this->db->get('kos');

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

        $this->db->where('kos.id_kos', $id);
        $Q = $this->db->get('kos');

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
          
            'id_kategori' => $this->input->post('id_kategori'),
            'no_kamar' => $this->input->post('no_kamar'),
            'letak_kamar' => $this->input->post('letak_kamar'),
            'harga_kamar' => $this->input->post('harga_kamar'),
            'kapasitas_kamar' => $this->input->post('kapasitas_kamar'),
            'fasilitas_kamar' => $this->input->post('fasilitas_kamar'),
          

        );

        $action = $this->db->insert('kos', $data);
        return $action;
    }

    // =========================================================================== Edit
    function update($id)
    {
        $data = array(
            'id_kategori' => $this->input->post('id_kategori'),
            'no_kamar' => $this->input->post('no_kamar'),
            'letak_kamar' => $this->input->post('letak_kamar'),
            'harga_kamar' => $this->input->post('harga_kamar'),
            'kapasitas_kamar' => $this->input->post('kapasitas_kamar'),
            'fasilitas_kamar' => $this->input->post('fasilitas_kamar'),
        );

        $this->db->where('id_kos', $id);
        $action = $this->db->update('kos', $data);

        return $action;
    }

    // =========================================================================== Delete
    function delete($id)
    {
        $this->db->where('id_kos', $id);
        $action = $this->db->delete('kos');
        return $action;
    }
}
