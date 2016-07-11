<?php

class m_jenisproyek extends CI_Model {

    function __construct() {
        parent::__construct();
    }

	public function get_all()
    {
        $this->db->select("*");
        $this->db->from("jenis_proyek");
        return $this->db->get()->result();
    }

    public function get_id($id)
    {
        $this->db->select("*");
        $this->db->from("jenis_proyek");
        $this->db->where("id_jenis_proyek", $id);
        return $this->db->get()->result();
    }

    public function get_nama_jenisproyek(array $cond)
    {
        $this->db->select("id_jenis_proyek, nama_jenis_proyek");
        $this->db->from("jenis_proyek");
        $this->db->where($cond);
        $this->db->order_by("id_jenis_proyek");
        return $this->db->get()->result();
    }

    public function add($id, $nama, $ukuran, $status)
    {
        return $this->db->insert('jenis_proyek', array(
            'id_jenis_proyek' => $id,
            'nama_jenis_proyek' => $nama,
            'ukuran_jenis_proyek' => $ukuran,
            'status_jenis_proyek' => $status
            ));
    }

    public function edit($id, $nama, $ukuran, $status)
    {
        $this->db->where('id_jenis_proyek', $id);
        return $this->db->update('jenis_proyek', array(
            'nama_jenis_proyek' => $nama,
            'ukuran_jenis_proyek' => $ukuran,
            'status_jenis_proyek' => $status
            ));
    }

    public function genId()
    {
        $this->db->select("max(right(id_jenis_proyek, 3)) as id");
        $this->db->from("jenis_proyek");
        $id = $this->db->get()->result()[0]->id;
        $id = $id==null?1:($id+1);
        $counter = '000'.$id;
        return 'JPRO'.substr($counter, strlen($counter) - 3, 3);
    }

    public function deactivate($id)
    {
        $this->db->where('id_jenis_proyek', $id);
        return $this->db->update('jenis_proyek', array('status_jenis_proyek' => 'N'));
    }

    public function activate($id)
    {
        $this->db->where('id_jenis_proyek', $id);
        return $this->db->update('jenis_proyek', array('status_jenis_proyek' => 'Y'));
    }
}
?>