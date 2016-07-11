<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctr_material extends CI_Controller 
{
	public function index() 
	{
		$data['isi'] = 'master/material_insert';

        $data['material'] = $this->m_material->get_all();
        $data['no_seri_material'] = $this->m_material->genId();

        $this->load->view('firstpage', $data);
	}

	public function tambah_ubah() {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $satuan = $this->input->post('satuan');
        $harga = $this->input->post('harga');
        $status = "Y";
        
        $check = $this->m_material->get_id($id);
        if(sizeof($check) > 0)
            $act = $this->m_material->edit($id, $nama, $satuan, $harga, $status);
        else
            $act = $this->m_material->add($id, $nama, $satuan, $harga, $status);
        
        if ($act > 0) {
                $this->session->set_flashdata('pesan', '<b>Berhasil!</b> Data material telah disimpan.');
        } else {
                $this->session->set_flashdata('pesan', '<b>Gagal!</b> Data material gagal disimpan.');
        }
        redirect('ctr_material');
    }
    
    public function activate($id) {
        $check = $this->m_material->get_id($id)[0]->status_material;
        if($check == "Y") {
            $act = $this->m_material->deactivate($id);
            
            if ($act > 0)
                $this->session->set_flashdata('pesan', '<b>Berhasil!</b> Data material telah dinon-aktifkan.');
            else 
                $this->session->set_flashdata('pesan', '<b>Gagal!</b> Data material gagal dinon-aktifkan.');
        } else {
            $act = $this->m_material->activate($id);
            
            if ($act > 0)
                $this->session->set_flashdata('pesan', '<b>Berhasil!</b> Data material telah diaktifkan.');
            else 
                $this->session->set_flashdata('pesan', '<b>Gagal!</b> Data material gagal diaktifkan.');
        }
        redirect('ctr_material');
    }

    public function ubah($id) {
        $data['isi'] = 'master/material_update';

        $data['material'] = $this->m_material->get_id($id)[0];

        $this->load->view('firstpage', $data);
    }
}
?>