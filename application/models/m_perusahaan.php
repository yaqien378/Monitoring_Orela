<?php

class m_perusahaan extends CI_Model {

    function __construct() {
        parent::__construct();
    }

	public function get_all()
    {
        $this->db->select("*");
        $this->db->from("perusahaan");
        return $this->db->get()->result();
    }

    public function get_id($id)
    {
        $this->db->select("*");
        $this->db->from("perusahaan");
        $this->db->where("id_perusahaan", $id);
        return $this->db->get()->result();
    }

    public function get_nama_perusahaan(array $cond)
    {
        $this->db->select("id_perusahaan, nama_perusahaan");
        $this->db->from("perusahaan");
        $this->db->where($cond);
        $this->db->order_by("id_perusahaan");
        return $this->db->get()->result();
    }

    public function add($id, $nama, $alamat, $telp, $email, $status)
    {
        return $this->db->insert('perusahaan', array(
            'id_perusahaan' => $id,
            'nama_perusahaan' => $nama,
            'alamat_perusahaan' => $alamat,
            'telepon_perusahaan' => $telp,
            'email_perusahaan' => $email,
            'status_perusahaan' => $status,
            ));
    }

    public function edit($id, $nama, $alamat, $telp, $email, $status)
    {
        $this->db->where('id_perusahaan', $id);
        return $this->db->update('perusahaan', array(
            'nama_perusahaan' => $nama,
            'alamat_perusahaan' => $alamat,
            'telepon_perusahaan' => $telp,
            'email_perusahaan' => $email,
            'status_perusahaan' => $status
            ));
    }

    public function genId()
    {
        $this->db->select("max(right(id_perusahaan, 3)) as id");
        $this->db->from("perusahaan");
        $id = $this->db->get()->result()[0]->id;
        $id = $id==null?1:($id+1);
        $counter = '000'.$id;
        return 'ENT'.substr($counter, strlen($counter) - 3, 3);
    }

    public function deactivate($id)
    {
        $this->db->where('id_perusahaan', $id);
        return $this->db->update('perusahaan', array('status_perusahaan' => 'N'));
    }

    public function activate($id)
    {
        $this->db->where('id_perusahaan', $id);
        return $this->db->update('perusahaan', array('status_perusahaan' => 'Y'));
    }
}
?>