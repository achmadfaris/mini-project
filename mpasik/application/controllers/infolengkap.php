<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class infolengkap extends CI_Controller {

	public function view($id)
	{
		$this->load->model('daftar_penginapan','',true);
		$data['penginapan'] = $this->daftar_penginapan->get_by_id($id);
		$this->load->view('infolengkap',$data);
	}

}
