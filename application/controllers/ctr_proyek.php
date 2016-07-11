<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctr_proyek extends CI_Controller 
{
	public function index() 
	{
		$data['isi'] = 'master/proyek_insert';

        $data['perusahaan'] = $this->m_perusahaan->get_nama_perusahaan(array('status_perusahaan' => 'Y'));
        $data['jenisproyek'] = $this->m_jenisproyek->get_nama_jenisproyek(array('status_jenis_proyek' => 'Y'));
        $data['proyek'] = $this->m_proyek->get_all();
        // $data['id_proyek'] = $this->m_proyek->genId();

        $this->load->view('firstpage', $data);
	}

    public function get_increment()
    {
        $id_perusahaan = $this->input->post("perusahaan");
        $id_proyek = $this->input->post("jenis_proyek");

        $increment = $this->m_proyek->get_increment($id_perusahaan, $id_proyek);
        echo $increment;
    }

	public function tambah_ubah() {
        $id = $this->input->post('id_proyek');
        $perusahaan = $this->input->post('perusahaan');
        $jenisproyek = $this->input->post('jenisproyek');
        $deskripsi = $this->input->post('deskripsi');
        $tgl_penerimaan = $this->input->post('tgl_penerimaan');
        $est_waktu = $this->input->post('est_waktu');
        $est_biaya = $this->input->post('est_biaya');
        $status = "Y";
        $progress = "0";
        
        $check = $this->m_proyek->get_id($id);
        if(sizeof($check) > 0)
            $act = $this->m_proyek->edit($id, $perusahaan, $jenisproyek, $deskripsi, $tgl_penerimaan, $est_waktu, $est_biaya, $status, $progress);
        else
            $act = $this->m_proyek->add($id, $perusahaan, $jenisproyek, $deskripsi, $tgl_penerimaan, $est_waktu, $est_biaya, $status, $progress);
        
        if ($act > 0) {
                $this->session->set_flashdata('pesan', '<b>Berhasil!</b> Data proyek telah disimpan.');
        } else {
                $this->session->set_flashdata('pesan', '<b>Gagal!</b> Data proyek gagal disimpan.');
        }
        redirect('ctr_proyek');
    }
    
    public function activate($id) {
        $check = $this->m_proyek->get_id($id)[0]->status_proyek;
        if($check == "Y") {
            $act = $this->m_proyek->deactivate($id);
            
            if ($act > 0)
                $this->session->set_flashdata('pesan', '<b>Berhasil!</b> Data proyek telah dinon-aktifkan.');
            else 
                $this->session->set_flashdata('pesan', '<b>Gagal!</b> Data proyek gagal dinon-aktifkan.');
        } else {
            $act = $this->m_proyek->activate($id);
            
            if ($act > 0)
                $this->session->set_flashdata('pesan', '<b>Berhasil!</b> Data proyek telah diaktifkan.');
            else 
                $this->session->set_flashdata('pesan', '<b>Gagal!</b> Data proyek gagal diaktifkan.');
        }
        redirect('ctr_proyek');
    }

    public function ubah($id) {
        $data['isi'] = 'master/perusahaan_update';

        $data['perusahaan'] = $this->m_proyek->get_id($id)[0];

        $this->load->view('firstpage', $data);
    }
}
?>