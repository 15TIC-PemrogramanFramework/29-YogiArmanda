<?php 
/**
* 
*/
class catalog extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('catalog_model');

		
	}

	function index()
	{
		$data['data_catalog']=$this->catalog_model->ambil_data();
		$this->load->view('catalog/catalog_list',$data);
	}

	public function tambah()
	{
		$data=array(
			'action'			=>site_url('catalog/tambah_aksi'),
			'id_catalog'		=>set_value('id_catalog'),
			'kategori'			=>set_value('kategori'),
			'nama_barang'		=>set_value('nama_barang'),
			'button'			=>'Tambah'
		);
		$this->load->view('catalog/catalog_form',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'id_catalog'	=>$this->input->post('id_catalog'),
			'kategori'		=>$this->input->post('kategori'),
			'nama_barang'	=>$this->input->post('nama_barang')
		);
		$this->catalog_model->tambah_data($data);
		redirect(site_url('catalog'));
	}

	public function delete($id)
	{
		$this->catalog_model->hapus_data($id);
		redirect(site_url('catalog'));
	}

	function edit($id)
	{
		$mhs=$this->catalog_model->ambil_data_id($id);
		$data=array(
			'action'		=>site_url('catalog/edit_aksi'),
			'id_catalog'	=>set_value('id_catalog',$mhs->id_catalog),
			'kategori'		=>set_value('kategori',$mhs->kategori),
			'nama_barang'	=>set_value('nama_barang',$mhs->nama_barang),
			'button'		=>'Edit'
		);
		$this->load->view('catalog/catalog_form',$data);
	}

	function edit_aksi()
	{
		$data=array(
			'id_catalog'	=>$this->input->post('id_catalog'),
			'kategori'		=>$this->input->post('kategori'),
			'nama_barang'	=>$this->input->post('nama_barang')
		);
		$id=$this->input->post('id_catalog');
		$this->catalog_model->edit_data($id,$data);
		redirect(site_url('catalog'));
	}
}
 ?>