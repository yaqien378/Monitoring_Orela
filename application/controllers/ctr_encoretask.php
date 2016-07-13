<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctr_encoretask extends CI_Controller 
{
	public function index($idtask) 
	{
		$data['isi'] = 'master/encoretask_insert';

        $data['task'] = $this->m_task->get_id($idtask);
        $data['encoretask'] = $this->m_encoretask->get_task($idtask);
        // $data['id_task'] = $this->m_task->genId();

        $this->load->view('firstpage', $data);
	}

    public function get_increment()
    {
        $id_task = $this->input->post("task");

        $increment = $this->m_encoretask->get_increment($id_task);
        echo $increment;
    }

	public function tambah_ubah() {
        $id = $this->input->post('id_encore_task');
        $task = $this->input->post('task');
        $nama = $this->input->post('nama');
        $status = "Y";
        
        $check = $this->m_encoretask->get_id($id);
        if(sizeof($check) > 0)
            $act = $this->m_encoretask->edit($id, $nama, $task, $status);
        else
            $act = $this->m_encoretask->add($id, $nama, $task, $status);
        
        if ($act > 0) {
                $this->session->set_flashdata('pesan', '<b>Berhasil!</b> Data encore task telah disimpan.');
        } else {
                $this->session->set_flashdata('pesan', '<b>Gagal!</b> Data encore task gagal disimpan.');
        }
        redirect('ctr_encoretask/index/'.$task);
    }

    public function Update_encoretask() {
        $id = $this->input->post('id_encore_task');;
        $nama = $this->input->post('nama');
        
        $task = 'TASK'.substr($id, 2,6);
        $act = $this->m_encoretask->edit($id, $nama);
        if ($act > 0) {
                echo 'ok';
                $this->session->set_flashdata('pesan', '<b>Berhasil!</b> Data encore task telah disimpan.');
        } else {
                echo 'tidak ok';
                $this->session->set_flashdata('pesan', '<b>Gagal!</b> Data encore task gagal disimpan.');
        }
        redirect('ctr_encoretask/index/'.$task);
    }
    
    public function activate($id) {
        $check = $this->m_encoretask->get_id($id)[0]->status_task;
        if($check == "Y") {
            $act = $this->m_encoretask->deactivate($id);
            
            if ($act > 0)
                $this->session->set_flashdata('pesan', '<b>Berhasil!</b> Data encore task telah dinon-aktifkan.');
            else 
                $this->session->set_flashdata('pesan', '<b>Gagal!</b> Data encore task gagal dinon-aktifkan.');
        } else {
            $act = $this->m_task->activate($id);
            
            if ($act > 0)
                $this->session->set_flashdata('pesan', '<b>Berhasil!</b> Data encore task telah diaktifkan.');
            else 
                $this->session->set_flashdata('pesan', '<b>Gagal!</b> Data encore task gagal diaktifkan.');
        }
        redirect('ctr_task');
    }

    public function ubah($id) {
        $data['isi'] = 'master/encoretask_update';

        $data['encoretask'] = $this->m_encoretask->get_id($id)[0];

        $this->load->view('firstpage', $data);
    }
}
?>