<?php
/**
 * 
 */
 class mlogin extends CI_Model
 {

    public $nama_table = 'admin';
    public $username = 'username';
    
	function cek_login($username,$password){
	    $this->db->where('username', $username);
	    $this->db->where('password', $password);
		return $this->db->get($this->nama_table)->row();
	}	
 } 
 ?>