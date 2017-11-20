<?php 
/**
* 
*/
class cekresi extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('cekresi_model');
	
	}

	function index()
	{
		$data['data_cekresi']=$this->cekresi_model->ambil_data();
		$this->load->view('cekresi/cekresi_list',$data);
	}

	public function tambah()
	{
		$data=array(
			'action'				=>site_url('cekresi/tambah_aksi'),
			'no_resi'			=>set_value('no_resi'),
			'nama_customer'			=>set_value('nama_customer'),
			'alamat'			=>set_value('alamat'),
			'nomor_hp'		=>set_value('nomor_hp'),
			'button'				=>'Tambah'
		);
		$this->load->view('cekresi/cekresi_form',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'no_resi'		=>$this->input->post('no_resi'),
			'nama_customer'		=>$this->input->post('nama_customer'),
			'alamat'		=>$this->input->post('alamat'),
			'nomor_hp'	=>$this->input->post('nomor_hp')
		);
		$this->cekresi_model->tambah_data($data);
		redirect(site_url('cekresi'));
	}

	public function delete($id)
	{
		$this->cekresi_model->hapus_data($id);
		redirect(site_url('cekresi'));
	}

		function edit($id)
	{
		$mhs=$this->cekresi_model->ambil_data_id($id);
		$data=array(
			'action'	=>site_url('cekresi/edit_aksi'),
			'no_resi'		=>set_value('no_resi',$mhs->no_resi),
			'nama_customer'		=>set_value('nama_customer',$mhs->nama_customer),
			'alamat'		=>set_value('alamat',$mhs->alamat),
			'nomor_hp'	=>set_value('nomor_hp',$mhs->nomor_hp),
			'button'	=>'Edit'
		);
		$this->load->view('cekresi/cekresi_form',$data);
	}

	function edit_aksi()
	{
		$data=array(
			'no_resi'		=>$this->input->post('no_resi'),
			'nama_customer'		=>$this->input->post('nama_customer'),
			'alamat'		=>$this->input->post('alamat'),
			'nomor_hp'	=>$this->input->post('nomor_hp')
				
		);
		$id=$this->input->post('id_cekresi');
		$this->transaksi_model->edit_data($id,$data);
		redirect(site_url('transaksi'));
	}
}
 ?>