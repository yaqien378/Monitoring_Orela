<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctr_task extends CI_Controller 
{
	public function index() 
	{
		$data['isi'] = 'master/task_insert';

        $data['maintask'] = $this->m_maintask->get_nama_maintask(array('status_main_task' => 'Y'));
        $data['task'] = $this->m_task->get_all();
        // $data['id_task'] = $this->m_task->genId();

        $this->load->view('firstpage', $data);
	}

    public function get_increment()
    {
        $id_maintask = $this->input->post("maintask");

        $increment = $this->m_task->get_increment($id_maintask);
        echo $increment;
    }

    public function tambah_ubah() {
        $id = $this->input->post('id_task');
        $maintask = $this->input->post('maintask');
        $nama = $this->input->post('nama');
        $status = "Y";
        
        $check = $this->m_task->get_id($id);
        if(sizeof($check) > 0)
            $act = $this->m_task->edit($id, $nama, $maintask, $status);
        else
            $act = $this->m_task->add($id, $nama, $maintask, $status);
        
        if ($act > 0) {
                $this->session->set_flashdata('pesan', '<b>Berhasil!</b> Data task telah disimpan.');
        } else {
                $this->session->set_flashdata('pesan', '<b>Gagal!</b> Data task gagal disimpan.');
        }
        redirect('ctr_task');
    }
    

	public function Update_task() {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');

        $act = $this->m_task->edit($id, $nama);
        if ($act > 0) {
                $this->session->set_flashdata('pesan', '<b>Berhasil!</b> Data task telah disimpan.');
        } else {
                $this->session->set_flashdata('pesan', '<b>Gagal!</b> Data task gagal disimpan.');
        }
        redirect('ctr_task');
    }
    
    public function activate($id) {
        $check = $this->m_task->get_id($id)[0]->status_task;
        if($check == "Y") {
            $act = $this->m_task->deactivate($id);
            
            if ($act > 0)
                $this->session->set_flashdata('pesan', '<b>Berhasil!</b> Data task telah dinon-aktifkan.');
            else 
                $this->session->set_flashdata('pesan', '<b>Gagal!</b> Data task gagal dinon-aktifkan.');
        } else {
            $act = $this->m_task->activate($id);
            
            if ($act > 0)
                $this->session->set_flashdata('pesan', '<b>Berhasil!</b> Data task telah diaktifkan.');
            else 
                $this->session->set_flashdata('pesan', '<b>Gagal!</b> Data task gagal diaktifkan.');
        }
        redirect('ctr_task');
    }

    public function ubah($id) {
        $data['isi'] = 'master/task_update';

        $data['task'] = $this->m_task->get_id($id)[0];

        $this->load->view('firstpage', $data);
    }

    // public function set_id_task()
    // {
    //     $id_main = $this->input->post('id_main');
    //     $main = substr($id_main, 3);

    //     $increment = $this->m_task->get_increment($id_main);
    //     echo $increment;
    //     //mendapatkan id terakhir;
    // }
}
?>