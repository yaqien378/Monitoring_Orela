<?php

class m_proyek extends CI_Model {

    function __construct() {
        parent::__construct();
    }

	public function get_all()
    {
        $this->db->select("*");
        $this->db->from("project");
        return $this->db->get()->result();
    }

    public function get_pepro($pepro)
    {
        $this->db->select("project.*, perusahaan.nama_perusahaan, jenis_proyek.nama_jenis_proyek");
        $this->db->from("project");
        $this->db->join("perusahaan", "jenis_proyek", "project.id_perusahaan = perusahaan.id_perusahaan", "project.id_jenis_proyek = jenis_proyek.id_jenis_proyek", "left");
        $this->db->where("id_proyek", $pepro);
        return $this->db->get()->result();
    }

    public function get_id($id)
    {
        $this->db->select("*");
        $this->db->from("project");
        $this->db->where("id_proyek", $id);
        return $this->db->get()->result();
    }

    public function add($id, $perusahaan, $jenisproyek, $deskripsi, $tgl_penerimaan, $est_waktu, $est_biaya, $status, $progress)
    {
        return $this->db->insert('project', array(
            'id_proyek' => $id,
            'id_perusahaan' => $perusahaan,
            'id_jenis_proyek' => $jenisproyek,
            'deskripsi_proyek' => $deskripsi,
            'tanggal_penerimaan_proyek' => $tgl_penerimaan,
            'estimasi_waktu_proyek' => $est_waktu,
            'estimasi_biaya_proyek' => $est_biaya,
            'status_proyek' => $status,
            'progress_proyek' => $progress
            ));
    }

    public function edit($id, $perusahaan, $jenisproyek, $deskripsi, $tgl_penerimaan, $est_waktu, $est_biaya)
    {
        $this->db->where('id_proyek', $id);
        return $this->db->update('project', array(
            'id_perusahaan' => $perusahaan,
            'id_jenis_proyek' => $jenisproyek,
            'deskripsi_proyek' => $deskripsi,
            'tanggal_penerimaan_proyek' => $tgl_penerimaan,
            'estimasi_waktu_proyek' => $est_waktu,
            'estimasi_biaya_proyek' => $est_biaya,
            ));
    }

    public function get_increment($perusahaan, $jenis)
    {
        $this->db->select("coalesce(substring(id_proyek from 10 for 3)::integer + 1, 0) as id");
        $this->db->from("project");
        $this->db->where("id_perusahaan = '".$perusahaan."' and id_jenis_proyek = '".$jenis."'");
        $hasil = $this->db->get()->result();
        if(count($hasil) > 0) 
            return $hasil[0]->id;
        else
            return 1;
    }

    public function deactivate($id)
    {
        $this->db->where('id_proyek', $id);
        return $this->db->update('project', array('status_proyek' => 'N'));
    }

    public function activate($id)
    {
        $this->db->where('id_proyek', $id);
        return $this->db->update('project', array('status_proyek' => 'Y'));
    }

    public function join_all(array $cond=null)
    {
        $this->db->select("*");
        $this->db->from("project");
        $this->db->join("perusahaan","project.id_perusahaan = perusahaan.id_perusahaan");
        $this->db->join("jenis_proyek","project.id_jenis_proyek = jenis_proyek.id_jenis_proyek");
        if ($cond > 0)
            $this->db->where($cond);
        return $this->db->get()->result();
    }
}
?>