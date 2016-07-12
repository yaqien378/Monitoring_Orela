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

        $this->load->view('firstpage', $data);
    }

	public function budget() 
	{
		$data['isi'] = 'planning/budget';

        $this->load->view('firstpage', $data);
	}
}
?>