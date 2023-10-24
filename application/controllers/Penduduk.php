<?php 
class Penduduk extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('PendudukModel');
	}
	public function index()
	{
		$data['query']	=$this->PendudukModel->GetData('penduduk');
		$data['select']	=$this->PendudukModel->GetKavling('penduduk');
		$data['content']	='Penduduk/crud_index.php';
		// var_dump($data['query']);
		$this->load->view('welcome_message',$data);
	}
	public function Beranda()
	{
		$data['query']	=$this->PendudukModel->GetData('penduduk');
		$data['select']	=$this->PendudukModel->GetKavling('penduduk');
		$data['content']	='Penduduk/crud_index.php';
		$this->load->view('welcome_message',$data);
	}

	public function Insert()
	{
		$add['nik']	= $this->input->post('nik');
		$add['nama']		= $this->input->post('nama');
		$add['tempat_lahir']		= $this->input->post('tempat_lahir');
		$add['tgl_lahir']		= $this->input->post('tgl_lahir');
		$add['status1']		= $this->input->post('status1');
		$add['status2']		= $this->input->post('status2');
		$add['status3']		= $this->input->post('status3');
		$add['kd_blok']		= $this->input->post('kd_blok');

		$this->PendudukModel->AddData('penduduk', $add);

		redirect(site_url('Penduduk'));
	}

	public function Delete()
	{
		$id = $this->input->post('id_delete');
		// var_dump($id);
		$this->PendudukModel->DeleteData('penduduk', 'kd_penduduk', $id);

		redirect(site_url('Penduduk'));
	}
	public function Update()
	{
		// var_dump('ada');
		$add['kd_penduduk']	= $this->input->post('id');
		$add['nik']	= $this->input->post('nik');
		$add['nama']		= $this->input->post('nama');
		$add['tempat_lahir']		= $this->input->post('tempat_lahir');
		$add['tgl_lahir']		= $this->input->post('tgl_lahir');
		$add['status1']		= $this->input->post('status1');
		$add['status2']		= $this->input->post('status2');
		$add['status3']		= $this->input->post('status3');
		$add['kd_blok']		= $this->input->post('kd_blok');
		// var_dump($add);
		
		// var_dump(
		$this->PendudukModel->UpdateData('penduduk', 'kd_penduduk', $add['kd_penduduk'], $add);
		// );

		redirect(site_url('Penduduk'));
	}
}
?>
