<?php

class m_maintask extends CI_Model {

    function __construct() {
        parent::__construct();
    }

	public function get_all()
    {
        $this->db->select("*");
        $this->db->from("main_task");
        return $this->db->get()->result();
    }

    public function get_id($id)
    {
        $this->db->select("*");
        $this->db->from("main_task");
        $this->db->where("id_main_task", $id);
        return $this->db->get()->result();
    }

    public function get_nama_maintask(array $cond)
    {
        $this->db->select("id_main_task, nama_main_task");
        $this->db->from("main_task");
        $this->db->where($cond);
        $this->db->order_by("id_main_task");
        return $this->db->get()->result();
    }

    public function add($id, $nama, $status)
    {
        return $this->db->insert('main_task', array(
            'id_main_task' => $id,
            'nama_main_task' => $nama,
            'status_main_task' => $status
            ));
    }

    public function edit($id, $nama, $status)
    {
        $this->db->where('id_main_task', $id);
        return $this->db->update('main_task', array(
            'nama_main_task' => $nama,
            'status_main_task' => $status
            ));
    }

    public function genId()
    {
        $this->db->select("max(right(id_main_task, 3)) as id");
        $this->db->from("main_task");
        $id = $this->db->get()->result()[0]->id;
        $id = $id==null?1:($id+1);
        $counter = '000'.$id;
        return 'MT-'.substr($counter, strlen($counter) - 3, 3);
    }

    public function deactivate($id)
    {
        $this->db->where('id_main_task', $id);
        return $this->db->update('main_task', array('status_main_task' => 'N'));
    }

    public function activate($id)
    {
        $this->db->where('id_main_task', $id);
        return $this->db->update('main_task', array('status_main_task' => 'Y'));
    }

    public function get_active()
    {
        return $this->db->get_where('main_task',array('status_main_task' => 'Y'))->result();
    }
}
?>