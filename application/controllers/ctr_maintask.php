<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctr_maintask extends CI_Controller 
{
	public function index() 
	{
		$data['isi'] = 'master/maintask_insert';

        $data['maintask'] = $this->m_maintask->get_all();
        $data['id_main_task'] = $this->m_maintask->genId();

        $this->load->view('firstpage', $data);
	}

	public function tambah_ubah() {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $status = "Y";
        
        $check = $this->m_maintask->get_id($id);
        if(sizeof($check) > 0)
            $act = $this->m_maintask->edit($id, $nama, $status);
        else
            $act = $this->m_maintask->add($id, $nama, $status);
        
        if ($act > 0) {
                $this->session->set_flashdata('pesan', '<b>Berhasil!</b> Data main task telah disimpan.');
        } else {
                $this->session->set_flashdata('pesan', '<b>Gagal!</b> Data main task gagal disimpan.');
        }
        redirect('ctr_maintask');
    }
    
    public function activate($id) {
        $check = $this->m_maintask->get_id($id)[0]->status_main_task;
        if($check == "Y") {
            $act = $this->m_maintask->deactivate($id);
            
            if ($act > 0)
                $this->session->set_flashdata('pesan', '<b>Berhasil!</b> Data main task telah dinon-aktifkan.');
            else 
                $this->session->set_flashdata('pesan', '<b>Gagal!</b> Data main task gagal dinon-aktifkan.');
        } else {
            $act = $this->m_maintask->activate($id);
            
            if ($act > 0)
                $this->session->set_flashdata('pesan', '<b>Berhasil!</b> Data main task telah diaktifkan.');
            else 
                $this->session->set_flashdata('pesan', '<b>Gagal!</b> Data main task gagal diaktifkan.');
        }
        redirect('ctr_maintask');
    }

    public function ubah($id) {
        $data['isi'] = 'master/maintask_update';

        $data['maintask'] = $this->m_maintask->get_id($id)[0];

        $this->load->view('firstpage', $data);
    }
}
?>