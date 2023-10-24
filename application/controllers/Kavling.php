<?php 
class Kavling extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('BaseModel');
	}
	public function index()
	{
		$data['query']	=$this->BaseModel->GetData('blok_kavling');
		$data['content']	='Kavling/crud_index.php';
		$this->load->view('welcome_message',$data);
	}
	public function Beranda()
	{
		$data['query']	=$this->BaseModel->GetData('blok_kavling');
		$data['content']	='Kavling/crud_index.php';
		$this->load->view('welcome_message',$data);
	}

	public function Insert()
	{
		$add['nama_blok']	= $this->input->post('nama_blok');
		$add['no_blok']		= $this->input->post('no_blok');
		$add['lokasi']		= $this->input->post('lokasi');

		$this->BaseModel->AddData('blok_kavling', $add);

		redirect(site_url('Kavling'));
	}

	public function Delete()
	{
		$id = $this->input->post('id_delete');
		// var_dump($id);
		$this->BaseModel->DeleteData('blok_kavling', 'kd_blok', $id);

		redirect(site_url('Kavling'));
	}
	public function Update()
	{
		$add['kd_blok']		= $this->input->post('id');
		$add['nama_blok']	= $this->input->post('nama_blok');
		$add['no_blok']		= $this->input->post('no_blok');
		$add['lokasi']		= $this->input->post('lokasi');

		$this->BaseModel->UpdateData('blok_kavling', 'kd_blok', $add['kd_blok'], $add);

		redirect(site_url('Kavling'));
	}
}
?>
