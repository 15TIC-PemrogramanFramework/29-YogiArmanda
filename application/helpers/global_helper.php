<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '<li>
		<a href="'.site_url('home').'">
		<i class="fa fa-home"></i> Home</a>
	</li>
	<li>
		<a href="'.site_url('customer').'">
		<i class="fa fa-user"></i> Customer</a>
	</li>
	<li>
		<a href="'.site_url('catalog').'">
		<i class="fa fa-user"></i> Catalog</a>
	</li>
	<li>
		<a href="'.site_url('transaksi').'">
		<i class="fa fa-user"></i> Transaksi</a>
	</li>
	
	';
	}


function generate_sidemenu2()
	{
		return '<li>
		<a href="'.site_url('HomeCustomer').'">
		<i class="fa fa-home"></i> Home</a>
	</li>
	<li>
		<a href="'.site_url('customer_customer').'">
		<i class="fa fa-user"></i> Customer</a>
	</li>
	
	<li>
		<a href="'.site_url('transaksi_customer').'">
		<i class="fa fa-user"></i> Transaksi</a>
	</li>
	';
	}
