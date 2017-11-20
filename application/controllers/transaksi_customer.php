<?php 
/**
* 
*/
class Transaksi_customer extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('Transaksi_customer_model');
	
	}

	function index()
	{
		$data['data_transaksi']=$this->Transaksi_customer_model->ambil_data();
		$this->load->view('transaksi/transaksi_customer_list',$data);
	}

	public function tambah()

	{
		$data=array(
			'action'				=>site_url('transaksi/tambah_aksi'),
			'id_transaksi'			=>set_value('id_transaksi'),
			'id_catalog'			=>set_value('id_catalog'),
			'id_customer'			=>set_value('id_customer'),
			'nomor_resi'		=>set_value('nomor_resi'),
			'button'				=>'Tambah'
		);
		$this->load->view('transaksi/transaksi_customer_form',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'id_transaksi'		=>$this->input->post('id_transaksi'),
			'id_catalog'		=>$this->input->post('id_catalog'),
			'id_customer'		=>$this->input->post('id_customer'),
			'nomor_resi'	=>$this->input->post('nomor_resi')
		);
		$this->Transaksi_customer_model->tambah_data($data);
		redirect(site_url('transaksi'));
	}

	public function delete($id)
	{
		$this->Transaksi_customer_model->hapus_data($id);
		redirect(site_url('Transaksi_customer'));
	}

		function edit($id)
	{
		$mhs=$this->Transaksi_customer_model->ambil_data_id($id);
		$data=array(
			'action'	=>site_url('transaksi_customer/edit_aksi'),
			'id_transaksi'		=>set_value('id_transaksi',$mhs->id_transaksi),
			'id_catalog'		=>set_value('id_catalog',$mhs->id_catalog),
			'id_customer'		=>set_value('id_customer',$mhs->id_customer),
			'nomor_resi'	=>set_value('nomor_resi',$mhs->nomor_resi),
			'button'	=>'Edit'
		);
		$this->load->view('transaksi/transaksi_customer_form',$data);
	}

	function edit_aksi()
	{
		$data=array(
			'id_transaksi'		=>$this->input->post('id_transaksi'),
			'id_catalog'		=>$this->input->post('id_catalog'),
			'id_customer'		=>$this->input->post('id_customer'),
			'nomor_resi'	=>$this->input->post('nomor_resi')
				
		);
		$id=$this->input->post('id_transaksi');
		$this->Transaksi_customer_model->edit_data($id,$data);
		redirect(site_url('transaksi'));
	}
}
 ?>