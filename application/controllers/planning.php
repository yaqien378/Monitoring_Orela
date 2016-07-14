<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class planning extends CI_Controller 
{
    public function index() 
    {
        redirect('planning/schedule');
    }

    public function schedule() 
    {
        $data['isi'] = 'planning/schedule';
        $data['perusahaan'] = $this->m_perusahaan->get_nama_perusahaan(array('status_perusahaan' => 'Y'));

        $this->load->view('firstpage', $data);
    }

    public function schedule_act($act) 
    {
        switch ($act) {
            case 'set_jenis':
                $id_perusahaan = $this->input->post('id');
                $jenis_proyek = $this->m_proyek->join_all(array('project.id_perusahaan'=>$id_perusahaan));
                echo '
                  <select id="jenis_proyek" name="jenis_proyek" class="form-control" onchange="pilih_proyek()" required>
                    <option value="">-- Jenis proyek --</option>';
                    foreach ($jenis_proyek as $j) {
                        echo '<option value="'.$j->id_jenis_proyek.'">'.$j->nama_jenis_proyek.'</option>';
                    }
                  echo '
                  </select>';
                break;
            case 'set_proyek':
                $id_perusahaan = $this->input->post('id_perusahaan');
                $id_jenis = $this->input->post('id_jenis');
                $jenis_proyek = $this->m_proyek->join_all(array('project.id_perusahaan'=>$id_perusahaan,'project.id_jenis_proyek'=>$id_jenis));

                if (count($jenis_proyek) > 0) {
                    echo $jenis_proyek[0]->deskripsi_proyek;                    
                }


                break;
            case 'set_view':
                        $main_task = $this->m_maintask->get_active();
                echo '
                    <div class="row">
                      <div class="col-md-12">
                        
                      <table  class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th width="3%">#</th>
                            <th width="15%">Nama Perusahaan</th>
                            <th width="8%">Tanggal Mulai</th>
                            <th width="8%">Durasi</th>
                            <th width="8%">Tanggal Selesai</th>
                            <th width="8%">Est Waktu Tenaga Kerja</th>
                            <th width="10%">Tarif Tenaga Kerja</th>
                            <th width="8%">Jumlah Tenaga Kerja</th>
                            <th width="10%">Biaya Tenaga Kerja</th>
                            <th width="10%">Biaya Lain</th>
                            <th width="10%">Biaya Total</th>
                            <th width="8%">Opsi</th>
                          </tr>
                        </thead>

                        <tbody>';

                        foreach ($main_task as $m) {
                            echo'
                              <tr>
                                <td>*</td>
                                <td style="text-align:center"><strong>'.$m->nama_main_task.'</strong></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="text-align: center;">
                                </td>
                              </tr>
                            ';
                            $a = 1;
                            $task = $this->m_task->join_all(array('task.id_main_task'=>$m->id_main_task,'task.status_task'=>'Y'));
                            foreach ($task as $t)
                            {
                                echo '
                                <tr>
                                    <td>'.$a++.'</td>
                                    <td><strong>'.$t->nama_task.'</strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td style="text-align: center;">
                                      <div class="hidden-sm hidden-xs action-buttons">
                                        <a class="red" href="#" >
                                            <i class="ace-icon fa fa-times bigger-130"></i>
                                        </a>
                                      </div>
                                    </td>
                                </tr>
                                ';

                                $encore = $this->m_encoretask->join_all(array('encore_task.id_task'=>$t->id_task,'encore_task.status_encore_task'=>'Y'));
                                if (count($encore) > 0) {
                                    $jml_encore = count($encore);
                                    $i = 1;
                                    foreach ($encore as $e)
                                    {
                                        echo '
                                          <tr>
                                            <td>'.$jml_encore.'</td>
                                            <td>'.$e->nama_encore_task.'</td>
                                            <td style="text-align:center">
                                              <input type="date" name="tgl_mulai[\''.$e->id_encore_task.'\']" id="tgl_mulai_'.$e->id_encore_task.'" class="form-control">
                                            </td>
                                            <td style="text-align:center">
                                              <input type="number" name="durasi[\''.$e->id_encore_task.'\']" id="durasi_'.$e->id_encore_task.'" class="form-control" onchange="set_tgl_selesai(\''.$e->id_encore_task.'\')" value="0">
                                            </td>
                                            <td style="text-align:center">
                                              <input type="date" name="tgl_selesai[\''.$e->id_encore_task.'\']" id="tgl_selesai_'.$e->id_encore_task.'" class="form-control">
                                              <span id="span_tgl_selesai_'.$e->id_encore_task.'" style="display:none;"><strong>mm/dd/yy</strong></span>
                                            </td>
                                            <td style="text-align:center">
                                              <input type="number" name="waktu_tk[\''.$e->id_encore_task.'\']" id="waktu_tk_'.$e->id_encore_task.'" class="form-control" value="0">
                                            </td>
                                            <td style="text-align:center">
                                              <input type="number" name="tarif_tk[\''.$e->id_encore_task.'\']" id="tarif_tk_'.$e->id_encore_task.'" class="form-control" value="0">
                                            </td>
                                            <td style="text-align:center">
                                              <input type="number" name="jumlah_tk[\''.$e->id_encore_task.'\']" id="jumlah_tk_'.$e->id_encore_task.'" class="form-control" value="0" onchange="set_biaya_tk(\''.$e->id_encore_task.'\')">
                                            </td>
                                            <td style="text-align:center">
                                              <input type="hidden" name="biaya_tk[\''.$e->id_encore_task.'\']" id="biaya_tk_'.$e->id_encore_task.'" class="form-control" value="0">
                                              <span id="span_biaya_tk_'.$e->id_encore_task.'"><strong>0</strong></span>
                                            </td>
                                            <td style="text-align:center">
                                              <input type="number" name="biaya_lain[\''.$e->id_encore_task.'\']" id="biaya_lain_'.$e->id_encore_task.'" class="form-control" value="0" onchange="set_biaya_total(\''.$e->id_encore_task.'\')">
                                            </td>
                                            <td style="text-align:center">
                                              <input type="hidden" name="biaya_total[\''.$e->id_encore_task.'\']" id="biaya_total_'.$e->id_encore_task.'" class="form-control" value="0">
                                                <span id="span_biaya_total_'.$e->id_encore_task.'"><strong>0</strong></span>
                                            </td>
                                            <td style="text-align: center;">
                                              <div class="hidden-sm hidden-xs action-buttons">
                                                <a class="green" href="#" >
                                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                </a>
                                              </div>
                                            </td>
                                          </tr>
                                        ';
                                        $i++;
                                    }
                                }
                        // echo "<pre>";
                        // print_r($encore);
                        // echo "</pre>";
                                    
                            }
                            

                        }
                        echo '
                        </tbody>
                      </table>
                      </div>
                    </div><!-- end row -->

                    <div class="row">
                      <div class="col-md-12">
                        <div class="pull-right">
                          <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                      </div>
                    </div>
                ';
                break;
            default:
                redirect('planning/schedule');
                break;
        }
    }

	public function budget() 
	{
		$data['isi'] = 'planning/budget';

        $this->load->view('firstpage', $data);
	}
}
?>