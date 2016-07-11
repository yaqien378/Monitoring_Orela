<?php

class m_task extends CI_Model {

    function __construct() {
        parent::__construct();
    }

	public function get_all()
    {
        $this->db->select("*");
        $this->db->from("task");
        return $this->db->get()->result();
    }

    public function get_id($id)
    {
        $this->db->select("*");
        $this->db->from("task");
        $this->db->where("id_task", $id);
        return $this->db->get()->result();
    }

    public function get_nama_task(array $cond)
    {
        $this->db->select("id_task, nama_task");
        $this->db->from("task");
        $this->db->where($cond);
        $this->db->order_by("id_task");
        return $this->db->get()->result();
    }

    public function add($id, $nama, $maintask, $status)
    {
        return $this->db->insert('task', array(
            'id_task' => $id,
            'id_main_task' => $maintask,
            'nama_task' => $nama,
            'status_task' => $status
            ));
    }

    public function edit($id, $nama)
    {
        $this->db->where('id_task', $id);
        return $this->db->update('task', array(
            'nama_task' => $nama
            ));
    }

    public function genId()
    {
        $this->db->select("max(right(id_task, 3)) as id");
        $this->db->from("task");
        $id = $this->db->get()->result()[0]->id;
        $id = $id==null?1:($id+1);
        $counter = '000'.$id;
        return 'TASK-'.substr($counter, strlen($counter) - 3, 3);
    }

    public function get_increment($maintask)
    {
        $this->db->select("coalesce(substring(id_task from 10 for 3)::integer + 1, 0) as id");
        $this->db->from("task");
        $this->db->where("id_main_task = '".$maintask."'");
        $this->db->order_by("id","DESC");
        $hasil = $this->db->get()->result();
        if(count($hasil) > 0) 
            return $hasil[0]->id;
        else
            return 1;
    }

    public function deactivate($id)
    {
        $this->db->where('id_task', $id);
        return $this->db->update('task', array('status_task' => 'N'));
    }

    public function activate($id)
    {
        $this->db->where('id_task', $id);
        return $this->db->update('task', array('status_task' => 'Y'));
    }
}
?>