<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carinap extends CI_Controller {

	public function index()
	{
		$this->load->model('daftar_penginapan','',true);
		$data['penginapan'] = $this->daftar_penginapan->get_data();
		$this->load->view('carinap',$data);
	}
}
