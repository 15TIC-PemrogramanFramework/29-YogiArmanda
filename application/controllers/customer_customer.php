<?php 
/**
* 
*/
class customer_customer extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('Customer_customer_model');

	}

	function index()
	{
		$data['data_customer']=$this->Customer_customer_model->ambil_data();
		$this->load->view('customer/customer_customer_list',$data);
	}

	public function tambah()
	{
		$data=array(
			'action'				=>site_url('customer/tambah_aksi'),
			'id_customer'			=>set_value('id_customer'),
			'nama_customer'			=>set_value('nama_customer'),
			'button'				=>'Tambah'
		);
		$this->load->view('customer_customer/customer_customer_form',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'id_customer'		=>$this->input->post('id_customer'),
			'nama_customer'		=>$this->input->post('nama_customer')
		);
		$this->Customer_customer_model->tambah_data($data);
		redirect(site_url('customer_customer'));
	}

	public function delete($id)
	{
		$this->Customer_customer_model->hapus_data($id);
		redirect(site_url('customer_customer'));
	}

	function edit($id)
	{
		$mhs=$this->Customer_customer_model->ambil_data_id($id);
		$data=array(
			'action'			=>site_url('customer/edit_aksi'),
			'id_customer'		=>set_value('id_customer',$mhs->id_customer),
			'nama_customer'		=>set_value('nama_customer',$mhs->nama_customer),
			'button'			=>'Edit'
		);
		$this->load->view('customer_customer/customer_customer_form',$data);
	}

	function edit_aksi()
	{
		$data=array(
			'id_customer'		=>$this->input->post('id_customer'),
			'nama_customer'		=>$this->input->post('nama_customer')
		);
		$id=$this->input->post('id_customer_customer');
		$this->Customer_customer_model->edit_data($id,$data);
		redirect(site_url('customer_customer'));
	}
}
 ?>