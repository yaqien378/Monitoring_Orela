<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctr_jenisproyek extends CI_Controller 
{
	public function index() 
	{
		$data['isi'] = 'master/jenisproyek_insert';

        $data['jenisproyek'] = $this->m_jenisproyek->get_all();
        $data['id_jenis_proyek'] = $this->m_jenisproyek->genId();

        $this->load->view('firstpage', $data);
	}

	public function tambah_ubah() {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $ukuran = $this->input->post('ukuran');
        $status = "Y";
        
        $check = $this->m_jenisproyek->get_id($id);
        if(sizeof($check) > 0)
            $act = $this->m_jenisproyek->edit($id, $nama, $ukuran, $status);
        else
            $act = $this->m_jenisproyek->add($id, $nama, $ukuran, $status);
        
        if ($act > 0) {
                $this->session->set_flashdata('pesan', '<b>Berhasil!</b> Data jenis proyek telah disimpan.');
        } else {
                $this->session->set_flashdata('pesan', '<b>Gagal!</b> Data jenis proyek gagal disimpan.');
        }
        redirect('ctr_jenisproyek');
    }
    
    public function activate($id) {
        $check = $this->m_jenisproyek->get_id($id)[0]->status_jenis_proyek;
        if($check == "Y") {
            $act = $this->m_jenisproyek->deactivate($id);
            
            if ($act > 0)
                $this->session->set_flashdata('pesan', '<b>Berhasil!</b> Data jenis proyek telah dinon-aktifkan.');
            else 
                $this->session->set_flashdata('pesan', '<b>Gagal!</b> Data jenis proyek gagal dinon-aktifkan.');
        } else {
            $act = $this->m_jenisproyek->activate($id);
            
            if ($act > 0)
                $this->session->set_flashdata('pesan', '<b>Berhasil!</b> Data jenis proyek telah diaktifkan.');
            else 
                $this->session->set_flashdata('pesan', '<b>Gagal!</b> Data jenis proyek gagal diaktifkan.');
        }
        redirect('ctr_jenisproyek');
    }

    public function ubah($id) {
        $data['isi'] = 'master/jenisproyek_update';

        $data['jenisproyek'] = $this->m_jenisproyek->get_id($id)[0];

        $this->load->view('firstpage', $data);
    }
}
?>