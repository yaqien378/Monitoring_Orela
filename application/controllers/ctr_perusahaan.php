<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctr_perusahaan extends CI_Controller 
{
	public function index() 
	{
		$data['isi'] = 'master/perusahaan_insert';

        $data['perusahaan'] = $this->m_perusahaan->get_all();
        $data['id_perusahaan'] = $this->m_perusahaan->genId();

        $this->load->view('firstpage', $data);
	}

	public function tambah_ubah() {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $telp = $this->input->post('telp');
        $email = $this->input->post('email');
        $status = "Y";
        
        $check = $this->m_perusahaan->get_id($id);
        if(sizeof($check) > 0)
            $act = $this->m_perusahaan->edit($id, $nama, $alamat, $telp, $email, $status);
        else
            $act = $this->m_perusahaan->add($id, $nama, $alamat, $telp, $email, $status);
        
        if ($act > 0) {
                $this->session->set_flashdata('pesan', '<b>Berhasil!</b> Data perusahaan telah disimpan.');
        } else {
                $this->session->set_flashdata('pesan', '<b>Gagal!</b> Data perusahaan gagal disimpan.');
        }
        redirect('ctr_perusahaan');
    }
    
    public function activate($id) {
        $check = $this->m_perusahaan->get_id($id)[0]->status_perusahaan;
        if($check == "Y") {
            $act = $this->m_perusahaan->deactivate($id);
            
            if ($act > 0)
                $this->session->set_flashdata('pesan', '<b>Berhasil!</b> Data perusahaan telah dinon-aktifkan.');
            else 
                $this->session->set_flashdata('pesan', '<b>Gagal!</b> Data perusahaan gagal dinon-aktifkan.');
        } else {
            $act = $this->m_perusahaan->activate($id);
            
            if ($act > 0)
                $this->session->set_flashdata('pesan', '<b>Berhasil!</b> Data perusahaan telah diaktifkan.');
            else 
                $this->session->set_flashdata('pesan', '<b>Gagal!</b> Data perusahaan gagal diaktifkan.');
        }
        redirect('ctr_perusahaan');
    }

    public function ubah($id) {
        $data['isi'] = 'master/perusahaan_update';

        $data['perusahaan'] = $this->m_perusahaan->get_id($id)[0];

        $this->load->view('firstpage', $data);
    }
}
?>