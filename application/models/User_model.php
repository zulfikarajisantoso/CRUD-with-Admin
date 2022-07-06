<?php
class User_model extends CI_Model
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

        $this->db->order_by('user.id desc');
        $Q = $this->db->get('user');

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

        $this->db->where('user.id', $id);
        $Q = $this->db->get('user');

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

            'id' => $this->input->post('id'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'level' => $this->input->post('level'),

        );

        $action = $this->db->insert('user', $data);
        return $action;
    }

    // // =========================================================================== Edit
    function update($id)
    {
        $data = array(

            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'level' => $this->input->post('level'),
        );

        $this->db->where('id', $id);
        $action = $this->db->update('user', $data);

        return $action;
    }

    // =========================================================================== Delete
    function delete($id)
    {
        $this->db->where('id', $id);
        $action = $this->db->delete('user');
        return $action;
    }
}
