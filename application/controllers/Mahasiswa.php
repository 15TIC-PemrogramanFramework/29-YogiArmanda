<?php 
/**
* 
*/
class Mahasiswa extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('Mahasiswa_model');

		
	}

	function index()
	{
		$data['data_mahasiswa']=$this->Mahasiswa_model->ambil_data();
		$this->load->view('mahasiswa/mahasiswa_list',$data);
	}

	public function tambah()
	{
		$data=array(
			'action'	=>site_url('mahasiswa/tambah_aksi'),
			'nim'		=>set_value('nim'),
			'nama'		=>set_value('nama'),
			'jurusan'	=>set_value('jurusan'),
			'id'		=>set_value('id'),
			'button'	=>'Tambah'
		);
		$this->load->view('mahasiswa/mahasiswa_form',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'nim'		=>$this->input->post('nim'),
			'nama'		=>$this->input->post('nama'),
			'jurusan'	=>$this->input->post('jurusan')
		);
		$this->Mahasiswa_model->tambah_data($data);
		redirect(site_url('mahasiswa'));
	}

	public function delete($id)
	{
		$this->Mahasiswa_model->hapus_data($id);
		redirect(site_url('mahasiswa'));
	}

	function edit($id)
	{
		$mhs=$this->Mahasiswa_model->ambil_data_id($id);
		$data=array(
			'action'	=>site_url('mahasiswa/edit_aksi'),
			'id'		=>set_value('id',$mhs->id),
			'nim'		=>set_value('nim',$mhs->nim),
			'nama'		=>set_value('nama',$mhs->nama),
			'jurusan'	=>set_value('jurusan',$mhs->jurusan),
			'button'	=>'Edit'
		);
		$this->load->view('mahasiswa/mahasiswa_form',$data);
	}

	function edit_aksi()
	{
		$data=array(
			'nim'		=>$this->input->post('nim'),
			'nama'		=>$this->input->post('nama'),
			'jurusan'	=>$this->input->post('jurusan')
		);
		$id=$this->input->post('id');
		$this->Mahasiswa_model->edit_data($id,$data);
		redirect(site_url('mahasiswa'));
	}
}
 ?>