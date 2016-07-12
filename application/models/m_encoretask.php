<?php

class m_encoretask extends CI_Model {

    function __construct() {
        parent::__construct();
    }

	public function get_all()
    {
        $this->db->select("*");
        $this->db->from("encore_task");
        return $this->db->get()->result();
    }

    public function get_id($id)
    {
        $this->db->select("*");
        $this->db->from("encore_task");
        $this->db->where("id_encore_task", $id);
        return $this->db->get()->result();
    }

    public function get_task($maintask)
    {
        $this->db->select("*");
        $this->db->from("encore_task");
        $this->db->where("id_task", $maintask);
        return $this->db->get()->result();
    }

    public function get_nama_encoretask(array $cond)
    {
        $this->db->select("id_encore_task, nama_encore_task");
        $this->db->from("encore_task");
        $this->db->where($cond);
        $this->db->order_by("id_encore_task");
        return $this->db->get()->result();
    }

    public function add($id, $nama, $task, $status)
    {
        return $this->db->insert('encore_task', array(
            'id_encore_task' => $id,
            'id_task' => $task,
            'nama_encore_task' => $nama,
            'status_encore_task' => $status
            ));
    }

    public function edit($id, $nama, $task, $status)
    {
        $this->db->where('id_encore_task', $id);
        return $this->db->update('encore_task', array(
            'id_encore_task' => $id,
            'id_task' => $task,
            'nama_encore_task' => $nama,
            'status_encore_task' => $status
            ));
    }

    public function get_increment($task)
    {
        $this->db->select("coalesce(substring(id_encore_task from 10 for 3)::integer + 1, 0) as id");
        $this->db->from("encore_task");
        $this->db->where("id_task = '".$task."'");
        $this->db->order_by("id","DESC");
        $hasil = $this->db->get()->result();
        if(count($hasil) > 0) 
            return $hasil[0]->id;
        else
            return 1;
    }

    public function deactivate($id)
    {
        $this->db->where('id_encore_task', $id);
        return $this->db->update('encore_task', array('status_encore_task' => 'N'));
    }

    public function activate($id)
    {
        $this->db->where('id_encore_task', $id);
        return $this->db->update('encore_task', array('status_encore_task' => 'Y'));
    }
}
?>