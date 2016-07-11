<?php

class m_material extends CI_Model {

    function __construct() {
        parent::__construct();
    }

	public function get_all()
    {
        $this->db->select("*");
        $this->db->from("material");
        return $this->db->get()->result();
    }

    public function get_id($id)
    {
        $this->db->select("*");
        $this->db->from("material");
        $this->db->where("no_seri_material", $id);
        return $this->db->get()->result();
    }

    public function get_nama_material(array $cond)
    {
        $this->db->select("no_seri_material, nama_material");
        $this->db->from("material");
        $this->db->where($cond);
        $this->db->order_by("no_seri_material");
        return $this->db->get()->result();
    }

    public function add($id, $nama, $satuan, $harga, $status)
    {
        return $this->db->insert('material', array(
            'no_seri_material' => $id,
            'nama_material' => $nama,
            'satuan_material' => $satuan,
            'harga_material' => $harga,
            'status_material' => $status
            ));
    }

    public function edit($id, $nama, $satuan, $harga, $status)
    {
        $this->db->where('no_seri_material', $id);
        return $this->db->update('material', array(
            'nama_material' => $nama,
            'satuan_material' => $satuan,
            'harga_material' => $harga,
            'status_material' => $status
            ));
    }

    public function genId()
    {
        $this->db->select("max(right(no_seri_material, 3)) as id");
        $this->db->from("material");
        $id = $this->db->get()->result()[0]->id;
        $id = $id==null?1:($id+1);
        $counter = '000'.$id;
        return 'M'.substr($counter, strlen($counter) - 3, 3);
    }

    public function deactivate($id)
    {
        $this->db->where('no_seri_material', $id);
        return $this->db->update('material', array('status_material' => 'N'));
    }

    public function activate($id)
    {
        $this->db->where('no_seri_material', $id);
        return $this->db->update('material', array('status_material' => 'Y'));
    }
}
?>